<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = 'galeries';

    protected $fillable = [
        'product_id',
        'image'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
