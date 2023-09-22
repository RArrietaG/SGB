<?php

use App\Livewire\AuthorForm;
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


Route::get('/authors', function () {
    return view('authors');
})->name('authors.index');

Route::get('authors/create', function (){
    return view('authors');
})->name('author.create');

//Route::get('author/create',AuthorForm::class)->name('author.create');

Route::get('books', function () {
    return view('books');
})->name('books.index');

Route::get('applicants', function () {
    return view('applicants');
})->name('applicants.index');

Route::get('categories-books', function () {
    return view('categories-books');
})->name('categories.index');

Route::get('users-system', function () {
    return view('users');
})->name('users.index');

Route::get('ratings-books', function () {
    return view('ratings-books');
})->name('ratings.index');

Route::get('loans', function () {
    return view('loans');
})->name('loans.index');

Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
