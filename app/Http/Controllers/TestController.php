<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function show()
    {
        $model = Test::all();
        return view('test',compact('model'));
    }

}
