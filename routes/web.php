<?php

use App\Http\Controllers\PracownicyController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::get('/start', function () {
    return view('index');
})->name('start');


Route::get('/pracownicy', [PracownicyController::class, 'index'])->name('pracownicy.index');
Route::get('/logindex', [PracownicyController::class, 'logindex'])->name('pracownicy.logindex');

Route::get('/dodaj', [PracownicyController::class, 'dodaj'])->name('pracownicy.dodaj');

Route::get('/edytuj/{id}', [PracownicyController::class, 'edit'])->name('pracownicy.edit');
Route::put('/zmien/{id}', [PracownicyController::class, 'update'])->name('pracownicy.update');

Route::delete('/usun/{id}', [PracownicyController::class, 'delete'])->name('pracownicy.delete');

Route::post('/zapisz', [PracownicyController::class, 'zapisz'])->name('pracownicy.zapisz');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');