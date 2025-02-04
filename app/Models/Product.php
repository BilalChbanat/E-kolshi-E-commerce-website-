<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'QuantityAvailable',
        'quantityInStock',
        'seller',
        'ref',
        'category_id'
    ];

    public function productSeller()
    {
        return $this->belongsTo(User::class, 'seller');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
