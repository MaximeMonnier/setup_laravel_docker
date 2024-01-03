<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function (Request $request) {

    $post = new App\Models\Article;
    $post->name_article = "Mon troiseime articles";
    $post->content_article = "j'espere que le futur sera bon et prospere";
    $post->author_article = "Maxime Monnier";
    $post->save();

    return $post;

});
Route::get('/blog/all', function (Request $request) {

    return App\Models\Article::all();

});

Route::get('/test-db', function () {
    return \DB::table('users')->get();
});
