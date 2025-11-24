<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'about',
        'price',
        'duration',
        'horse_power',
        'cc',
        'max_speed',
        'is_popular',
        'category_id',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value; // Set the name attribute
        $this->attributes['slug'] = Str::slug($value); // Generate slug from name
    }

    // Relationships
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    // Vehicle has many photos
    public function photos(): HasMany
    {
        return $this->hasMany(VehiclePhoto::class);
    }

    // Vehicle has many testimonials
    public function testimonials(): Hasmany
    {
        return $this->hasMany(Testimonial::class);
    }
}
