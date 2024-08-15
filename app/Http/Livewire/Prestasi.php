<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Prestasi extends Component
{
    use WithPagination;

    public $title = 'Semua Prestasi';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $feed = [];
    public $search = '';

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->feed = DB::table('prestasi')->where('judul', 'like', '%' . $this->search . '%')->paginate($this->perPage);
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.prestasi',[
            'feed' =>  $this->feed
        ])->layoutData([
            'title' => $this->title,
        ]);
    }
}
