<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{
    public function index(){
        $data['feeds'] = DB::table('prestasi')->join('users as creator', 'prestasi.userId', '=', 'creator.id')
        ->select('prestasi.*','creator.fullname as creator')
        ->get();

        return view('auth.prestasi.index', $data);
    }

    public function store(Request $request){
        $user = Auth::user();
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "thumbnail" => "required",
                "deskripsi" => "required",
                "pelaksanaan" => "required",
                "kejuaraan" => "required",
                "tingkat" => "required",
                "penyelenggara" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('prestasi.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/thumbnail'), $imageName);

        $filename = 'images/thumbnail/' . $imageName;

        $slug = Str::slug($request->judul);

        $data = $request->except('_token','thumbnail');
        $data['thumbnail'] = $filename;
        $data['userId'] = $user->id;
        $data['slug'] = $slug;

        DB::table('prestasi')->insert($data);

        return redirect()->route('prestasi.index')
        ->with('success', 'berhasil tambah data prestasi.');
    }

    public function update(Request $request,$id){
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "deskripsi" => "required",
                "pelaksanaan" => "required",
                "kejuaraan" => "required",
                "tingkat" => "required",
                "penyelenggara" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('prestasi.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $filename = null;
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/thumbnail'), $imageName);

            $filename = 'images/thumbnail/' . $imageName;
        }

        $data = $request->except('_token','thumbnail');
        if($filename){
            $data['thumbnail'] = $filename;
        }

        DB::table('prestasi')->where('id', $id)->update($data);

        return redirect()->route('prestasi.index')
        ->with('success', 'berhasil update data prestasi.');
    }

    public function destroy($id){
        DB::table('prestasi')->where('id', $id)->delete();
        return redirect()->route('prestasi.index')
        ->with('success', 'berhasil hapus data prestasi.');
    }
}
