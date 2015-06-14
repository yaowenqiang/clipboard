<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SonssController extends Controller
{
    public function index()
    {
        $songs = array('Boyfriend' ,"Be Allright",'Fail');
        return view('songs.index',compact('songs'));
    }
}
