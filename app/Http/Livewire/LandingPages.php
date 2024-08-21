<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;

class LandingPages extends Component
{
    public $title = 'Halaman Utama';

    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $password;

    #[Layout('layouts.app')]

    public function login(){
        dd('ok');
        $this->validate();

        // Siswa::create([
        //     'nama' => $this->nama,
        //     'email' => $this->email,
        //     'kelas_id' => $this->kelas_id,
        //     'sesi_id' => $this->sesi_id,
        // ]);

        // return $this->redirect(route('index'), navigate: true);
    }

    public function render()
    {
        $data['artikel'] = DB::table('artikel')->latest('id')->take(3)->get();
        $data['agenda'] = DB::table('agenda')->latest('id')->take(3)->get();
        $data['prestasi'] = DB::table('prestasi')->latest('id')->take(3)->get();
        $data['guru'] = DB::table('users')->where('role','GURU')->latest('id')->take(5)->get();
        $data['jurusan'] = DB::table('jurusan')->latest('id')->take(3)->get();
        $data['eskul'] = DB::table('eskul')->latest('id')->take(3)->get();
        $data['pengumuman'] = DB::table('pengumuman')->latest('id')->take(3)->get();
        $data['fasilitas'] = DB::table('fasilitas')->latest('id')->take(3)->get();
        $data['kegiatan'] = DB::table('kegiatan')->latest('id')->take(3)->get();
        $data['banner'] = DB::table('sekolah_banner')->where('sekolahId',1)->get();
        $data['sekolah'] = DB::table('sekolah')->where('id',1)->first();
        $data['alumni'] = DB::table('alumni')->get();
        $data['ujian'] = DB::table('ujian')->get();
        $data['ppdb'] = DB::table('ppdb')->get();

        return view('livewire.landing-pages', $data)
        ->layoutData([
            'title' => $this->title,
            'sekolah' => $data['sekolah'],
        ]);
    }
}
