<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        // الحصول على اللغة الافتراضية وقائمة اللغات
        $defaultLanguage = Language::getDefault();
        $languages = Language::getList();

        return view('frontend.home', compact('products', 'languages', 'defaultLanguage'));
    }

    public function setLocale($locale)
    {
        // البحث عن اللغة المطلوبة
        $language = Language::where('code', $locale)
            ->where('is_active', true)
            ->first();

        if ($language) {
            // تعيين اللغة كافتراضية
            $language->setAsDefault();

            // تحديث الجلسة والتطبيق
            session(['locale' => $locale]);
            session(['direction' => $language->direction]);
            App::setLocale($locale);
            Config::set('app.locale', $locale);

            return redirect()->back()->with('success', __('messages.language_changed'));
        }

        return redirect()->back()->with('error', __('messages.language_not_found'));
    }
}
