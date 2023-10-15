<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\User;
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

Route::get('/articlez', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'getArticle']);
Route::get('/users', function () {
    return User::create(
        [
            'name' => 'xaleto',
            'email' => 'xale@gmail.com',
            'password' => bcrypt('54321s'),
        ]
    );
});
Route::get('/newart', function () {
    return Article::create(
        [
            'title' => 'xaleto',
            'body' => ' madkjawhkjd awhd kawhd kajwd jawhd hawj dkjaw',
        ]
    );
});
