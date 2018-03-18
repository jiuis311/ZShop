<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    protected $fillable = [
        'name', 'phone', 'address', 'user_id', 'total_price', 'email', 'status'
    ];

    protected $attributes = [
        'status' => 0
    ];

    /**
     * Get order detail information.
     */
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
