<?php

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

Route::bind('task',function($value,$route){
    return Item::where('id',$value)->first();
});


Route::get('/', array('as' => 'home', 'uses' => 'Controller@getIndex'));//->before('auth');

Route::get('/login', array('as' => 'login', 'uses' => 'Controller@getLogin'));//->before('guest');
Route::post('/login', array('uses' => 'Controller@postLogin'));//->before('csrf');

Route::post('/',array('uses' => 'Controller@postIndex'));//->before('csrf');

Route::get('/new',array('as' => 'new', 'uses' => 'Controller@getNew'));
Route::post('/new',array('uses' => 'Controller@postNew'));//->before('csrf');

Route::get('/delete/{task}',array('as'=>'delete','uses'=>'Controller@getDelete'));



