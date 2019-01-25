<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// POST Encounter error 419. See https://laracasts.com/discuss/channels/laravel/post-request-in-laravel-57-error-419-sorry-your-session-has-expired
//Route::post('/api/register', 'APIController@register'); // Will be used once the 419 issue is fixed.
Route::get('/api/register', 'APIController@register'); // Temp
//Route::post('/api/login', 'APIController@login'); // Will be used once the 419 issue is fixed.
Route::get('/api/login', 'APIController@login'); // Temp


// GET Public
Route::get('/api/posts', 'APIController@getPosts');
Route::get('/api/posts/{post}', 'APIController@getPost');
Route::get('/api/posts/{post}/comment', 'APIController@getPostComment');

// GET/POST Auth
Route::group(['middleware' => 'auth'], function() {
    
    Route::post('/api/logout', 'APIController@logout');

    // Post
    Route::post('/api/posts', 'APIController@createPost');
    Route::patch('/api/posts/{post}', 'APIController@updatePost');
    Route::delete('/api/posts/{post}', 'APIController@deletePost');
    // Post Comment
    Route::post('/api/posts/{post}/comments', 'APIController@createPostComment');
    Route::patch('/api/posts/{post}/comment/{comment}', 'APIController@updatePostComment');
    Route::delete('/api/posts/{post}/comment/{comment}', 'APIController@deletePostComment');

});


