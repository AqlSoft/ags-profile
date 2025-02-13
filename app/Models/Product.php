<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'a_name',
        'e_name',
        'a_description',
        'e_description',
        'image',
        'thumbnail',
        'price',
        'category',
        'sort_order',
        'featured',
        'active',
        'slug',
        'specifications',
        'meta_data'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'featured' => 'boolean',
        'active' => 'boolean',
        'specifications' => 'array',
        'meta_data' => 'array',
        'sort_order' => 'integer'
    ];

    // Get name based on current locale
    public function getName()
    {
        return session('locale') == 'ar' ? $this->a_name : $this->e_name;
    }

    // Get description based on current locale
    public function getDescription()
    {
        return session('locale') == 'ar' ? $this->a_description : $this->e_description;
    }

    // Auto-generate slug when creating/updating
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->e_name);
            }
        });

        static::updating(function ($product) {
            if ($product->isDirty('e_name') && !$product->isDirty('slug')) {
                $product->slug = Str::slug($product->e_name);
            }
        });
    }

    // Scope for active products
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    // Scope for featured products
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    // Get image URL
    public function getImageUrl()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }

    // Get thumbnail URL
    public function getThumbnailUrl()
    {
        return $this->thumbnail ? asset('storage/' . $this->thumbnail) : null;
    }
}
