<?php
//Route::model('song','App\Songs');
Route::bind('song',function($slug){
    return App\Songs::whereSlug($slug)->first();
    return App\Songs::where(['slug',$slug])->first();

});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/user/', function () {
    //return view('user');
//});
Route::get('/user/', 'UserController@index');
Route::get('/pages/', 'PagesController@index');
Route::get('/about/', 'PagesController@about');

Route::get('/about/', 'PagesController@about');
//router->get()
//get()
get('songs',"SongsController@index");
//get('songs/{id}',"SongsController@show");
get('songs/{slug}',"SongsController@show");
//get('songs/{song}/edit','SongsController@edit');
get('songs/{slug}/edit','SongsController@edit');
