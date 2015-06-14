<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Songs;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SongsController extends Controller
{
    private $song;
    // construct injection
    public function __construct(Songs $song)
    {
        $this->song = $song;
    }
    //public function index()
    public function index() // method injection
    {
        //$songs = Songs::get();
        $songs = $this->song->get();
        //dd($songs);// die(var_dump($songs));
        return view('songs.index',compact('songs'));
    }
    //public function show($slug)
    //public function show($slug,Songs $song)
    public function show($slug)
    {
        //$song = Songs::find($id);
        $song = $this->song->whereSlug($slug)->first();
        return view('songs.show',compact('song'));
    }
    public function edit($slug)
    {
        //return 'edit the song with a title of '.$song->title;
        //return view('songs.edit',compact('song'));
        $song = $this->song->whereSlug($slug)->first();
        return view('songs.edit',compact('song'));
    }

    private  function getSongs()
    {
        return ['Boyfriend' ,"Be Allright",'Fail'];
    }
}
