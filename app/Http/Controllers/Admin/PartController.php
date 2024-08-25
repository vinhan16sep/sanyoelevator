<?php

namespace App\Http\Controllers\Admin;

use App\Models\Part;
use App\Models\PartSerial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class PartController extends AdminController
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

        $q = Part::with(['part_serials']);

        if (isset($req['title']) && $req['title']) {
            $q->where('title', 'LIKE', '%' . $req['title'] . '%');
        }

        if (isset($req['is_active']) && $req['is_active'] == '1') {
            $q->where('is_active', 1);
        } else if (isset($req['is_active']) && $req['is_active'] == '0') {
            $q->where('is_active', 0);
        }

        $list = $q->orderBy('id', 'desc')->paginate(10)->withQueryString();
        return view('admin/part/index', [
            'list' => $list,
            'req' => $req,
        ]);
    }

    public function create() {
        return view('admin/part/create', [
        ]);
    }

    public function store(Request $request) {

        $this->validateStore($request);

        DB::beginTransaction();

        try {
            $model = new Part();
            $model->product_id = $request->input('product_id');
            $model->title_en = $request->input('title_en');
            $model->title_jp = $request->input('title_jp');
            $model->code = $request->input('code');
            $model->type = $request->input('type');
            $model->load = $request->input('load');
            $model->speed = $request->input('speed');
            $model->power = $request->input('power');
            $model->qc_number = $request->input('qc_number');
            $model->date = $request->input('date');
            $model->description = $request->input('description');
            $model->is_active = $request->input('is_active');
            if ($model->save()) {
                
                $path = sprintf(Config::get('constants.FILE_STORAGE_PATH.PART_IMAGE'), $model->id);
                $upload = $this->uploadImage($path, $request);
                $model->image = $upload;
                $model->save();
    
                if ($model->save()) {
                    DB::commit();
                    return redirect()->route('list-part')->with('success', Config::get('constants.MESSAGE.CREATE_SUCCEEDED'));
                }
            }
            DB::rollBack();
            return redirect()->route('create-part')->with('error', Config::get('constants.MESSAGE.SOMETHING_ERROR'));

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('create-part')->with('error', $e->getMessage()); 
        }
    }

    public function edit($id) {
        $object = Part::find($id);
        // If object not found
        if ($object == null || $object->count() == 0) {
            return redirect()->route('list-part')->with('error', Config::get('constants.MESSAGE.DATA_NOT_FOUND'));
        }

        return view('admin/part/edit', [
            'object' => $object,
            'callback' => url(URL::previous())
        ]);
    }

    public function update(Request $request, $id) {
        $object = Part::find($id);

        // If object not found
        if ($object == null || $object->count() == 0) {
            return redirect()->route('list-part')->with('error', Config::get('constants.MESSAGE.DATA_NOT_FOUND'));
        }

        $this->validateUpdate($request, $id);

        DB::beginTransaction();

        try {
            
            $object->product_id = $request->input('product_id');
            $object->title_en = $request->input('title_en');
            $object->title_jp = $request->input('title_jp');
            $object->code = $request->input('code');
            $object->type = $request->input('type');
            $object->load = $request->input('load');
            $object->speed = $request->input('speed');
            $object->power = $request->input('power');
            $object->qc_number = $request->input('qc_number');
            $object->date = $request->input('date');
            $object->description = $request->input('description');
            $object->is_active = $request->input('is_active');
                
            if($request->hasfile('image')) {
                $path = sprintf(Config::get('constants.FILE_STORAGE_PATH.PART_IMAGE'), $id);
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

                return redirect()->route('list-part', $params)->with('success', Config::get('constants.MESSAGE.UPDATE_SUCCEEDED'));
            }
            DB::rollBack();
            return redirect()->route('edit-part', [
                'id' => $id, 
                'callback' => $request->input('callback')
            ])->with('error', Config::get('constants.MESSAGE.SOMETHING_ERROR'));

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('edit-part', [
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

            $object = Part::find($request['id']);

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
                
                $path = sprintf(Config::get('constants.FILE_STORAGE_PATH.PART_IMAGE'), $request['id']);
                $delImageStt = $this->deleteImage($path);
                if ($delImageStt) {
                    // Delete serials
                    $partSerials = PartSerial::where(['part_id' => $request['id']])->get();
                    if ($partSerials->count() > 0) {
                        if (PartSerial::where(['part_id' => $request['id']])->delete()) {
                            DB::commit();
                            return response()->json(['status' => 'success','msg' => Config::get('constants.MESSAGE.DELETE_SUCCEEDED')], 200);
                        } else {
                            DB::rollBack();
                            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.CANNOT_DELETE_PART_SERIALS')], 400);
                        }

                    } else {
                        DB::commit();
                        return response()->json(['status' => 'success','msg' => Config::get('constants.MESSAGE.DELETE_SUCCEEDED')], 200);
                    }
                    
                } else {
                    DB::rollBack();
                    return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.SOMETHING_ERROR')], 403);
                }
            }
            DB::rollBack();
            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.SOMETHING_ERROR')], 403);

        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error','msg' => $e->getMessage()], 403);
        }
    }

    public function changeStatus(Request $request) {
        $request = $request->all();

        if (!isset($request['id']) || empty($request['id']) || !isset($request['status']) || ($request['status'] != '0' && $request['status'] != '1')) {
            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.DATA_NOT_FOUND')], 404);
        }

        $object = Part::find($request['id']);

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
            'title_en' => 'required',
            'title_jp' => 'required',
            'code' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    }

    private function validateUpdate($request, $id) {
        $this->validate($request, [
            'title_en' => 'required',
            'title_jp' => 'required',
            'code' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);
    }

    private function checkInUse($id) {
        return false;
    }

    public function getPartSerials(Request $request) {
        $partId = $request->input('part_id');
        $res = [];
        $partSerials = PartSerial::where(['part_id' => $partId])->get();
        if ($partSerials->count() > 0) {
            $res = $partSerials->toArray();
        }
        return response()->json(['status' => 'success','msg' => '', 'data' => $res], 200);
    }

    public function addPartSerial(Request $request) {
        $model = new PartSerial();
        $model->part_id = $request->input('part_id');
        $model->serial = $request->input('serial');
        $model->secret = $request->input('secret');
        $model->is_active = 1;
        if ($model->save()) {
            return response()->json(['status' => 'success','msg' => Config::get('constants.MESSAGE.CREATE_SUCCEEDED')], 200);
        }
        return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.SOMETHING_ERROR')], 403);
    }
    
    public function changePartSerials(Request $request) {
        $req = $request->all();
        $partId = $req['part_id'];
        $serials = $req['serials'];
        $secrets = $req['secrets'];

        DB::beginTransaction();
        
        $del = PartSerial::where(['part_id' => $partId])->delete();

        if ($del) {
            $insArr = [];
            if (isset($req['serials']) && isset($req['secrets'])) {
                foreach ($serials as $key => $item) {
                    $insArr[] = [
                        'part_id' => $partId,
                        'serial' => $item,
                        'secret' => $secrets[$key],
                        'is_active' => 1
                    ];
                }
            }
            $ins = PartSerial::insert($insArr);
            if ($ins) {
                DB::commit();
                return response()->json(['status' => 'success','msg' => Config::get('constants.MESSAGE.UPDATE_SUCCEEDED')], 200);
            }
            DB::rollBack();
            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.SOMETHING_ERROR')], 403);
        } else {
            DB::rollBack();
            return response()->json(['status' => 'error','msg' => Config::get('constants.MESSAGE.SOMETHING_ERROR')], 403);
        }
    }
}
