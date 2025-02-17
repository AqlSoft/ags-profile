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

        $contacts = [
            0 => [
                'icon'=>    'fa fa-map-marker',
                'title'=>   ['ar' => 'العنوان', 'en' => 'Address'],
                'value'=>   'K.S.A - 5264 King Fahd Route - 6678'
            ],
            1 => [
                'icon'=>    'fa fa-phone',
                'title'=>   ['ar' => 'الهاتف', 'en' => 'Phone'],
                'value'=>   '+966 50 931 4449'
            ],
            2 => [
                'icon'=>    'fa fa-at',
                'title'=>   ['ar' => 'المبيعات', 'en' => 'Sales'],
                'value'=>   'sales@ag-stores.com'
            ],
            3 => [
                'icon'=>    'fa fa-whatsapp',
                'title'=>   ['ar' => 'الواتساب', 'en' => 'Whatsapp'],
                'value'=>   '+966 54 766 0005'
            ],
            4 => [
                'icon'=>    'fa fa-at',
                'title'=>   ['ar' => 'الدعم', 'en' => 'Customer Support'],
                'value'=>   'support@ag-stores.com'
            ],
            // 5 => [
            //     'icon'=>    'fa fa-facebook',
            //     'title'=>   ['ar' => 'Facebook', 'en' => 'Facebook'],
            //     'value'=>   'https://www.facebook.com/554332131101109'
            // ],
            // 6 => [
            //     'icon'=>    'fa fa-linkedin',
            //     'title'=>   ['ar' => 'Linkedin', 'en' => 'Linkedin'],
            //     'value'=>   'https://www.linkedin.com/agstores.sa'
            // ]
        ];

        // الحصول على اللغة الافتراضية وقائمة اللغات
        $defaultLanguage = Language::getDefault();
        $languages = Language::getList();

        return view('frontend.home', compact('products', 'contacts', 'languages', 'defaultLanguage'));
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
