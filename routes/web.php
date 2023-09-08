<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Routecontroller;
use App\Http\Controllers\PerpustakaanController;
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


// Route::get('/',[Routecontroller::class, 'index']);

Route::get('/form',[Routecontroller::class, 'form']);

Route::post('/welcome',[Routecontroller::class, 'welcome']);


Route::get('/perpustakaan/anggota', [PerpustakaanController::class, 'anggota'])->name('get_anggota');

Route::get('/perpustakaan/buku', [PerpustakaanController::class, 'buku'])->name('get_buku');

Route::get('/perpustakaan/petugas', [PerpustakaanController::class, 'petugas'])->name('get_petugas');

Route::get('/', function() {
    return view('layout.master');
}); 
Route::get('/formanggota', function() {
    return view('formanggota');
}); 
Route::get('/formbuku', function() {
    return view('formbuku');
}); 
Route::get('/formpetugas', function() {
    return view('formpetugas');
}); 
Route::get('/datapetugas', function() {
    return view('datapetugas');
}); 
Route::get('/dataanggota', function() {
    return view('dataanggota');
}); 
Route::get('/databuku', function() {
    return view('databuku');
}); 