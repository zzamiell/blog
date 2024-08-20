<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FasilitasController extends Controller
{
    public function index(){
        $data['feeds'] = DB::table('fasilitas')->join('users as creator', 'fasilitas.userId', '=', 'creator.id')
        ->select('fasilitas.*','creator.fullname as creator')
        ->get();

        return view('auth.fasilitas.index', $data);
    }
    public function galeri($id){
        $data['id'] = $id;
        $data['galeri'] = DB::table('fasilitas_galeri')
        ->where('fasilitasId', $id)
        ->paginate(8);

        return view('auth.fasilitas.galeri', $data);
    }

    public function store(Request $request){
        $user = Auth::user();

        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "thumbnail" => "required",
                "deskripsi" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('fasilitas.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/fasilitas'), $imageName);

        $filename = 'images/fasilitas/' . $imageName;

        $slug = Str::slug($request->judul);

        $data = $request->except('_token','thumbnail');
        $data['thumbnail'] = $filename;
        $data['userId'] = $user->id;
        $data['slug'] = $slug;

        DB::table('fasilitas')->insert($data);

        return redirect()->route('fasilitas.index')
        ->with('success', 'berhasil tambah data fasilitas.');
    }
    public function store_galeri(Request $request, $id){
        $validator = Validator::make(
            $request->all(),
            [
                "thumbnail" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('fasilitas.galeri', $id)
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/fasilitas/galeri'), $imageName);

        $filename = 'images/fasilitas/galeri/' . $imageName;

        $data = $request->except('_token','thumbnail');
        $data['thumbnail'] = $filename;
        $data['fasilitasId'] = $id;

        DB::table('fasilitas_galeri')->insert($data);

        return redirect()->route('fasilitas.galeri', $id)
        ->with('success', 'berhasil tambah data galeri fasilitas.');
    }

    public function update(Request $request,$id){
        $user = Auth::user();
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "deskripsi" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('fasilitas.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $filename = null;
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/fasilitas'), $imageName);

            $filename = 'images/fasilitas/' . $imageName;
        }

        $data = $request->except('_token','thumbnail');
        if($filename){
            $data['thumbnail'] = $filename;
        }

        $slug = Str::slug($request->judul);
        $data['slug'] = $slug;
        $data['userId'] = $user->id;

        DB::table('fasilitas')->where('id', $id)->update($data);

        return redirect()->route('fasilitas.index')
        ->with('success', 'berhasil update data fasilitas.');
    }

    public function destroy($id){
        DB::table('fasilitas')->where('id', $id)->delete();
        return redirect()->route('fasilitas.index')
        ->with('success', 'berhasil hapus data fasilitas.');
    }

    public function galeri_destroy($id, $fasilitasId){

        DB::table('fasilitas_galeri')->where('id', $id)->delete();
        return redirect()->route('fasilitas.galeri', $fasilitasId)
        ->with('success', 'berhasil hapus data fasilitas.');
    }
}
