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
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;
        $this->artikel = DB::table('artikel')->where('slug', $this->slug)->first();
        $this->berita = DB::table('artikel')->latest('id')->take(10)->get();
    }

    public function render()
    {
        return view('livewire.beritadetail',[
            'artikel' =>  $this->artikel,
            'berita' =>  $this->berita
        ])->layoutData([
            'title' => $this->title,
        ]);
    }
}
