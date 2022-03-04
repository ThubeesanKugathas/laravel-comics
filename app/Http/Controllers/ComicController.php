<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller {
    public function read($id) {
        $data = config('comics');
        
        if (!is_numeric($id) || (int) $id >= count($data)) {
            abort('404');
        }

        $comicDetail = $data[$id];
    
        return view('comics.comicDetails', compact("comicDetail"));
    }
}
