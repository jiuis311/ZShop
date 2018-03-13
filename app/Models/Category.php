<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Get the product.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
