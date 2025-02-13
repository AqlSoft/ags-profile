<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranslationGroup extends Model
{
    protected $fillable = ['name'];

    public function keys()
    {
        return $this->hasMany(TranslationKey::class, 'group_id');
    }
}
