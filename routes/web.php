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
})->name('root');

// Route::get('/hello', function() {
//     return "Hello SpaceTaxi";
// });

Route::get('/hello/{message?}', function( $message = 'SpaceTaxi' ) {
    return view('greeting', ['message' => $message]);
    // return view('greeting',  compact('message')); 
})->name('hello-world');

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
})->where(['id' => '[0-9]*'])->name('user');

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post : '.$postId.' Comment : '.$commentId;
});

