<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Partner extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "partners";

    protected $fillable = [
        'name_en',
        'name_ar',
        'position_en',
        'position_ar',
        'description_en',
        'description_ar',
        'image',
        'email',
        'phone',
        'linkedin',
        'website',
        'is_active',
        'order',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }

    public function getName()
    {
        return app()->getLocale() == 'ar' ? $this->name_ar : $this->name_en;
    }

    public function getPosition()
    {
        return app()->getLocale() == 'ar' ? $this->position_ar : $this->position_en;
    }

    public function getDescription()
    {
        return app()->getLocale() == 'ar' ? $this->description_ar : $this->description_en;
    }
}
