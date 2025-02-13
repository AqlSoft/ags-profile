<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch the application's locale.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLanguage(Request $request, $locale = null)
    {
        // If no locale provided, toggle between ar and en
        if (!$locale) {
            $locale = Session::get('locale', config('app.locale')) === 'ar' ? 'en' : 'ar';
        }

        // Validate locale
        if (!in_array($locale, config('app.supported_locales', ['ar', 'en']))) {
            $locale = config('app.locale');
        }

        // Store locale in session
        Session::put('locale', $locale);

        return back();
    }
}
