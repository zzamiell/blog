<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Alumni;
use App\Http\Livewire\VisiMisi;
use App\Http\Livewire\Sambutan;
use App\Http\Livewire\Download;
use App\Http\Livewire\Kegiatan;
use App\Http\Livewire\KegiatanDetail;
use App\Http\Livewire\Fasilitas;
use App\Http\Livewire\FasilitasDetail;
use App\Http\Livewire\Eskul;
use App\Http\Livewire\EskulDetail;
use App\Http\Livewire\Jurusan;
use App\Http\Livewire\JurusanDetail;
use App\Http\Livewire\Prestasi;
use App\Http\Livewire\PrestasiDetail;
use App\Http\Livewire\Agenda;
use App\Http\Livewire\AgendaDetail;
use App\Http\Livewire\Berita;
use App\Http\Livewire\BeritaDetail;
use App\Http\Livewire\Guru;
use App\Http\Livewire\GuruDetail;
use App\Http\Livewire\LandingPages;
use App\Http\Livewire\Ujian;
use App\Http\Livewire\UjianDetail;
use App\Http\Livewire\PPDB;
use App\Http\Livewire\Search;
use App\Http\Livewire\PPDBDetail;
use App\Http\Livewire\Pengumuman;
use App\Http\Livewire\PengumumanDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\UjianController;
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
use App\Http\Controllers\PengaturanController;

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

Route::get('/search', Search::class)->name('searchComponent');

Route::get('/alumni', Alumni::class)->name('alumniComponent');

Route::get('/visi-misi', VisiMisi::class)->name('visimisiComponent');
Route::get('/sambutan', Sambutan::class)->name('sambutanComponent');
Route::get('/donwload', Download::class)->name('downloadComponent');

Route::get('/portal-login', [AuthController::class, 'portal_login'])->name('login.index');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/guru', Guru::class)->name('guruComponent');
Route::get('/guru{id}', GuruDetail::class)->name('guruDetailComponent');

Route::get('/berita', Berita::class)->name('beritaComponent');
Route::get('/berita-{id}', BeritaDetail::class)->name('beritaDetailComponent');

Route::get('/agenda', Agenda::class)->name('agendaComponent');
Route::get('/agenda-{id}', AgendaDetail::class)->name('agendaDetailComponent');

Route::get('/prestasi', Prestasi::class)->name('prestasiComponent');
Route::get('/prestasi-{id}', PrestasiDetail::class)->name('prestasiDetailComponent');

Route::get('/jurusan', Jurusan::class)->name('jurusanComponent');
Route::get('/jurusan-{id}', JurusanDetail::class)->name('jurusanDetailComponent');

Route::get('/eskul', Eskul::class)->name('eskulComponent');
Route::get('/eskul-{id}', EskulDetail::class)->name('eskulDetailComponent');

Route::get('/pengumuman', Pengumuman::class)->name('pengumumanComponent');
Route::get('/pengumuman-{id}', PengumumanDetail::class)->name('pengumumanDetailComponent');

Route::get('/fasilitas', Fasilitas::class)->name('fasilitasComponent');
Route::get('/fasilitas-{id}', FasilitasDetail::class)->name('fasilitasDetailComponent');

Route::get('/ujian', Ujian::class)->name('ujianComponent');
Route::get('/ujian-{id}', UjianDetail::class)->name('ujianDetailComponent');

Route::get('/ppdb', PPDB::class)->name('ppdbComponent');
Route::get('/ppdb-{id}', PPDBDetail::class)->name('ppdbDetailComponent');

Route::get('/kegiatan', Kegiatan::class)->name('kegiatanComponent');
Route::get('/kegiatan-{id}', KegiatanDetail::class)->name('kegiatanDetailComponent');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth:sanctum')->group(function () {

    Route::group(array('prefix' => 'admin'),
    function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


        // GURU
        Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
        Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
        Route::post('/guru/update/{id}', [GuruController::class, 'update'])->name('guru.update');
        Route::delete('/guru/destroy/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');

        // ALUMNI
        Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
        Route::post('/alumni', [AlumniController::class, 'store'])->name('alumni.store');
        Route::post('/alumni/update/{id}', [AlumniController::class, 'update'])->name('alumni.update');
        Route::delete('/alumni/destroy/{id}', [AlumniController::class, 'destroy'])->name('alumni.destroy');

        // UJIAN
        Route::get('/ujian', [UjianController::class, 'index'])->name('ujian.index');
        Route::post('/ujian', [UjianController::class, 'store'])->name('ujian.store');
        Route::post('/ujian/update/{id}', [UjianController::class, 'update'])->name('ujian.update');
        Route::delete('/ujian/destroy/{id}', [UjianController::class, 'destroy'])->name('ujian.destroy');

        // PPDB
        Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb.index');
        Route::post('/ppdb', [PPDBController::class, 'store'])->name('ppdb.store');
        Route::post('/ppdb/update/{id}', [PPDBController::class, 'update'])->name('ppdb.update');
        Route::delete('/ppdb/destroy/{id}', [PPDBController::class, 'destroy'])->name('ppdb.destroy');


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

        Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');
        Route::post('/pengaturan', [PengaturanController::class, 'update'])->name('pengaturan.update');
        Route::post('/pengaturan-profile', [PengaturanController::class, 'update_profile'])->name('pengaturan.updateprofile');
        Route::post('/pengaturan-profile-visi-misi', [PengaturanController::class, 'update_visi_misi'])->name('pengaturan.update.visimisi');
        Route::post('/pengaturan-banner', [PengaturanController::class, 'store_banner'])->name('pengaturan.store.banner');
        Route::delete('/pengaturan-banner-destroy/{id}', [PengaturanController::class, 'destroy_banner'])->name('pengaturan.banner.destroy');
        Route::delete('/pengaturan-lampiran-destroy/{id}', [PengaturanController::class, 'destroy_lampiran'])->name('pengaturan.lampiran.destroy');
        Route::post('/pengaturan-upload-lampiran', [PengaturanController::class, 'store_lampiran'])->name('pengaturan.store.file');
    }
);

});
