<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AnnounceController;

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

//CLIENT SIDE
//HOMEPAGE
Route::get('/', [LandingController::class, 'index']);
//TENTANG KAMI
Route::get('/tentang-kami', [LandingController::class, 'about']);
//PROFIL DESA
Route::get('/visi-misi', [LandingController::class, 'visimisi']);
Route::get('/sejarah-desa', [LandingController::class, 'sejarahdesa']);
Route::get('/geografi-desa', [LandingController::class, 'geografidesa']);
Route::get('/demografi-desa', [LandingController::class, 'demografidesa']);
Route::get('/struktur-desa', [LandingController::class, 'strukturdesa']);
Route::get('/pemerintahan-desa', [LandingController::class, 'pemerintahandesa']);
Route::get('/lembaga-desa', [LandingController::class, 'lembagadesa']);
Route::get('/karang-taruna', [LandingController::class, 'karangtaruna']);
//BERITA-PENGUMUMAN-UNDUHAN-PRODUKHUKUM
Route::get('/berita-desa', [LandingController::class, 'beritadesa']);
Route::get('/berita-desa/category/{category}', [LandingController::class, 'beritadesa_cat']);
Route::get('/pengumuman', [LandingController::class, 'pengumuman']);
Route::get('/unduhan', [LandingController::class, 'unduhan']);
Route::get('/produk-hukum', [LandingController::class, 'produkhukum']);
//DETAIL
Route::get('/berita-desa/read/{news}', [LandingController::class, 'beritadesa_detail']);
Route::get('/berita-desa/category/read/{news}', [LandingController::class, 'beritadesa_detail']);
Route::get('/pengumuman/read/{announce}', [LandingController::class, 'pengumuman_detail']);
//APBDES
Route::get('/apbdes', [LandingController::class, 'apbdes']);

//ADMIN SIDE
//LOGIN
Route::get('/login', [LandingController::class, 'login']);
Route::post('/login', [LandingController::class, 'authenticate'])->name('login');
//LOGOUT
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth');
//DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
//MANAJEMEN PENGGUNA
Route::resource('/dashboard/pengguna', PenggunaController::class)->middleware('auth');
//MANAJEMEN BERITA
Route::resource('/dashboard/news', NewsController::class)->middleware('auth');
//MANAJEMEN KATEGORI BERITA
Route::resource('/dashboard/kategori', KategoriController::class)->middleware('auth');
//MANAJEMEN PENGUMUMAN
Route::resource('/dashboard/announce', AnnounceController::class)->middleware('auth');
