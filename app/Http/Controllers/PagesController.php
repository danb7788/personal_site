<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() {
        $title = 'Dan Berges';
        $description = 'Personal website for NYC-based entrepreneur Dan Berges';

        return view('welcome')
        ->with('title', $title)->with('description', $description);
    }

    public function companies() {
        $title = 'Companies';
        $description = 'Companies Dan Berges has founded';

        return view('companies')
        ->with('title', $title)->with('description', $description);
    }

    public function about() {
        $title = 'About';
        $description = 'About Dan Berges';

        return view('about')
        ->with('title', $title)->with('description', $description);
    }

    public function articles() {
        $title = 'Articles';
        $description = 'Articles written by Dan Berges';

        return view('writing.articles')
        ->with('title', $title)->with('description', $description);
    }

    public function books() {
        $wide = true;
        $title = 'Books';
        $description = 'Books written by Dan Berges';

        return view('writing.books')->with('wide', $wide)
        ->with('title', $title)->with('description', $description);
    }

    public function projects() {
        $title = 'Projects';
        $description = "Dan Berges' personal projects";

        return view('projects')
        ->with('title', $title)->with('description', $description);
    }

    public function courses() {
        $title = 'Courses';
        $description = "Dan Berges' courses on Skillshare";

        return view('courses')
            ->with('title', $title)->with('description', $description);
    }

    public function podcasting() {
        $title = 'Podcasting';
        $description = "Dan Berges' podcasting projects";

        return view('podcasting')
        ->with('title', $title)->with('description', $description);
    }

    public function music() {
        $title = 'Music';
        $description = "Dan Berges' music projects";

        return view('music')
        ->with('title', $title)->with('description', $description);
    }

    public function consulting() {
        $title = 'Consulting';
        $description = "Contact Dan Berges to inquire about consulting rates and availability";

        return view('consulting')
        ->with('title', $title)->with('description', $description);
    }
}
