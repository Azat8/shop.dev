<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function events()
    {
        return view('site.events');
    }
}
