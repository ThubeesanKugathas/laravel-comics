<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        // config to get data from comics.php
        $data = config('comics');
    
        // compact to give $data to homepage
        return view('home', compact("data"));
    }
}
