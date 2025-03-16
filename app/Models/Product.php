<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'product_name', 'details', 'price', 'stock', 'image', 'status'];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function sale()
    {
        return $this->hasMany(Sale::class);
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class, 'product_id');
    }
}
