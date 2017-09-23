<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image','visible', 'category_id'];

    public function category()
    {
//        return $this->hasMany(Product::class, 'category_id', 'id');
        return $this->belongsTo(Category::class);
    }
}
