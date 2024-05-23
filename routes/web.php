<?php

use App\Http\Controllers\ContactanosControlle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name( 'home' );

Route::resource('cursos',  CursoController::class);

Route::view('nosotros','nosotros')->name('nosotros');

// Route::get('contactanos', function(){
//     Mail::to('juanfelipegalvis@gmail.com')->send(new ContactanosMailable);
//     return 'Mensaje enviado';
// })->name('contactanos');

Route::get('contactanos',[ContactanosControlle::class, 'index'])
    ->name('contactanos.index');

Route::post('contactanos',[ContactanosControlle::class, 'store'])
    ->name('contactanos.store');