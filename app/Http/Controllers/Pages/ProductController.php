<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sub;

class ProductController extends Controller
{
    public function product()
    {
        $model = Product::all();
        $category = Category::all();
        $sub = Sub::all();

        return view('site.product', compact('model','category', 'sub'));
    }
    public function sub()
    {
        $model = Product::all();
        $category = Category::all();
        $sub = Sub::all();
        return view('site.categoryPage', compact('model','category', 'sub'));
    }
}
