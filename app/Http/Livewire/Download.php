<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Download extends Component
{
    use WithPagination;

    public $title = 'DOnwload Materi Sekolah';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $donwload;
    protected $sekolah;

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->download = DB::table('sekolah_lampiran')->where('sekolahId',1)->get();
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {

        return view('livewire.download',[
            'data' =>  $this->download,
            'sekolah' => $this->sekolah

            ])->layoutData([
                'title' => $this->title,
                'sekolah' => $this->sekolah
        ]);
    }
}
