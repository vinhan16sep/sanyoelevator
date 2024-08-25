<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Grape;
use App\Models\Information;
use App\Models\ProductCategory;
use App\Models\ProjectCategory;
use App\Models\Region;
use App\Models\Type;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $activedProductCategories = [];
    protected $activedProjectCategories = [];
    protected $contactInformations = [];
    protected $ver = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->activedProductCategories = $this->getActivedProductCategories();
        $this->activedProjectCategories = $this->getActivedProjectCategories();
        $this->contactInformations = $this->getContactInformations();

        // dd($this->contactInformations);

        $this->ver = Config::get('site_settings.assets_ver');
        View::share('activedProductCategories', $this->activedProductCategories);
        View::share('activedProjectCategories', $this->activedProjectCategories);
        View::share('contactInformations', $this->contactInformations);
        View::share('ver', $this->ver);
        
    }

    protected function getActivedProductCategories() {
        $result = ProductCategory::where(['is_active' => '1'])->get();
        return ($result->count() > 0) ? $result->toArray() : [];
    }

    protected function getActivedProjectCategories() {
        $result = ProjectCategory::where(['is_active' => '1'])->get();
        return ($result->count() > 0) ? $result->toArray() : [];
    }

    protected function getContactInformations() {
        $objects = Information::where(['type' => 'CONTACT'])->get()->toArray();
        $contactInformations = [];
        foreach ($objects as $item) {
            $contactInformations[$item['label']] = $item['value'];
        }
        return $contactInformations;
    }
}
