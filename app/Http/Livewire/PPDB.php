<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class PPDB extends Component
{
    use WithPagination;

    public $title = 'Semua PPDB';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $ppdb = [];
    protected $sekolah;
    public $search = '';

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->ppdb = DB::table('ppdb')->where('judul', 'like', '%' . $this->search . '%')->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.ppdb',[
            'ppdb' =>  $this->ppdb,
            'ppdb' => $this->ppdb,
            'sekolah' =>  $this->sekolah
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah,
                'ppdb' => $this->ppdb,
        ]);
    }
}
