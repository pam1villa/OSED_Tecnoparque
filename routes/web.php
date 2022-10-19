<?php

use App\Http\Controllers\indexController;
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

Route::get('/', [indexController::class,'welcome'])->name('welcome');
Route::get('/aboutus', [indexController::class,'aboutus'])->name('aboutus');



// Route::get('Aprendiz/insert', 'AprendizController@ViewInsert')->name('InsertAprendiz');
// Route::get('Aprendiz/view', 'AprendizController@ViewApre') ->name('ViewAprendiz');
// Route::post('Aprendiz/insert', 'AprendizController@InsertApre')  ->name('InsertAprendiz');
// Route::get('Aprendiz/delete/{id}', 'AprendizController@DeleteApre') ->name('DeleteAprendiz');
// Route::get('Aprendiz/update/{id}', 'AprendizController@UpdateApre') ->name('UpdateAprendiz');
// Route::post('Aprendiz/update', 'AprendizController@UpdateBdApre')  ->name('UpdateBdAprendiz');

// Route::get('Aprendiz/json','AprendizController@resuljson')->name('listaprendiz');
