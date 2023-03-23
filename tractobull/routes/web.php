<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\avisoController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\cookiesController;
use App\Http\Controllers\distribuidoresController;
use App\Http\Controllers\nosotrosController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\terminosController;
use App\Http\Controllers\nuevoDistribuidorController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\cookiesPolicyController;
use App\Http\Controllers\dealersController;
use App\Http\Controllers\newDealerController;
use App\Http\Controllers\privacityController;
use App\Http\Controllers\termsController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\mailController;






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
Route::get('aviso', avisoController::class, 'index')->name('aviso');
Route::get('contacto', contactoController::class, 'index')->name('contacto');
Route::get('cookies', cookiesController::class, 'index')->name('cookies');
Route::get('distribuidores', distribuidoresController::class, 'index')->name('distribuidores');
Route::get('nosotros', nosotrosController::class, 'index')->name('nosotros');
Route::get('productos', productosController::class, 'index')->name('productos');
Route::get('terminos', terminosController::class, 'index')->name('terminos');
Route::get('nuevoDistribuidor', nuevoDistribuidorController::class, 'index')->name('nuevoDistribuidor');

Route::post('contactoMail', [mailController::class, 'store'])->name('mail');

//VERSIÓN INGLÉS
Route::get('index', indexController::class, 'index')->name('index');
Route::get('about', aboutController::class, 'index')->name('about');
Route::get('products', productsController::class, 'index')->name('products');
Route::get('dealears', dealersController::class, 'index')->name('dealers');
Route::get('newDealers', newDealerController::class, 'index')->name('newDealers');
Route::get('contact', contactController::class, 'index')->name('contact');
Route::get('terms', termsController::class, 'index')->name('terms');
Route::get('privacity', privacityController::class, 'index')->name('privacity');
Route::get('cookiesPolicy', cookiesPolicyController::class, 'index')->name('cookiesPolicy');

