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

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'ArticleController@index');
/*Route::get('/comments/{id}', ['as'=> 'article.id', 'uses'=>'CommentsController@index']);*/




Route::resource('/articles', 'ArticleController');

Route::resource('/comments', 'CommentsController');



