<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Strength;

class BusinessController extends Controller
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
        $business = Business::query()->where(["is_active" => 1])->get()->toArray();
        $strengths = Strength::query()->where(["is_active" => 1])->get()->toArray();

        return view('business', [
           "business" => $business,
           "strengths" => $strengths,
        ]);
    }
}
