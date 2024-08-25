<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\ProjectCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class ProjectCategoryController extends AdminController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $list = ProjectCategory::orderBy('updated_at', 'desc')->paginate(10);
        return view('admin/project-category/index', compact('list'));
    }

    public function create() {
        return view('admin/project-category/create');
    }

    public function store(Request $request) {

        $this->validateStore($request);

        DB::beginTransaction();

        try {

            $model = new ProjectCategory();
            $model->title_en = $request->input('title_en');
            $model->title_jp = $request->input('title_jp');
            $model->slug = $request->input('slug');
            $model->is_active = $request->input('is_active');
            if ($model->save()) {
            
                if ($model->save()) {
                    DB::commit();
                    return redirect()->route('list-project-category')->with('success', Config::get('constants.MESSAGE.CREATE_SUCCEEDED'));
                }
                DB::rollBack();
                return redirect()->route('create-project-category')->with('error', Config::get('constants.MESSAGE.SOMETHING_ERROR'));

            }
            return redirect()->route('create-project-category')->with('error', Config::get('constants.MESSAGE.SOMETHING_ERROR'));
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('create-project-category')->with('error', $e->getMessage()); 
        }
    }

    public function edit($id) {

        $object = ProjectCategory::find($id);

        // If object not found
        if ($object == null || $object->count() == 0) {
            return redirect()->route('list-project-category')->with('error', Config::get('constants.MESSAGE.DATA_NOT_FOUND'));
        }

        return view('admin/project-category/edit', [
            'object' => $object,
        ]);
    }

    public function update(Request $request, $id) {
        $object = ProjectCategory::find($id);

        // If object not found
        if ($object == null || $object->count() == 0) {
            return redirect()->route('list-project-category')->with('error', Config::get('constants.MESSAGE.DATA_NOT_FOUND'));
        }

        $this->validateUpdate($request, $id);

        DB::beginTransaction();

        try {

            $object->title_en = $request->input('title_en');
            $object->title_jp = $request->input('title_jp');
            $object->slug = $request->input('slug');
            $object->is_active = $request->input('is_active');

            if ($object->save()) {
                DB::commit();
                $parsedUrl = parse_url($request->input('callback'));
                $params = [];
                if (isset($parsedUrl['query'])) {
                    parse_str($parsedUrl['query'], $params);
                }
                return redirect()->route('edit-project-category', ['id' => $id])->with('success', Config::get('constants.MESSAGE.UPDATE_SUCCEEDED'));
            }
            DB::rollBack();
            return redirect()->route('edit-project-category', [
                'id' => $id, 
                'callback' => $request->input('callback')
            ])->with('error', Config::get('constants.MESSAGE.SOMETHING_ERROR'));

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('edit-project-category', [
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

            $object = ProjectCategory::find($request['id']);
            // If object not found
            if ($object == null || $object->count() == 0) {
                return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.DATA_NOT_FOUND')], 404);
            }

            // If object is being used elsewhere
            if ($this->isUsing($request['id'])) {
                return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.CANNOT_DELETE_IN_USING')], 404);
            }
        
            DB::beginTransaction();

            if ($object->delete()) {
                DB::commit();
                return response()->json(['status' => 'success','msg' => Config::get('constants.MESSAGE.DELETE_SUCCEEDED')], 200);
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
            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.DATA_NOT_FOUND')], 200);
        }

        $object = ProjectCategory::find($request['id']);
        // If object not found
        if ($object == null || $object->count() == 0) {
            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.DATA_NOT_FOUND')], 200);
        }
        
        // If object is being used elsewhere
        if ($request['status'] == '0') {
            if ($this->isUsing($request['id'])) {
                return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.CANNOT_DEACTIVE_IN_USING')], 200);
            }
        }

        $object->is_active = $request['status'];

        if ($object->save()) {
            return response()->json(['status' => 'success','msg' => Config::get('constants.MESSAGE.CHANGE_STATUS_SUCCEEDED')], 200);
        }
        return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.SOMETHING_ERROR')], 200);
    }

    private function validateStore($request) {
        $this->validate($request, [
            'title_en' => 'required|max:255',
            'title_jp' => 'required|max:255',
            'slug' => 'required|max:255|unique:project_categories',
        ]);
    }

    private function validateUpdate($request, $id) {
        $this->validate($request, [
            'title_en' => 'required|max:255',
            'title_jp' => 'required|max:255',
            'slug' => 'required|max:255|unique:project_categories,slug,' . $id . ',id',
        ]);
    }

    private function isUsing($id) {
        $productCnt = Project::where(['project_category_id' => $id])->count();

        if ($productCnt == 0) {
            return false;
        }
        return true;
    }
}
