<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AgendaDetail extends Component
{

    public $title = 'Agenda Detail';
    public $users;
    protected $agenda;
    protected $berita;
    protected $sekolah;
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;
        $this->agenda = DB::table('agenda')
        ->join('users as creator', 'agenda.userId', '=', 'creator.id')
        ->join('users as koordinator', 'agenda.koordinatorId', '=', 'koordinator.id')
        ->select('agenda.*','creator.fullname as creator','koordinator.fullname as koordinator','koordinator.email as kemail','koordinator.phone as kphone')
        ->where('slug', $this->slug)->first();
        $this->berita = DB::table('pengumuman')->latest('id')->take(10)->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function render()
    {

        return view('livewire.agendadetail',[
            'agenda' =>  $this->agenda,
            'pengumuman' =>  $this->berita,
            'sekolah' =>  $this->sekolah
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah
        ]);
    }
}
