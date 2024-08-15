<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PrestasiDetail extends Component
{

    public $title = 'Prestasi Detail';
    public $users;
    protected $prestasi;
    protected $berita;
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;
        $this->prestasi = DB::table('prestasi')->join('users as creator', 'prestasi.userId', '=', 'creator.id')
        ->select('prestasi.*','creator.fullname as creator')
        ->where('slug', $this->slug)
        ->first();

        $this->berita = DB::table('pengumuman')->latest('id')->take(10)->get();
    }

    public function render()
    {

        return view('livewire.prestasidetail',[
            'prestasi' =>  $this->prestasi,
            'pengumuman' =>  $this->berita
        ])->layoutData([
            'title' => $this->title,
        ]);
    }
}
