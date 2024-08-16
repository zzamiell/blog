<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class FasilitasDetail extends Component
{

    public $title = 'Eskul Detail';
    public $users;
    protected $fasilitas;
    protected $berita;
    protected $sekolah;
    protected $galeri;
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;
        $this->fasilitas = DB::table('fasilitas')->join('users as creator', 'fasilitas.userId', '=', 'creator.id')
        ->select('fasilitas.*','creator.fullname as creator')
        ->where('slug', $this->slug)->first();
        $this->berita = DB::table('agenda')->latest('id')->take(10)->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
        $this->galeri = DB::table('fasilitas_galeri')
        ->where('fasilitasId', $this->fasilitas->id)->get();
    }

    public function render()
    {

        return view('livewire.fasilitasdetail',[
            'fasilitas' =>  $this->fasilitas,
            'pengumuman' =>  $this->berita,
            'sekolah' =>  $this->sekolah,
            'galeri' =>  $this->galeri,
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah,
        ]);
    }
}
