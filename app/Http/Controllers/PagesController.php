<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PagesController extends Controller
{
    public function welcome(): View
    {
        return view('main');
    }
}
