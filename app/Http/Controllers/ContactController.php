<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactEmail;
use Illuminate\Http\Request;

class ContactController extends Controller
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

        return view('contact', [
            "contactInformations" => $this->contactInformations,
        ]);
    }


    public function store(Request $request){
        try {
            $data = $request->only(["name", "email", "subject", "message"]);
            //insert db

            
            $this->sendMailContact($data);
            return [
                "response" => "success"
            ];
        } catch (\Throwable $th) {
            \Log::error($th);
        }
        return false;
    }
    

    private function sendMailContact($data){
        $name = $data["name"] ?? ""; 
        $email = $data["email"] ?? ""; 
        $subject = $data["subject"] ?? ""; 
        $message = $data["message"] ?? "";
        return SendContactEmail::dispatch($name, $email, $subject, $message);
    }
}
