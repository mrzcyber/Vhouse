<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;

class Property extends Model
{
    use Sluggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function images(): HasMany
    {
        return $this->hasMany(PropertyImage::class);
    }

    protected static function booted(): void
    {
        static::deleted(function (Property $property) {
            if ($property->thumbnail) {
                Storage::disk('public')->delete($property->thumbnail);
            }
        });
    }
}
