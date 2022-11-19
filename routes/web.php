<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
Route::get('/form', [FormController::class, 'index'])->name('Getform');
Route::get('/click',[FormController::class,'Getform']);
Route::get('/user/edit/{id}',[FormController::class,'editdata'])->name('edit.user');
Route::get('/user/show',[FormController::class,'show']);
Route::post('/user/update',[FormController::class,'update'])->name('update');
Route::post('/form-submit',[FormController::class, 'submit'])->name('formSubmit');
