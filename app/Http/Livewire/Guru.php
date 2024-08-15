<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;

class Guru extends Component
{
    use WithPagination;

    public $title = 'Semua Guru & Staff';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $users = [];
    public $search = '';

    #[Layout('layouts.app')]

    public function updatingSearch()
    {
        $this->users = User::where('role','GURU')->where('fullname', 'like', '%' . $this->search . '%')->paginate($this->perPage);
    }

    public function mount(){
        $this->updatingSearch();
    }

    public function render()
    {
        return view('livewire.guru',[
            'users' =>  $this->users
        ])->layoutData([
            'title' => $this->title,
        ]);
    }
}
