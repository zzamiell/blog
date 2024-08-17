<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class ALumni extends Component
{
    use WithPagination;

    public $title = 'Semua Alumni';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $alumni = [];
    public $search = '';
    protected $sekolah;

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->alumni = DB::table('alumni')->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.alumni',[
            'alumni' =>  $this->alumni,
            'sekolah' =>  $this->sekolah,
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah,
                'alumni' =>  $this->alumni,
        ]);
    }
}
