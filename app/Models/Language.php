<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Language extends Model
{
    protected $fillable = [
        'code',
        'name',
        'native_name',
        'direction',
        'is_default',
        'is_active'
    ];

    protected $casts = [
        'is_default' => 'boolean',
        'is_active' => 'boolean'
    ];

    // Boot method to handle events
    protected static function boot()
    {
        parent::boot();

        // Clear cache when a language is updated
        static::saved(function () {
            Cache::forget('languages.list');
            Cache::forget('language.default');
        });
    }

    // تعيين اللغة كلغة افتراضية وإزالة التعيين من باقي اللغات
    public function setAsDefault()
    {
        // إزالة التعيين من جميع اللغات
        self::query()->update(['is_default' => false]);

        // تعيين هذه اللغة كلغة افتراضية
        $this->is_default = true;
        $this->save();

        // مسح الكاش
        Cache::forget('languages.list');
        Cache::forget('language.default');
    }

    // الحصول على اللغة الافتراضية
    public static function getDefault()
    {

        // return session()->get('language') ?? self::where('is_default', true)->value('code');

        return Cache::remember('language.default', 60 * 24, function () {
            return self::where('is_default', true)->first()
                ?? self::where('is_active', true)->first();
        });
    }

    // الحصول على قائمة اللغات
    public static function getList()
    {
        return Cache::remember('languages.list', 60 * 24, function () {
            return self::where('is_active', true)
                ->orderBy('is_default', 'desc')
                ->orderBy('name')
                ->get();
        });
    }

    // Get current language
    public static function getCurrent()
    {
        $locale = session('locale');

        if (!$locale) {
            return static::getDefault();
        }

        return static::where('code', $locale)
            ->where('is_active', true)
            ->first()
            ??
            static::getDefault();
    }

    // Scope for active languages
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for default language
    public function scopeDefault($query)
    {
        return $query->where('is_default', true);
    }

    // Check if this is the current language
    public function isCurrent()
    {
        return $this->code === session('locale');
    }

    // Check if this is the default language
    public function isDefault()
    {
        return $this->is_default;
    }
}
