<?php

namespace Solidariun\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index(){
        return view('app');
    }
}
