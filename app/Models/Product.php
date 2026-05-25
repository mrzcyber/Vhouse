<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'stock',
        'image',
        'lt',
        'lb',
        'flors',
        'badroom',
        'bathrom',
        'garage'
    ];

    public function galeries()
    {
        return $this->hasMany(Galery::class);
    }
}
