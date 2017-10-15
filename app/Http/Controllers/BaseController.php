<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function fileUpload($file, $path)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $fileName);
//        dd($fileName);
        return $fileName;
    }

}