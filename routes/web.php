<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Guru;
use App\Http\Livewire\GuruDetail;
use App\Http\Livewire\LandingPages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PengumumanController;

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

Route::get('/', LandingPages::class)->name('index');
Route::get('/login', Login::class)->name('login.index');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/guru', Guru::class)->name('guruComponent');
Route::get('/guru{id}', GuruDetail::class)->name('guruDetailComponent');

Route::middleware('auth:sanctum')->group(function () {

    Route::group(array('prefix' => 'admin'),
    function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


        // GURU
        Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
        Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
        Route::post('/guru/update/{id}', [GuruController::class, 'update'])->name('guru.update');
        Route::delete('/guru/destroy/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');


        // SISWA
        Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
        Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
        Route::post('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
        Route::delete('/siswa/destroy/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

        // ARTIKEL & BERITA
        Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
        Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
        Route::post('/artikel/update/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
        Route::delete('/artikel/destroy/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');

        // AGENDA
        Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
        Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');
        Route::post('/agenda/update/{id}', [AgendaController::class, 'update'])->name('agenda.update');
        Route::delete('/agenda/destroy/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');

        // JURUSAN
        Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
        Route::get('/jurusan/galeri/{id}', [JurusanController::class, 'galeri'])->name('jurusan.galeri');
        Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
        Route::post('/jurusan/galeri/{id}', [JurusanController::class, 'store_galeri'])->name('jurusan.store.galeri');
        Route::post('/jurusan/update/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
        Route::delete('/jurusan/destroy/{id}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');
        Route::delete('/jurusan/galeri/destroy/{id}/{jurusanId}', [JurusanController::class, 'galeri_destroy'])->name('jurusan.galeri.destroy');

        // FASILITAS
        Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
        Route::get('/fasilitas/galeri/{id}', [FasilitasController::class, 'galeri'])->name('fasilitas.galeri');
        Route::post('/fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
        Route::post('/fasilitas/galeri/{id}', [FasilitasController::class, 'store_galeri'])->name('fasilitas.store.galeri');
        Route::post('/fasilitas/update/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
        Route::delete('/fasilitas/destroy/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
        Route::delete('/fasilitas/galeri/destroy/{id}/{jurusanId}', [FasilitasController::class, 'galeri_destroy'])->name('fasilitas.galeri.destroy');

        // KEGIATAN
        Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
        Route::get('/kegiatan/galeri/{id}', [KegiatanController::class, 'galeri'])->name('kegiatan.galeri');
        Route::post('/kegiatan', [KegiatanController::class, 'store'])->name('kegiatan.store');
        Route::post('/kegiatan/galeri/{id}', [KegiatanController::class, 'store_galeri'])->name('kegiatan.store.galeri');
        Route::post('/kegiatan/update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');
        Route::delete('/kegiatan/destroy/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
        Route::delete('/kegiatan/galeri/destroy/{id}/{jurusanId}', [KegiatanController::class, 'galeri_destroy'])->name('kegiatan.galeri.destroy');

        // PRESTASI
        Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
        Route::post('/prestasi', [PrestasiController::class, 'store'])->name('prestasi.store');
        Route::post('/prestasi/update/{id}', [PrestasiController::class, 'update'])->name('prestasi.update');
        Route::delete('/prestasi/destroy/{id}', [PrestasiController::class, 'destroy'])->name('prestasi.destroy');

        // ESKUL
        Route::get('/eskul', [EskulController::class, 'index'])->name('eskul.index');
        Route::post('/eskul', [EskulController::class, 'store'])->name('eskul.store');
        Route::post('/eskul/update/{id}', [EskulController::class, 'update'])->name('eskul.update');
        Route::delete('/eskul/destroy/{id}', [EskulController::class, 'destroy'])->name('eskul.destroy');

        // PENGUMUMAN
        Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
        Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store');
        Route::post('/pengumuman/update/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::delete('/pengumuman/destroy/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

    }
);

});
