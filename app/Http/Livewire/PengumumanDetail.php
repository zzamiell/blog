<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PengumumanDetail extends Component
{

    public $title = 'Pengumuman Detail';
    public $users;
    protected $pengumuman;
    protected $berita;
    protected $sekolah;
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;
        $this->pengumuman =  DB::table('pengumuman')->join('users as creator', 'pengumuman.userId', '=', 'creator.id')
        ->select('pengumuman.*','creator.fullname as creator')
        ->where('slug', $this->slug)->first();
        $this->berita = DB::table('agenda')->latest('id')->take(10)->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function render()
    {

        return view('livewire.pengumumandetail',[
            'pengumuman' =>  $this->pengumuman,
            'berita' => $this->berita,
            'sekolah' =>  $this->sekolah,
            ])->layoutData([
                'title' => $this->title,
                'berita' => $this->berita,
                'sekolah' =>  $this->sekolah,
        ]);
    }
}
