<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JurusanController extends Controller
{
    public function index(){
        $data['feeds'] = DB::table('jurusan')->join('users as creator', 'jurusan.userId', '=', 'creator.id')
        ->select('jurusan.*','creator.fullname as creator')
        ->get();

        return view('auth.jurusan.index', $data);
    }
    public function galeri($id){
        $data['id'] = $id;
        $data['galeri'] = DB::table('jurusan_galeri')
        ->where('jurusanId', $id)
        ->paginate(8);

        return view('auth.jurusan.galeri', $data);
    }

    public function store(Request $request){
        $user = Auth::user();

        $validator = Validator::make(
            $request->all(),
            [
                "jurusan" => "required",
                "thumbnail" => "required",
                "deskripsi" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('jurusan.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/jurusan'), $imageName);

        $filename = 'images/jurusan/' . $imageName;

        $slug = Str::slug($request->jurusan);

        $data = $request->except('_token','thumbnail');
        $data['thumbnail'] = $filename;
        $data['userId'] = $user->id;
        $data['slug'] = $slug;

        DB::table('jurusan')->insert($data);

        return redirect()->route('jurusan.index')
        ->with('success', 'berhasil tambah data jurusan.');
    }
    public function store_galeri(Request $request, $id){
        $validator = Validator::make(
            $request->all(),
            [
                "thumbnail" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('jurusan.galeri', $id)
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/jurusan/galeri'), $imageName);

        $filename = 'images/jurusan/galeri/' . $imageName;

        $data = $request->except('_token','thumbnail');
        $data['thumbnail'] = $filename;
        $data['jurusanId'] = $id;

        DB::table('jurusan_galeri')->insert($data);

        return redirect()->route('jurusan.galeri', $id)
        ->with('success', 'berhasil tambah data galeri jurusan.');
    }

    public function update(Request $request,$id){
        $user = Auth::user();
        $validator = Validator::make(
            $request->all(),
            [
                "jurusan" => "required",
                "deskripsi" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('jurusan.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $filename = null;
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/jurusan'), $imageName);

            $filename = 'images/jurusan/' . $imageName;
        }

        $data = $request->except('_token','thumbnail');
        if($filename){
            $data['thumbnail'] = $filename;
        }

        $slug = Str::slug($request->jurusan);
        $data['slug'] = $slug;
        $data['userId'] = $user->id;

        DB::table('jurusan')->where('id', $id)->update($data);

        return redirect()->route('jurusan.index')
        ->with('success', 'berhasil update data jurusan.');
    }

    public function destroy($id){
        DB::table('jurusan')->where('id', $id)->delete();
        return redirect()->route('jurusan.index')
        ->with('success', 'berhasil hapus data jurusan.');
    }

    public function galeri_destroy($id, $jurusanId){

        DB::table('jurusan_galeri')->where('id', $id)->delete();
        return redirect()->route('jurusan.galeri', $jurusanId)
        ->with('success', 'berhasil hapus data jurusan.');
    }
}
