<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class BeritaDetail extends Component
{

    public $title = 'Berita Detail';
    public $users;
    protected $artikel;
    protected $berita;
    protected $sekolah;
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;
        $this->artikel = DB::table('artikel')->where('slug', $this->slug)->first();
        $this->berita = DB::table('artikel')->latest('id')->take(10)->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function render()
    {
        return view('livewire.beritadetail',[
            'artikel' =>  $this->artikel,
            'berita' =>  $this->berita,
            'sekolah' =>  $this->sekolah
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah
        ]);
    }
}
