<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodGallery extends Model
{
    protected $fillable = [
        'food_id',
        'image_url',
        'main_photo'
    ];

    protected $casts = [
        'main_photo' => 'boolean'
    ];

    // Relationships
    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    // Scopes
    public function scopeMainPhoto($query)
    {
        return $query->where('main_photo', true);
    }

    public function scopeNotMainPhoto($query)
    {
        return $query->where('main_photo', false);
    }
}
