<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class IndexController extends Controller
{
    public function show()
    {
        return view('site.index');
    }
    public function product()
    {
        $model = Product::all();
        $category = Category::all();
        return view('site.product', compact('model','category'));
    }
    public function page($id)
    {
        $model = Product::findOrFail($id);
        return view('site.product', compact('model'));
    }
    public function team()
    {
        return view('site.team');
    }
    public function events()
    {
        return view('site.events');
    }
    public function contact()
    {
        return view('site.contact');
    }

}
