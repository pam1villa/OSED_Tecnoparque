<?php

use App\Http\Controllers\agendaServicesController;
use App\Http\Controllers\authController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\userController;
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
//----------------------Acciones #------------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware(['auth']);

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
})->name('dashboardAdmin')->middleware(['auth']);

Route::post('/auth', [authController::class, 'login'])->name('auth');
Route::get('/logout', [authController::class, 'logout'])->name('logout');


//----------------------Acciones (Navegaión del Guest)------------------------
Route::get('/', [indexController::class, 'welcome'])->name('welcome');
Route::get('/aboutus', [indexController::class, 'aboutus'])->name('aboutus');
Route::get('/services', [indexController::class, 'services'])->name('services');
Route::get('/auth/login', [indexController::class, 'login'])->name('login')->middleware(['guest']);
Route::get('/auth/register', [indexController::class, 'register'])->name('register');

//----------------------Acciones (Navegación del sideBarAdmin (para Administrador))------------------------
Route::get('/profile', [indexController::class, 'profile'])->name('profile')->middleware(['auth']);
Route::get('/serviciosFlotantes', [indexController::class, 'serviciosFlotantes'])->name('serviciosFlotantes')->middleware(['auth']);
Route::get('/CrearServicioFlotante', [indexController::class, 'CrearServicioFlotante'])->name('CrearServicioFlotante')->middleware(['auth']);

//----------------------Acciones Usuario------------------------
Route::get('User/delete/{id}', [userController::class, 'delete'])->name('deleteUser');
Route::get('/Users/edit/{id}', [userController::class, 'edit'])->name('editUser');
Route::put('/Users/edit/{id}', [userController::class, 'update'])->name('updateBDUser');
Route::get('/users', [userController::class, 'index'])->name('indexUser')->middleware(['auth', 'checkRol:administrador-superAdministrador']);
Route::post('/registeruser', [userController::class, 'store'])->name('registeruser');

//----------------------Acciones Personal OSED------------------------
//Route::get('User/delete/{id}', [personalosedController::class, 'delete'])->name('deleteUser');
// Route::get('/Users/edit/{id}', [personalosedController::class, 'edit'])->name('editUser');
// Route::put('/Users/edit/{id}', [personalosedController::class, 'update'])->name('updateBDUser');
//Route::get('/PersonalOSED', [personal::class, 'index'])->name('indexPersonal')->middleware(['auth']);
//Route::post('/registerpersonal', [personalosedController::class, 'store'])->name('registerpersonal');


//----------------------Agendar Servicios por parte del usuario------------------------
Route::get('/agendaServices/create', [agendaServicesController::class, 'create'])->name('agendaServices');










//------------------------------------EJEMPLOS PARA RUTAS-----------------------------------
//Route::get('/nombre_ruta', [nombreControlador::class, 'método_del_controlador'])->name('nombre_ruta');

// Route::get('Aprendiz/update/{id}', 'AprendizController@UpdateApre') ->name('UpdateAprendiz');
// Route::get('Aprendiz/view', 'AprendizController@ViewApre') ->name('ViewAprendiz');
// Route::get('Aprendiz/insert', function () {
//     return view('Aprendiz/insert');
// })->name('InsertAprendiz');
// Route::get('Aprendiz/insert', 'AprendizController@ViewInsert')->name('InsertAprendiz');
// Route::get('Aprendiz/view', 'AprendizController@ViewApre') ->name('ViewAprendiz');
// Route::post('Aprendiz/insert', 'AprendizController@InsertApre')  ->name('InsertAprendiz');
// Route::get('Aprendiz/delete/{id}', 'AprendizController@DeleteApre') ->name('DeleteAprendiz');
// Route::get('Aprendiz/update/{id}', 'AprendizController@UpdateApre') ->name('UpdateAprendiz');
// Route::post('Aprendiz/update', 'AprendizController@UpdateBdApre')  ->name('UpdateBdAprendiz');
// Route::get('Aprendiz/json','AprendizController@resuljson')->name('listaprendiz');


