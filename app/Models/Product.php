<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'name', 'brand_id', 'category_id', 'description', 'price',
    ];

    protected $attributes = [
        'brand_id' => 1,
        'category_id' => 1,
    ];

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
