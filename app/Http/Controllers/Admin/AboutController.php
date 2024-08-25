<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AboutController extends AdminController
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
        $list = Information::where(['type' => 'ABOUT'])->orderBy('id', 'asc')->get();
        return view('admin/about/index', compact('list'));
    }

    public function edit($id) {

        $object = Information::find($id);

        // If object not found
        if ($object == null || $object->count() == 0) {
            return redirect()->route('list-about')->with('error', Config::get('constants.MESSAGE.DATA_NOT_FOUND'));
        }

        return view('admin/about/edit', [
            'object' => $object,
        ]);
    }

    public function update(Request $request, $id) {
        $object = Information::find($id);

        // If object not found
        if ($object == null || $object->count() == 0) {
            return redirect()->route('list-about')->with('error', Config::get('constants.MESSAGE.DATA_NOT_FOUND'));
        }

        $this->validateUpdate($request, $id);

        $object->value = $request->input('value');

        if ($object->save()) {
            return redirect()->route('edit-about', ['id' => $id])->with('success', Config::get('constants.MESSAGE.UPDATE_SUCCEEDED'));
        }
        return redirect()->route('edit-about', ['id' => $id])->with('error', Config::get('constants.MESSAGE.SOMETHING_ERROR'));
    }

    private function validateUpdate($request, $id) {
        $this->validate($request, [
            'value' => 'required',
        ], [
            'value.required' => 'Chưa nhập giá trị'
        ]);
    }

    private function isUsing($id) {
        return false;
    }
}
