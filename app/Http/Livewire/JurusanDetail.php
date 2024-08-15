<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class JurusanDetail extends Component
{

    public $title = 'Jurusan Detail';
    public $users;
    protected $jurusan;
    protected $berita;
    protected $galeri;
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;
        $this->jurusan = DB::table('jurusan')->join('users as creator', 'jurusan.userId', '=', 'creator.id')
        ->select('jurusan.*','creator.fullname as creator')
        ->where('slug', $this->slug)->first();

        $this->berita = DB::table('pengumuman')->latest('id')->take(10)->get();

       $this->galeri = DB::table('jurusan_galeri')
        ->where('jurusanId', $this->jurusan->id)
        ->get();

    }

    public function render()
    {

        return view('livewire.jurusandetail',[
            'jurusan' =>  $this->jurusan,
            'pengumuman' =>  $this->berita,
            'galeri' =>  $this->galeri
        ])->layoutData([
            'title' => $this->title,
        ]);
    }
}
