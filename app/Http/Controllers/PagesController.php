<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To Laravel Application';
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }
}