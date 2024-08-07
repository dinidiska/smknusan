<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PrestasiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middlseware group. Now create something great!
|
*/





Route::get('/', [HomeController::class, 'Home']);

Route::get('/', [NewsController::class, 'kabar']);

Route::get('kesiswaan/artikel', [NewsController::class, 'artikel']);

Route::get('profil/sekolah', [ProfilController::class, 'sekolah']);

Route::group(['prefix' => 'kesiswaan/'], function () {
    Route::get('prestasi', [KesiswaanController::class, 'prestasi']);
    Route::get('ekstra', [KesiswaanController::class, 'ekstra']);
    
});

Route::get('kontak/kontaksmk', [KontakController::class, 'Kontakkami']);


Route::group(['prefix' => 'user/'], function () {
    Route::get("daftar", [UserController::class, "Daftar"]);
    Route::post("Proses-Daftar", [UserController::class, "ProsesDaftar"]);
    Route::get("login", [UserController::class, "Login"]);
    Route::post("Proses-Login", [UserController::class, "ProsesLogin"]);
    Route::get("logout", [UserController::class, "Logout"]);
    Route::get('user',[UserController::class, 'UserView']);
});

Route::group(['prefix' => 'berita/'], function () {
    Route::get("view", [BeritaController::class, "BeritaView"])->name('berita.view');
    Route::get("tambah", [BeritaController::class, "BeritaAdd"])->name('berita.add');
    Route::post("proses-tambah", [BeritaController::class, "BeritaStore"])->name('berita.store');
    Route::get("edit/{id}", [BeritaController::class, "BeritaEdit"])->name('berita.edit');
    Route::post("proses-edit/{id}", [BeritaController::class, "BeritaUpdate"])->name('berita.store');
    Route::get("delete/{id}", [BeritaController::class, "BeritaDelete"])->name('berita.delete');

});

Route::group(['prefix' => 'prestasi/'], function () {
    Route::get("view", [PrestasiController::class, "PrestasiView"])->name('prestasi.view');
    Route::get("tambah", [PrestasiController::class, "PrestasiAdd"])->name('prestasi.add');
    Route::post("proses-tambah", [PrestasiController::class, "PrestasiStore"])->name('prestasi.store');
    Route::get("edit/{id}", [PrestasiController::class, "PrestasiEdit"])->name('prestasi.edit');
    Route::post("proses-edit/{id}", [PrestasiController::class, "PrestasiUpdate"])->name('prestasi.store');
    Route::get("delete/{id}", [PrestasiController::class, "PrestasiDelete"])->name('prestasi.delete');

});







