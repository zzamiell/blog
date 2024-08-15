<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    public function index(){
        $data['feeds'] = DB::table('artikel')->get();
        return view('auth.artikel.index', $data);
    }

    public function store(Request $request){
        $user = Auth::user();
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "thumbnail" => "required",
                "content" => "required",
                "kategori" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('artikel.index')
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

        DB::table('artikel')->insert($data);

        return redirect()->route('artikel.index')
        ->with('success', 'berhasil tambah data artikel.');
    }

    public function update(Request $request,$id){
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "content" => "required",
                "kategori" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('artikel.index')
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


        DB::table('artikel')->where('id', $id)->update($data);

        return redirect()->route('artikel.index')
        ->with('success', 'berhasil update data artikel.');
    }

    public function destroy($id){
        DB::table('artikel')->where('id', $id)->delete();
        return redirect()->route('artikel.index')
        ->with('success', 'berhasil hapus data artikel.');
    }
}
