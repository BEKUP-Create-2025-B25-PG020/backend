<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Food extends Model
{
    protected $table = 'foods';

    protected $fillable = [
        'region_id',
        'category_id',
        'name',
        'slug',
        'short_description',
        'long_description',
        'food_history',
        'interesting_facts',
        'main_image_url',
        'likes_count',
        'view_count',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'likes_count' => 'integer',
        'view_count' => 'integer'
    ];

    protected $with = ['region', 'category']; // Eager load by default

    // ===========================
    // RELATIONSHIPS
    // ===========================

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function galleries()
    {
        return $this->hasMany(FoodGallery::class);
    }

    // ===========================
    // SCOPES
    // ===========================

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopePopular($query)
    {
        return $query->orderBy('likes_count', 'desc');
    }

    public function scopeMostViewed($query)
    {
        return $query->orderBy('view_count', 'desc');
    }

    public function scopeByRegion($query, $regionId)
    {
        return $query->where('region_id', $regionId);
    }

    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    public function scopeSearch($query, $searchTerm)
    {
        return $query->where(function ($q) use ($searchTerm) {
            $q->where('name', 'LIKE', "%{$searchTerm}%")
                ->orWhere('short_description', 'LIKE', "%{$searchTerm}%")
                ->orWhereHas('category', function ($categoryQuery) use ($searchTerm) {
                    $categoryQuery->where('name', 'LIKE', "%{$searchTerm}%");
                })
                ->orWhereHas('region', function ($regionQuery) use ($searchTerm) {
                    $regionQuery->where('region_name', 'LIKE', "%{$searchTerm}%")
                        ->orWhere('province', 'LIKE', "%{$searchTerm}%")
                        ->orWhere('island', 'LIKE', "%{$searchTerm}%");
                });
        });
    }

    // ===========================
    // METHODS
    // ===========================

    /**
     * Increment view count
     */
    public function incrementViewCount()
    {
        $this->increment('view_count');
    }

    /**
     * Increment like count
     */
    public function incrementLikeCount()
    {
        $this->increment('likes_count');
    }

    // ===========================
    // EVENTS (Auto-generate slug)
    // ===========================

    protected static function boot()
    {
        parent::boot();

        // Auto-generate slug when creating
        static::creating(function ($food) {
            if (empty($food->slug)) {
                $food->slug = Str::slug($food->name);
            }
        });

        // Update slug when name changes
        static::updating(function ($food) {
            if ($food->isDirty('name')) {
                $food->slug = Str::slug($food->name);
            }
        });
    }

    // ===========================
    // ACCESSORS
    // ===========================

    /**
     * Get short excerpt from long description
     */
    public function getExcerptAttribute()
    {
        return Str::limit($this->long_description, 150);
    }

    /**
     * Check if food is popular (likes > 100)
     */
    public function getIsPopularAttribute()
    {
        return $this->likes_count > 100;
    }


    /**
     * Accessor for main_image_url to return full URL
     */
    public function getMainImageUrlAttribute($value)
    {
        if (!$value) {
            return null;
        }

        // Jika sudah full URL (http/https), return as is
        if (str_starts_with($value, 'http')) {
            return $value;
        }

        // Tambahkan base URL dari config
        return config('app.url') . $value;
    }
}
