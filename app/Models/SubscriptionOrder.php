<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionOrder extends Model
{
    protected $fillable = [
        'name',
        'price',
        'duration_months'
    ];

    public function subcription()
    {
        return $this->morphOne(Order::class, 'orderable');
    }
}
