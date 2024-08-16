<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class GuruDetail extends Component
{

    public $title = 'Guru Detail';
    public $users;
    public $artikel;
    public $agenda;
    public $pengumuman;
    public $userId;
    protected $sekolah;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->userId = $id;
        $this->users = User::where('id', $this->userId)->first();
        $this->artikel = DB::table('artikel')->latest('id')->take(3)->get();
        $this->agenda = DB::table('agenda')->latest('id')->take(3)->get();
        $this->pengumuman = DB::table('pengumuman')->latest('id')->take(3)->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function render()
    {
        return view('livewire.gurudetail',[
            'users' =>  $this->users,
            'sekolah' =>  $this->sekolah,
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah,
        ]);
    }
}
