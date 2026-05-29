<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Property extends Model
{
    protected $guarded = ['id'];

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
