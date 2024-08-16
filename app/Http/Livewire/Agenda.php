<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Agenda extends Component
{
    use WithPagination;

    public $title = 'Semua Agenda';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $feed = [];
    public $search = '';
    protected $sekolah;

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->feed = DB::table('agenda')->where('judul', 'like', '%' . $this->search . '%')->paginate($this->perPage);
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.agenda',[
            'feed' =>  $this->feed,
            'sekolah' =>  $this->sekolah,
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah,
        ]);
    }
}
