<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function welcome() {
        $title = 'Home';
        $description = 'Personal website for NYC-based entrepreneur Dan Berges';

        return view('main')
        ->with('title', $title)->with('description', $description);
    }
}
