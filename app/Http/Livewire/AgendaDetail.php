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
    }

    public function render()
    {

        return view('livewire.agendadetail',[
            'agenda' =>  $this->agenda,
            'pengumuman' =>  $this->berita
        ])->layoutData([
            'title' => $this->title,
        ]);
    }
}
