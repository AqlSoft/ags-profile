<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'icon',
        'order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{"title_$locale"};
    }

    public function getDescription($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{"description_$locale"};
    }
}
