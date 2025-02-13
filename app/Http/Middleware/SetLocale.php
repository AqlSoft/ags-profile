<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
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
        // إذا لم تكن اللغة موجودة في الجلسة، نضع اللغة الافتراضية
        if (!session()->has('locale')) {
            session()->put('locale', config('app.locale', 'ar'));
        }

        // تحميل اللغة من الجلسة
        $locale = session('locale');

        // نتأكد أن اللغة مدعومة
        if (!in_array($locale, ['ar', 'en'])) {
            $locale = 'ar';
            session()->put('locale', $locale);
        }

        // تحديث لغة التطبيق
        App::setLocale($locale);

        return $next($request);
    }
}
