<?php
namespace App\Http\Controllers;
use App\Models\Sub;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\Debug\Tests\Fixtures\ClassAlias;
class CategoryController extends BaseController
{
    public function index()
    {
        $model = Category::all();
        return view('admin.category.index', compact('model'));
    }
    public function create()
    {
        $model = false;
        $formRoute = 'category.save';
        return view('admin.category.create', compact('model', 'formRoute'));
    }
    public function save(Request $request)
    {
        $model = new Category();
        $model->name = $request->name;
        $model->save();
        return redirect(route('category.index'))->with('saved',$request->name);
    }
    public function delete(Request $request, $id)
    {
        $model = Category::find($id);
        $name = $model->name;
        $model->delete();
        return redirect()->back()->with('delete-massage', $name);
    }
    public function update(Request $request, $id)
    {
        $model = Category::findOrFail($id);
        $oldName = $model->name;
        $model->update($request->all());
        return redirect(route('category.index'))->with('update-massage', 'Category ' . $oldName . ' changed to ' . $request->name);
    }
    public function edit(Request $request, $id)
    {
        $model = Category::find($id);
        $formRoute = ['category.update', $id];
        return view('admin.category.update', compact('model', 'formRoute'));
    }
}