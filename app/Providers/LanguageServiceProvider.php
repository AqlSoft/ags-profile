<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class LanguageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // تحميل اللغة من الجلسة في كل مرة يتم فيها تحميل الصفحة
        View::composer('*', function ($view) {
            $locale = session('locale', config('app.locale', 'ar'));
            App::setLocale($locale);
            
            // تعيين الاتجاه والمحاذاة
            $isRtl = $locale === 'ar';
            $view->with('dir', $isRtl ? 'rtl' : 'ltr');
            $view->with('align', $isRtl ? 'right' : 'left');
            $view->with('reverseAlign', $isRtl ? 'left' : 'right');
        });
    }
}
