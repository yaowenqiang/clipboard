<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        //return "Welcome to my website.";
        return view('pages.home');
    }

    public function about()
    {
        //return "About me?";
        return view('pages.about');
    }
}
