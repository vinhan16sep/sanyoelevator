<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class SiteSettings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = app()->getLocale();
        $site_settings = config("site_settings");
        $site_settings["meta_title"] = $site_settings["meta_title_$language"];
        $site_settings["meta_keyword"] = $site_settings["meta_keyword_$language"];
        $site_settings["meta_description"] = $site_settings["meta_description_$language"];
        $site_settings["canonical"] = $site_settings["canonical_$language"];
        View::share('site_settings', $site_settings);
        View::share('language', $language);
        return $next($request);
    }
}
