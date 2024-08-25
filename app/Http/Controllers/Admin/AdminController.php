<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class AdminController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected $loggedinUsrId = null;
    private $storageUrl = '';
    private $appUrl = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
        
        $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
        $server = $_SERVER['SERVER_NAME'];
        $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
        $this->storageUrl = $protocol . $server . $port . '/storage/';
        $this->appUrl = $protocol . $server . $port;
    }

    protected function uploadImage($path, $request) {
        try {
            if (!Storage::exists($path)) {
                Storage::makeDirectory($path);
            }
            $upload = '';
            if($request->hasfile('image')) {
                $img = $request->file('image');
                $name = time() . str_pad(rand(1,1000000), 6, '0', STR_PAD_LEFT) . '.' . $img->extension();
                $img->storeAs($path, $name);
                // $upload = str_replace('public/', 'storage/', $path) . $name;  
                $upload = 'storage/' . $path . $name;  
            }
            return $upload;
        } catch (\Exception $e) {
            echo '<pre>';
            print_r($e);
            die;
        }
    }

    protected function updateImage($path, $request, $prevImg) {
        $upload = '';
        if($request->hasfile('image')) {
            Storage::delete(str_replace('storage', 'public', $prevImg));
            $upload = $this->uploadImage($path, $request);
        }
        return $upload;
    }

    protected function deleteImage($path) {
        if (!Storage::exists($path)) {
            return true;
        }
        return Storage::deleteDirectory($path);
    }
}
