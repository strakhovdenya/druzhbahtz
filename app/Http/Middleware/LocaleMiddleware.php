<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use function in_array;

class LocaleMiddleware
{

    public static $mainLanguage = 'uk'; //основной язык, который не должен отображаться в URl

    public static $languages = ['en', 'ru', 'uk']; // Указываем, какие языки будем использовать в приложении.

    /**
     * @return string|null
     */
    public static function getLocale(): ?string
    {
        $uri = Request::path();

        $segmentsURI = explode('/', $uri);

        if (!empty($segmentsURI[0]) && $segmentsURI[0] !== self::$mainLanguage && in_array($segmentsURI[0], self::$languages, true)) {
            return $segmentsURI[0];
        }

        return null;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();
        if($locale) {
            App::setLocale($locale);
        } else{
            App::setLocale(self::$mainLanguage);
        }


        return $next($request);
    }
}
