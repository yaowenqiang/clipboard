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
        //dd($slug);
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
    /**
     * update song
     *
     * @return void
     * @author Steve Francia <steve.francia@gmail.com>
     */
    public function update($slug,\App\Http\Requests\CreateSongRequest $request)
    {
        //dd(\Request::all());
        //dd(\Request::input());
        //dd(\Request::get('title'));
        //return "Update the song";
        $song = $this->song->whereSlug($slug)->first();
        //$song->title = $request->get('title');
        //$song->save();
        //$song->fill(['title'=>$request->get('title')])->save();
        $song->fill($request->input())->save();
        return redirect('songs');
    }

    /**
     * create a song
     *
     * @return void
     * @author Steve Francia <steve.francia@gmail.com>
     */
    public function create()
    {
        return view('songs.create');
    }

    public function store(\App\Http\Requests\CreateSongRequest $request,Songs $song)
    {
        //$input = $request->all();
        $song->create($request->all());
        //return redirect('songs');
        return redirect()->route('songs.index');

    }
    public function destroy($slug)
    {
        $song = $this->song->whereSlug($slug)->first();
        $song->delete();
        return redirect('songs');
        //return redirect()->route('songs.index');

    }
    private  function getSongs()
    {
        return ['Boyfriend' ,"Be Allright",'Fail'];
    }
}
