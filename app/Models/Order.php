<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'total',
        'drop_off',
        'shipping_fee'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty', 'sub_total');
    }
}
