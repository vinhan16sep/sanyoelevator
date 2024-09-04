<?php

namespace App\Http\Controllers;

use App\Models\Information;

class AboutController extends Controller
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
    public function index()
    {
        $informations = Information::where("type", "CONTACT")->pluck("value", "label")->toArray();
        return view('about', [
            'informations' => $informations
        ]);
    }
}
