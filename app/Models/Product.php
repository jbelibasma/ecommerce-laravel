<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable=[
        'name',
        'slug',
        'image',
        'description',
        'color',
        'size',
        'price',
        'remise',
        'stock',
        'category_id',
        'created_at',
        'updated_at',
    ];
}
