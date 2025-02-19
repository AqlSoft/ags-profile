<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsletterSubscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'is_active',
        'verified_at',
        'verification_token'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'verified_at' => 'datetime'
    ];

    public function markAsVerified()
    {
        $this->update([
            'verified_at' => now(),
            'verification_token' => null
        ]);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeVerified($query)
    {
        return $query->whereNotNull('verified_at');
    }
}
