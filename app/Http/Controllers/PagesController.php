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
        $lessons = [
            "My First lesson",
            "My First lesson",
            "My First lesson"
        ];
        $name = "Jacky yao";
        $name2 = "<em>i am a tag wrapped string</em>";
        //return view('pages.home',['lessons'=>$lessons,'name'=>$name,'name2'=>$name2]);
        //return view('pages.home',compact('lessons','name','name2'));
        //return view('pages.home')->with('lessons',$lessons)->with('name',$name)->with('name2',$name2);
        return view('pages.home')->withLessons($lessons)->withName($name)->withName2($name2);
    }

    public function about()
    {
        //return "About me?";
        return view('pages.about');
    }
}
