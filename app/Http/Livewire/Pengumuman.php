<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Pengumuman extends Component
{
    use WithPagination;

    public $title = 'Semua Prestasi';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $pengumuman = [];
    public $search = '';

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->pengumuman = DB::table('pengumuman')->where('judul', 'like', '%' . $this->search . '%')->paginate($this->perPage);
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.pengumuman',[
            'pengumuman' =>  $this->pengumuman
        ])->layoutData([
            'title' => $this->title,
        ]);
    }
}
