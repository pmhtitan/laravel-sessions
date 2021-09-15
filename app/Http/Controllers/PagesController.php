<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index()
    {
        Session::put('name',['John Doe']);
        Session::put('age', [30,40,50]);

       

        dd(Session::all()); 

        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
