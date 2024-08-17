<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Ujian extends Component
{
    use WithPagination;

    public $title = 'Semua Ujian';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $ujian = [];
    protected $sekolah;
    public $search = '';

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->ujian = DB::table('ujian')->where('judul', 'like', '%' . $this->search . '%')->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.ujian',[
            'ujian' =>  $this->ujian,
            'sekolah' =>  $this->sekolah
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah
        ]);
    }
}
