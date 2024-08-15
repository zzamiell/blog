<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KegiatanController extends Controller
{
    public function index(){
        $data['feeds'] = DB::table('kegiatan')->join('users as creator', 'kegiatan.userId', '=', 'creator.id')
        ->select('kegiatan.*','creator.fullname as creator')
        ->get();

        return view('auth.kegiatan.index', $data);
    }
    public function galeri($id){
        $data['id'] = $id;
        $data['galeri'] = DB::table('kegiatan_galeri')
        ->where('kegiatanId', $id)
        ->paginate(8);

        return view('auth.kegiatan.galeri', $data);
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
            return redirect()->route('kegiatan.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/kegiatan'), $imageName);

        $filename = 'images/kegiatan/' . $imageName;

        $slug = Str::slug($request->judul);

        $data = $request->except('_token','thumbnail');
        $data['thumbnail'] = $filename;
        $data['userId'] = $user->id;
        $data['slug'] = $slug;

        DB::table('kegiatan')->insert($data);

        return redirect()->route('kegiatan.index')
        ->with('success', 'berhasil tambah data kegiatan.');
    }
    public function store_galeri(Request $request, $id){
        $validator = Validator::make(
            $request->all(),
            [
                "thumbnail" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('kegiatan.galeri', $id)
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/kegiatan/galeri'), $imageName);

        $filename = 'images/kegiatan/galeri/' . $imageName;

        $data = $request->except('_token','thumbnail');
        $data['thumbnail'] = $filename;
        $data['fasilitasId'] = $id;

        DB::table('kegiatan_galeri')->insert($data);

        return redirect()->route('kegiatan.galeri', $id)
        ->with('success', 'berhasil tambah data galeri kegiatan.');
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
            return redirect()->route('kegiatan.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $filename = null;
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/kegiatan'), $imageName);

            $filename = 'images/kegiatan/' . $imageName;
        }

        $data = $request->except('_token','thumbnail');
        if($filename){
            $data['thumbnail'] = $filename;
        }

        $slug = Str::slug($request->judul);
        $data['slug'] = $slug;
        $data['userId'] = $user->id;

        DB::table('kegiatan')->where('id', $id)->update($data);

        return redirect()->route('kegiatan.index')
        ->with('success', 'berhasil update data kegiatan.');
    }

    public function destroy($id){
        DB::table('kegiatan')->where('id', $id)->delete();
        return redirect()->route('kegiatan.index')
        ->with('success', 'berhasil hapus data kegiatan.');
    }

    public function galeri_destroy($id, $kegiatanId){

        DB::table('kegiatan_galeri')->where('id', $id)->delete();
        return redirect()->route('kegiatan.galeri', $kegiatanId)
        ->with('success', 'berhasil hapus data fasilitas.');
    }
}
