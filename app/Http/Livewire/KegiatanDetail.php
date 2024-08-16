<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class KegiatanDetail extends Component
{

    public $title = 'Eskul Detail';
    public $users;
    protected $kegiatan;
    protected $berita;
    protected $sekolah;
    protected $galeri;
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;
        $this->kegiatan = DB::table('kegiatan')->join('users as creator', 'kegiatan.userId', '=', 'creator.id')
        ->select('kegiatan.*','creator.fullname as creator')
        ->where('slug', $this->slug)->first();

        $this->berita = DB::table('agenda')->latest('id')->take(10)->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
        $this->galeri = DB::table('kegiatan_galeri')
        ->where('kegiatanId', $this->kegiatan->id)->get();
    }

    public function render()
    {

        return view('livewire.kegiatandetail',[
            'kegiatan' =>  $this->kegiatan,
            'pengumuman' =>  $this->berita,
            'sekolah' =>  $this->sekolah,
            'galeri' =>  $this->galeri,
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah,
        ]);
    }
}
