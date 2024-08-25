<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class LanguageSwitcher
{
    const LANGUAGE_EN = "en";
    const LANGUAGE_JP = "jp";
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Session::has('locale'))
        {
            Session::put('locale', Config::get('app.locale'));
            Session::save();
        }
        if (! in_array(session('locale'), [ self::LANGUAGE_EN, self::LANGUAGE_JP ])) {
            abort(404);
        }
        App::setLocale(session('locale')); // default en
        
        return $next($request);
    }
}
