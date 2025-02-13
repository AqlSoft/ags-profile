<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    /**
     * Switch the application's locale.
     *
     * @param  string  $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switch($locale)
    {
        Log::info('Language switch requested', [
            'requested_locale' => $locale,
            'current_session_locale' => session('locale')
        ]);

        // تحقق من أن اللغة مدعومة
        if (in_array($locale, ['ar', 'en'])) {
            // حفظ اللغة في الجلسة
            session()->put('locale', $locale);
            
            Log::info('Language switched successfully', [
                'new_locale' => $locale,
                'session_locale' => session('locale')
            ]);
        }

        return redirect()->back();
    }
}
