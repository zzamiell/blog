<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class EskulDetail extends Component
{

    public $title = 'Eskul Detail';
    public $users;
    protected $eskul;
    protected $berita;
    protected $sekolah;
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;

        $this->eskul = DB::table('eskul')
        ->leftjoin('users as creator', 'eskul.userId', '=', 'creator.id')
        ->leftjoin('users as pembina', 'eskul.pembinaId', '=', 'pembina.id')
        ->select('eskul.*','creator.fullname as creator')
        ->where('eskul.slug', $this->slug)->first();
        $this->berita = DB::table('agenda')->latest('id')->take(10)->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function render()
    {
        return view('livewire.eskuldetail',[
            'eskul' =>  $this->eskul,
            'pengumuman' =>  $this->berita,
            'sekolah' =>  $this->sekolah,
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah,
        ]);
    }
}
