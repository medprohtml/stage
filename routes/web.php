<?php

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
Route::post('/ajouterpatient', [App\Http\Controllers\admincontroller::class, 'ajouterpatient'])->name('newpatient');
Route::get('/showpatient', [App\Http\Controllers\admincontroller::class, 'ajouterpatientview'])->name('showpatinet');
Route::post('/login', [App\Http\Controllers\loginpatient::class, 'login'])->name('login');
Route::get('/index', [App\Http\Controllers\index::class, 'index'])->name('index')->middleware('check');
Route::get('/loginshow', [App\Http\Controllers\loginpatient::class, 'loginshow'])->name('loginshow');
Route::get('/logout', [App\Http\Controllers\loginpatient::class, 'logout'])->name('logout');
Route::get('/addmail', [App\Http\Controllers\index::class, 'addmail'])->name('addmail')->middleware('check');
Route::PUT('/store', [App\Http\Controllers\index::class, 'store'])->name('storemail')->middleware('check');
Route::post('/sendmail', [App\Http\Controllers\mailcl::class, 'mail'])->name('sendmail')->middleware('check');
Route::get('/addwhatsapp', [App\Http\Controllers\index::class, 'addwhatsapp'])->name('addwhatsapp')->middleware('check');
Route::PUT('/storewhatsapp', [App\Http\Controllers\index::class, 'whatsappstore'])->name('whatsappstore')->middleware('check');









