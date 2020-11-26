<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function companies() {
        return view('companies');
    }

    public function about() {
        return view('about');
    }

    public function articles() {
        return view('writing.articles');
    }

    public function books() {
        $wide = true;
        return view('writing.books')->with('wide', $wide);
    }
}
