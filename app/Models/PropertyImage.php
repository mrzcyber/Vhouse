<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class PropertyImage extends Model
{
    protected $guarded = ['id'];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    protected static function booted(): void
    {
        static::deleted(function (PropertyImage $propertyImage) {
            if ($propertyImage->image) {
                Storage::disk('public')->delete($propertyImage->image);
            }
        });
    }
}
