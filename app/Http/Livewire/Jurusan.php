<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Jurusan extends Component
{
    use WithPagination;

    public $title = 'Semua Jurusan';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $jurusan = [];
    public $search = '';

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->jurusan = DB::table('jurusan')->where('jurusan', 'like', '%' . $this->search . '%')->paginate($this->perPage);
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.jurusan',[
            'jurusan' =>  $this->jurusan
        ])->layoutData([
            'title' => $this->title,
        ]);
    }
}
