<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Fasilitas extends Component
{
    use WithPagination;

    public $title = 'Semua Fasilitas';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $fasilitas = [];
    public $search = '';

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->fasilitas = DB::table('fasilitas')->where('judul', 'like', '%' . $this->search . '%')->paginate($this->perPage);
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.fasilitas',[
            'fasilitas' =>  $this->fasilitas
        ])->layoutData([
            'title' => $this->title,
        ]);
    }
}
