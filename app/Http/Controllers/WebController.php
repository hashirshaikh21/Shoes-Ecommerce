<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index'); // Points to web/welcome.blade.php
    }

    public function about()
    {
        return view('web.about'); // Points to web/welcome.blade.php
    }

    public function contact()
    {
        return view('web.contact'); // Points to web/welcome.blade.php
    }

    public function product()
    {
        return view('web.product'); // Points to web/welcome.blade.php
    }

    public function form()
    {
        return view('web.form'); // Points to web/welcome.blade.php
    }

    public function addtocart()
    {
        return view('web.addtocart'); // Points to web/welcome.blade.php
    }

    public function description()
    {
        return view('web.description'); // Points to web/welcome.blade.php
    }

    public function login()
    {
        return view('web.login'); // Points to web/welcome.blade.php
    }

    public function register()
    {
        return view('web.register'); // Points to web/welcome.blade.php
    }
}
