<?php
//Route::model('song','App\Songs');
//Route::bind('song',function($slug){
    ////return App\Songs::whereSlug($slug)->first();
    //return App\Songs::where(['slug',$slug])->first();
//});
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

//Route::get('/', function () {
    //return view('welcome');
//});
//Route::get('/user/', function () {
    //return view('user');
//});
//Route::get('/user/', 'UserController@index');
//Route::get('/pages/', 'PagesController@index');
//Route::get('/about/', 'PagesController@about');

//Route::get('/about/', 'PagesController@about');
//router->get()
//get()
//get('songs',"SongsController@index");
////get('songs/{id}',"SongsController@show");
//get('songs/{slug}',"SongsController@show");
////get('songs/{song}/edit','SongsController@edit');
//get('songs/{slug}/edit','SongsController@edit');
//patch('songs/{slug}','SongsController@update');
//Route::bind('songs',function($song){});
//$router->resource('songs','SongsController',[
    //'only'=>[
        //'index','show','edit','update'
    //]
    //////'except'=>[
        //////'index','show','edit','update'
    //////]
//]);
//$router->resource('songs','SongsController',[
    //'only'=>[
        //'index','show','edit','update'
    //]
    ////'except'=>[
        ////'index','show','edit','update'
    ////]
//]);
//$router->resource('people','PeopleController');
//
//get('songs',"SongsController@index");
//get('songs/{songs}',"SongsController@show");
//

// named routes.
//Route::bind('songs',function($slug){
    ////return App\Songs::whereSlug($slug)->first();
    //return App\Songs::where(['slug',$slug])->first();
//});
//Route::bind('songs',function($slug){
    ////return App\Songs::whereSlug($slug)->first();
    //return App\Songs::where(['slug',$slug])->first();
//});
//$router->resource('songs','SongsController');
//get('music',['as'=>'songs_path','uses'=>"SongsController@index"]);
//get('music/{song}',['as'=>'song_path','uses'=>"SongsController@show"]);
//get('music/{song}/edit',['as'=>'song_path','uses'=>"SongsController@edit"]);
$router->resource('songs','SongsController');
