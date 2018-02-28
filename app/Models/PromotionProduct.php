<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionProduct extends Model
{
    protected $table = "promotion_product";

    protected $fillable = [
        'product_id', 'promotion_id',
    ];
}
