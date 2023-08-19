<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale') && in_array(session()->get('locale'), Language::pluck('locale')->toArray())) {
            App::setLocale(session()->get('locale'));

            if (Language::where('locale', session()->get('locale'))->value('direction') === "rtl") {
                session(['lang-rtl' => true]);
            } else {
                session()->forget('lang-rtl');
            }
        }
        return $next($request);
    }
}
