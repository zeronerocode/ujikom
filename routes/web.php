<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile-siswa',[SiswaController::class,'profile'])->name('profile');
Route::get('/edit-profile',[SiswaController::class,'editProfile'])->name('edit.profile');
Route::post('update',[SiswaController::class,'updateProfile'])->name('update.profile');

Route::get('/dashboard-siswa',[SiswaController::class,'dashboard'])->name('dashboard.siswa');

Route::get('/update-siswa/{siswa}',[SiswaController::class,'editSiswa'])->name('siswa.edit');
Route::put('/update-siswa/{siswa}',[SiswaController::class,'updateSiswa'])->name('siswa.update');

Route::put('/lulus/{siswa}',[SiswaController::class,'lulus'])->name('lulus');
Route::put('/tidaklulus/{siswa}',[SiswaController::class,'tidaklulus'])->name('tidaklulus');
require __DIR__.'/auth.php';
