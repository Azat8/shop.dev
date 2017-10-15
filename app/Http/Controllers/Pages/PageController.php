<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class PageController extends Controller
{
    public function page($id)
    {

        $model = Product::all();
        return view('site.page', compact('model'));
    }
}
