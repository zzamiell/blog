<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Kegiatan extends Component
{
    use WithPagination;

    public $title = 'Semua Kegiatan';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $kegiatan = [];
    protected $sekolah;
    public $search = '';

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->kegiatan = DB::table('kegiatan')->where('judul', 'like', '%' . $this->search . '%')->paginate($this->perPage);
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.kegiatan',[
            'kegiatan' =>  $this->kegiatan,
            'sekolah' =>  $this->sekolah
            ])->layoutData([
                'title' => $this->title,
                'sekolah' =>  $this->sekolah
        ]);
    }
}
