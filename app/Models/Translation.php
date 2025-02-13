<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Translation extends Model
{
    protected $fillable = ['language_id', 'translation_key_id', 'value'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function key()
    {
        return $this->belongsTo(TranslationKey::class, 'translation_key_id');
    }

    public static function getTranslations($locale)
    {
        return Cache::remember("translations.{$locale}", 60 * 24, function () use ($locale) {
            $language = Language::where('code', $locale)->first();
            if (!$language) {
                return [];
            }

            $translations = [];
            $allTranslations = self::with(['key.group'])
                ->where('language_id', $language->id)
                ->get();

            foreach ($allTranslations as $translation) {
                $group = $translation->key->group->name;
                $key = $translation->key->key;
                if (!isset($translations[$group])) {
                    $translations[$group] = [];
                }
                $translations[$group][$key] = $translation->value;
            }

            return $translations;
        });
    }

    public static function clearCache($locale = null)
    {
        if ($locale) {
            Cache::forget("translations.{$locale}");
        } else {
            $languages = Language::pluck('code');
            foreach ($languages as $lang) {
                Cache::forget("translations.{$lang}");
            }
        }
    }
}
