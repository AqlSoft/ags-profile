<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Translation;

class TranslationServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Load translations from database
        $locale = session('locale', config('app.locale'));
        $translations = Translation::getTranslations($locale);

        if (!empty($translations)) {
            foreach ($translations as $group => $messages) {
                app('translator')->addLines($messages, $locale);
            }
        }
    }
}
