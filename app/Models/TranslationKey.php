<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranslationKey extends Model
{
    protected $fillable = ['group_id', 'key'];

    public function group()
    {
        return $this->belongsTo(TranslationGroup::class);
    }

    public function translations()
    {
        return $this->hasMany(Translation::class);
    }
}
