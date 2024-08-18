<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\WithPagination;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Search extends Component
{
    use WithPagination;

    public $title = 'cari informasi';
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    protected $search;
    protected $sekolah;

    #[Layout('layouts.app')]

    public function mount(Request $request){
        $this->search = $request->keyword;
        $this->sekolah = DB::table('sekolah')->where('id',1)->first();
    }

    public function render()
    {

        $data['artikel'] = DB::table('artikel')->where('judul', 'like', '%' . $this->search . '%')
        ->select('slug','judul','thumbnail','content as deskripsi')->get();

        $data['agenda'] = DB::table('agenda')->where('judul', 'like', '%' . $this->search . '%')
        ->select('slug','judul','thumbnail','deskripsi')->get();

        $data['prestasi'] = DB::table('prestasi')->where('judul', 'like', '%' . $this->search . '%')
        ->select('slug','judul','thumbnail','deskripsi')->get();

        $data['guru'] = User::where('role','GURU')->where('fullname', 'like', '%' . $this->search . '%')
        ->select('id','fullname','avatar')->get();

        $data['jurusan'] = DB::table('jurusan')->select('slug','jurusan as judul','thumbnail','deskripsi')
        ->where('jurusan', 'like', '%' . $this->search . '%')->get();

        $data['eskul'] = DB::table('eskul')->select('slug','judul','thumbnail','deskripsi')
        ->where('judul', 'like', '%' . $this->search . '%')->get();

        $data['pengumuman'] = DB::table('pengumuman')->select('slug','judul','thumbnail','deskripsi')
        ->where('judul', 'like', '%' . $this->search . '%')->get();

        $data['ppdb'] = DB::table('ppdb')->select('slug','judul','thumbnail','deskripsi')
        ->where('judul', 'like', '%' . $this->search . '%')->get();

        $data['ujian'] = DB::table('ujian')->select('slug','judul','thumbnail','deskripsi')
        ->where('judul', 'like', '%' . $this->search . '%')->get();

        $data['fasilitas'] = DB::table('fasilitas')->select('slug','judul','thumbnail','deskripsi')
        ->where('judul', 'like', '%' . $this->search . '%')->get();

        $data['kegiatan'] = DB::table('kegiatan')->select('slug','judul','thumbnail','deskripsi')
        ->where('judul', 'like', '%' . $this->search . '%')->get();

        return view('livewire.search',[
            'data' =>  $data,
            'sekolah' => $this->sekolah,
            ])->layoutData([
                'title' => $this->title,
                'sekolah' => $this->sekolah
        ]);
    }
}
