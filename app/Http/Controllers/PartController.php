<?php

namespace App\Http\Controllers;

use App\Models\PartSerial;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $part = PartSerial::where(['secret' => $request->secret, 'serial' => $request->serial])->with('part')->first();

        return view('part', [
            'part' => $part
        ]);
    }
}
