<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable=[
        'order_number',
        'customer_name',
        'customer_email',
        'total_amount',
        'status',
        'order_date',
        'shipping_address'
    ];
}
