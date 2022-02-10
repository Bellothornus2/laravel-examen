<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/posts',function(){
    return view('formulario_posts');
});

Route::post('/posts_create',\App\Http\Controllers\PostController::class.'@create')->name('posts.create');

#Route::resource('posts', 'PostController')
#    ->parameters(['posts' => 'posts'])
#   ->names('posts');
