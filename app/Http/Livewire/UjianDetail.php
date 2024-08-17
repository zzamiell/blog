<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class UjianDetail extends Component
{
    use WithPagination;

    public $title = 'Semua Ujian Detail';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $ujian;
    protected $agenda = [];
    protected $sekolah;
    public $search = '';
    public $slug;

    #[Layout('layouts.app')]

    public function mount($id){
        $this->slug = $id;
        $this->ujian = DB::table('ujian')->join('users as creator', 'ujian.userId', '=', 'creator.id')
        ->select('ujian.*','creator.fullname as creator')
        ->where('slug', $this->slug)
        ->first();

        $this->agenda = DB::table('agenda')
        ->join('users as creator', 'agenda.userId', '=', 'creator.id')
        ->join('users as koordinator', 'agenda.koordinatorId', '=', 'koordinator.id')
        ->select('agenda.*','creator.fullname as creator','koordinator.fullname as koordinator','koordinator.email as kemail','koordinator.phone as kphone')
        ->take(5)->get();
        // dd($this->agenda);
        $this->berita = DB::table('pengumuman')->latest('id')->take(10)->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();

        $this->alumni = DB::table('alumni')->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function render()
    {
        return view('livewire.ujiandetail',[
            'agenda' =>  $this->agenda,
            'ujian' =>  $this->ujian,
            'sekolah' =>  $this->sekolah
            ])->layoutData([
                'title' => $this->title,
                'ujian' =>  $this->ujian,
                'agenda' =>  $this->agenda,
                'sekolah' =>  $this->sekolah
        ]);
    }
}
