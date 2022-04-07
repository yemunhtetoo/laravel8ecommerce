<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = "products";
    /**
     * Get the category that owns the product.
     */
    public function category(){
        return $this->belongsTo(category::class,'category_id');
    }

    public function orderItems(){
        return $this->hasMany(orderItem::class,'product_id');
    }
}
