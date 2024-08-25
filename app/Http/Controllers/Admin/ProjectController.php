<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class ProjectController extends AdminController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    public function index(Request $request) {

        $req = $request->all();

        $q = Project::with(['project_category']);

        // Tên sản phẩm
        if (isset($req['title']) && $req['title']) {
            $q->where('title_en', 'LIKE', '%' . $req['title'] . '%');
        }

        // Category
        if (isset($req['project_category_id']) && $req['project_category_id']) {
            $q->where('project_category_id', $req['project_category_id']);
        }

        // Kích hoạt
        if (isset($req['is_active']) && $req['is_active'] == '1') {
            $q->where('is_active', 1);
        } else if (isset($req['is_active']) && $req['is_active'] == '0') {
            $q->where('is_active', 0);
        }

        $list = $q->orderBy('id', 'desc')->paginate(10)->withQueryString();
        return view('admin/project/index', [
            'list' => $list,
            'req' => $req,
            'activedProjectCategories' => $this->activedProjectCategories,
        ]);
    }

    public function create() {
        return view('admin/project/create', [
            'activedProjectCategories' => $this->activedProjectCategories,
        ]);
    }

    public function store(Request $request) {

        $this->validateStore($request);

        DB::beginTransaction();

        try {
            $model = new Project();
            $model->project_category_id = $request->input('project_category_id');
            $model->title_en = $request->input('title_en');
            $model->title_jp = $request->input('title_jp');
            $model->slug = $request->input('slug');
            $model->is_active = $request->input('is_active');
            if ($model->save()) {
                
                $path = sprintf(Config::get('constants.FILE_STORAGE_PATH.PROJECT_IMAGE'), $model->id);
                $upload = $this->uploadImage($path, $request);
                $model->image = $upload;
                $model->save();
    
                if ($model->save()) {
                    DB::commit();
                    return redirect()->route('list-project')->with('success', Config::get('constants.MESSAGE.CREATE_SUCCEEDED'));
                }
            }
            DB::rollBack();
            return redirect()->route('create-project')->with('error', Config::get('constants.MESSAGE.SOMETHING_ERROR'));

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('create-project')->with('error', $e->getMessage()); 
        }
    }

    public function edit($id) {
        $object = Project::find($id);
        // If object not found
        if ($object == null || $object->count() == 0) {
            return redirect()->route('list-project')->with('error', Config::get('constants.MESSAGE.DATA_NOT_FOUND'));
        }

        return view('admin/project/edit', [
            'object' => $object,
            'activedProjectCategories' => $this->activedProjectCategories,
            'callback' => url(URL::previous())
        ]);
    }

    public function update(Request $request, $id) {
        $object = Project::find($id);

        // If object not found
        if ($object == null || $object->count() == 0) {
            return redirect()->route('list-project')->with('error', Config::get('constants.MESSAGE.DATA_NOT_FOUND'));
        }

        $this->validateUpdate($request, $id);

        DB::beginTransaction();

        try {
            
            $object->project_category_id = $request->input('project_category_id');
            $object->title_en = $request->input('title_en');
            $object->title_jp = $request->input('title_jp');
            $object->slug = $request->input('slug');
            $object->is_active = $request->input('is_active');
                
            if($request->hasfile('image')) {
                $path = sprintf(Config::get('constants.FILE_STORAGE_PATH.PROJECT_IMAGE'), $id);
                $prevImg = $object->image;
                $upload = $this->updateImage($path, $request, $prevImg);
                $object->image = $upload;
            }

            if ($object->save()) {
                DB::commit();
                $parsedUrl = parse_url($request->input('callback'));
                $params = [];
                if (isset($parsedUrl['query'])) {
                    parse_str($parsedUrl['query'], $params);
                }

                return redirect()->route('list-project', $params)->with('success', Config::get('constants.MESSAGE.UPDATE_SUCCEEDED'));
            }
            DB::rollBack();
            return redirect()->route('edit-project', [
                'id' => $id, 
                'callback' => $request->input('callback')
            ])->with('error', Config::get('constants.MESSAGE.SOMETHING_ERROR'));

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('edit-project', [
                'id' => $id, 
                'callback' => $request->input('callback')
            ])->with('error', $e->getMessage()); 
        }
    }

    public function delete(Request $request) {
        $request = $request->all();

        try {

            // If got bad parameter(s)
            if (!isset($request['id']) || empty($request['id'])) {
                return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.DATA_NOT_FOUND')], 404);
            }

            $object = Project::find($request['id']);

            // If object not found
            if ($object == null || $object->count() == 0) {
                return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.DATA_NOT_FOUND')], 404);
            }

            // If object is being used elsewhere
            if ($this->checkInUse($request['id'])) {
                return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.CANNOT_DELETE_IN_USING')], 404);
            }
        
            DB::beginTransaction();

            if ($object->delete()) {
                
                $path = sprintf(Config::get('constants.FILE_STORAGE_PATH.PROJECT_IMAGE'), $request['id']);
                $delImageStt = $this->deleteImage($path);
                if ($delImageStt) {
                    DB::commit();
                    return response()->json(['status' => 'success','msg' => Config::get('constants.MESSAGE.DELETE_SUCCEEDED')], 200);
                } else {
                    DB::rollBack();
                    return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.SOMETHING_ERROR')], 403);
                }
            }
            DB::rollBack();
            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.SOMETHING_ERROR')], 403);

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('create-news')->with('error', $e->getMessage()); 
        }
    }

    public function changeStatus(Request $request) {
        $request = $request->all();

        if (!isset($request['id']) || empty($request['id']) || !isset($request['status']) || ($request['status'] != '0' && $request['status'] != '1')) {
            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.DATA_NOT_FOUND')], 404);
        }

        $object = Project::find($request['id']);

        // If object not found
        if ($object == null || $object->count() == 0) {
            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.DATA_NOT_FOUND')], 404);
        }
        
        // If object is being used elsewhere
        if ($request['status'] == '0') {
            if ($this->checkInUse($request['id'])) {
                return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.CANNOT_DEACTIVE_IN_USING')], 404);
            }
        }

        $object->is_active = $request['status'];

        if ($object->save()) {
            return response()->json(['status' => 'success','msg' => Config::get('constants.MESSAGE.CHANGE_STATUS_SUCCEEDED')], 200);
        }
        return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.SOMETHING_ERROR')], 403);
    }
    
    private function validateStore($request) {
        $this->validate($request, [
            'project_category_id' => 'required',
            'title_en' => 'required',
            'title_jp' => 'required',
            'slug' => 'required|max:255|unique:projects',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    }

    private function validateUpdate($request, $id) {
        $this->validate($request, [
            'project_category_id' => 'required',
            'title_en' => 'required',
            'title_jp' => 'required',
            'slug' => 'required|max:255|unique:projects,slug,' . $id . ',id',
            'image' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);
    }

    private function checkInUse($id) {
        return false;
    }
}
