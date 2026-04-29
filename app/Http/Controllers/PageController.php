<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function about()
    {
        return view('about');
    }

    public function team()
    {
        return view('team');
    }

    public function contact()
    {
        return view('contact');
    }
}