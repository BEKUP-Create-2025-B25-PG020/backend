<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $fillable = [
        'region_name',
        'regency_city',
        'province',
        'island',
        'region_code'
    ];

    // Relationships
    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    // Accessor - untuk format nama yang lebih rapi
    public function getFullNameAttribute()
    {
        return "{$this->region_name}, {$this->province}";
    }
}
