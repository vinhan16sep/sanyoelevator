<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
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
        $projects = Project::query()->with(["project_category"])->where(["is_active" => 1])->paginate(16)->withQueryString();
        return view('project-list', [
            'projects' => $projects
        ]);
    }

    public function projectCategory($slug){
        $projects = Project::query()->whereHas("project_category", function($q) use($slug){
            $q->where("project_categories.slug", $slug);
        })->with(["project_category"])->where(["is_active" => 1])->paginate(16)->withQueryString();
        return view('project-list', [
            'projects' => $projects
        ]);
    }
}
