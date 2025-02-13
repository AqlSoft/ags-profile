<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    /**
     * تغيير لغة التطبيق
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setLang($locale)
    {
        // التحقق من أن اللغة المطلوبة مدعومة
        if (in_array($locale, ['ar', 'en'])) {
            // حفظ اللغة في الجلسة
            session()->put('locale', $locale);
            
            // تحديث لغة التطبيق
            App::setLocale($locale);
        }
        
        // العودة للصفحة السابقة
        return redirect()->back();
    }
}
