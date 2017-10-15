<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Component\Console\Input\Input;

class ProductController extends BaseController
{
    public function index()
    {
        $model = Product::all();
        return view('admin.product.index', compact('model'));
    }

    public function create()
    {
        $model = false;
        $categories = collect(Category::get())->pluck('name', 'id')->all();
        $formRoute = 'product.save';
        return view('admin.product.create', compact('model', 'categories', 'formRoute'));
    }

    public function save(Request $request)
    {
//        dd(Input::all());
        $model = new Product();
        $image = $this->fileUpload($request->file('image'), public_path('uploads/product_images/'));
        $request->merge(['image' => $image]);
        $model->create($request->except('_token'))->save();
        return redirect()->route('product.index');
    }

    public function delete(Request $request, $id)
    {
        $model = Product::find($id);
        $name = $model->name;
        $model->delete();
        return redirect()->back()->with('delete-massage', $name);
    }

    public function edit(Request $request, $id)
    {
        $model = Product::find($id);
        $formRoute = ['product.update', $id];
        return view('admin.product.update', compact('model', 'formRoute'));
    }

    public function update(Request $request, $id)
    {
        $model = Product::findOrFail($id);
        $oldName = $model->name;
        $model->update($request->all());
        return redirect(route('product.index'))->with('update-massage', 'product ' . $oldName . ' changed to ' . $request->name);
    }
}