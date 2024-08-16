<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Sambutan extends Component
{
    use WithPagination;

    public $title = 'Sambutan Sekolah';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $visimisi;
    protected $guru;

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->visimisi = DB::table('sekolah')->where('id',1)->first();
        $this->guru = User::where('role','GURU')->latest('id')->take(10)->get();
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {

        return view('livewire.sambutan',[
            'data' =>  $this->visimisi,
            'sekolah' => $this->visimisi,
            'guru' => $this->guru

            ])->layoutData([
                'title' => $this->title,
                'sekolah' => $this->visimisi
        ]);
    }
}
