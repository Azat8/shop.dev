<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    protected $table = 'sub';
    protected $fillable = ['name','cat_id'];
    public function category()
    {
       return $this->BelongsTo('App\Models\Category');
    }
    public function products()
    {
        return $this->BelongsTo('App\Models\Product');
    }
}
