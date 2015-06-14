<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Songs;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SongsController extends Controller
{
    public function index()
    {
        $songs = Songs::get();
        //dd($songs);// die(var_dump($songs));
        return view('songs.index',compact('songs'));
    }
    public function show($id)
    {
        $song = Songs::find($id);
        return view('songs.show',compact('song'));
    }

    private  function getSongs()
    {
        return ['Boyfriend' ,"Be Allright",'Fail'];
    }
}
