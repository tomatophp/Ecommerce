<?php

namespace Themes\Ecommerce\App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('themes::pages.index');
    }
}
