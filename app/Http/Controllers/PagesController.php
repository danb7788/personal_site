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

    public function shirts() {
        $wide = true;
        return view('design.shirts')->with('wide', $wide);
    }

    public function albums() {
        $wide = true;
        return view('design.albums')->with('wide', $wide);
    }

    public function coding() {
        return view('coding');
    }

    public function podcasting() {
        return view('podcasting');
    }

    public function music() {
        return view('music');
    }

    public function consulting() {
        return view('consulting');
    }
}
