<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Information;

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
//        $banners = Banner::query()->where(["is_active" => 1, "type" => 1])->get();
//        $others = Banner::query()->where(["is_active" => 1, "type" => 2])->get();
//        $tmpAbout = Information::where(['type' => 'ABOUT'])->get()->toArray();
//        $about = [];
//        foreach ($tmpAbout as $item) {
//            $about[$item['label']] = $item['value'];
//        }
        return view('home', [
//            "banners" => ($banners->count() > 0) ? $banners->toArray() : [],
//            "others" => ($others->count() > 0) ? $others->toArray() : [],
//            "homeAbout" => $about
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
}
