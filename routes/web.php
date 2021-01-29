<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactsController;
//use App\Http\Controllers\ContactController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/vue1', function() {
    return view('vue1');
});

Route::get('article/{n?}', function($n = 1 )  {
    return view('article')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('facture/{n}', function($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[0-9]+');

Route::get('contact', function() {
    return "C'est moi le contact.";
});

Route::get('/', [WelcomeController::class, 'index'])
    ->name('home');


Route::get('photo', [PhotoController::class, 'create']);
Route::post('photo', [PhotoController::class, 'store']);
/* Mailing
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);
*/
Route::get('users', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);

Route::get('contacts', [ContactsController::class, 'create'])->name('contacts.create');
Route::post('contacts', [ContactsController::class, 'store'])->name('contacts.store');

Route::resource('films', FilmController::class);
Route::post('films', [FilmController::class, 'store'])->name('films.store');
Route::get('films/create', [FilmController::class, 'create'])->name('films.create');
Route::delete('films/force/{id}', [FilmController::class, 'forceDestroy'])->name('films.force.destroy');
Route::put('films/restore/{id}', [FilmController::class, 'restore'])->name('films.restore');
Route::get('category/{slug}/films', [FilmController::class, 'index'])->name('films.category');
Route::get('actor/{slug}/films', [FilmController::class, 'index'])->name('films.actor');
