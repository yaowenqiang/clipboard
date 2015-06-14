<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Songs;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SongsController extends Controller
{
    //public function index()
    public function index(Songs $song) // method injection
    {
        //$songs = Songs::get();
        $songs = $song->get();
        //dd($songs);// die(var_dump($songs));
        return view('songs.index',compact('songs'));
    }
    //public function show($slug)
    public function show(Songs $song)
    {
        //$song = Songs::find($id);
        //$song = Songs::whereSlug($slug)->first();
        return view('songs.show',compact('song'));
    }
    public function edit(Songs $song)
    {
        return 'edit the song with a title of '.$song->title;
        //return view('songs.edit',compact('song'));
    }

    private  function getSongs()
    {
        return ['Boyfriend' ,"Be Allright",'Fail'];
    }
}
