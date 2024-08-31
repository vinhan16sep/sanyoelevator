<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Business;
use App\Models\Information;
use App\Models\Product;
use App\Models\Strength;

class HomeController extends Controller
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
        $products = Product::query()->where(["is_active" => 1])->get()->toArray();

        return view('home', [
           "business" => $business,
           "strengths" => $strengths,
           "products" => $products,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutUs()
    {
        $about = Information::where("type", "ABOUT")->pluck("value", "label");
        return view('about', [
            'about' => $about
        ]);
    }

    public function privacyPolicy()
    {
        return view('privacy_policy');
    }

    public function siteMap()
    {
        return view('site_map');
    }
}
