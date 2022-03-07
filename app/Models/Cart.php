<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table='carts';
    protected $fillable=[
        'price',
        'quantity',
        'product_id',
        'user_id',
        'total',
        'created_at',
        'updated_at'
    ];


}
