<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UjianController extends Controller
{
    public function index(){
        $data['ujian'] = DB::table('ujian')->join('users as creator', 'ujian.userId', '=', 'creator.id')
        ->select('ujian.*','creator.fullname as creator')
        ->get();

        return view('auth.ujian.index', $data);
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
            return redirect()->route('ujian.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/ujian'), $imageName);

        $filename = 'images/ujian/' . $imageName;

        $data = $request->except('_token','thumbnail');
        $slug = Str::slug($request->judul);

        $data['thumbnail'] = $filename;
        $data['userId'] = $user->id;
        $data['slug'] = $slug;

        DB::table('ujian')->insert($data);

        return redirect()->route('ujian.index')
        ->with('success', 'berhasil tambah data ujian.');
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
            return redirect()->route('ujian.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $filename = null;
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/ujian'), $imageName);

            $filename = 'images/ujian/' . $imageName;
        }
        $slug = Str::slug($request->judul);
        $data = $request->except('_token','thumbnail');
        if($filename){
            $data['thumbnail'] = $filename;
        }
        $data['slug'] = $slug;
        $data['userId'] = $user->id;

        DB::table('ujian')->where('id', $id)->update($data);

        return redirect()->route('ujian.index')
        ->with('success', 'berhasil update data ujian.');
    }

    public function destroy($id){
        DB::table('ujian')->where('id', $id)->delete();
        return redirect()->route('ujian.index')
        ->with('success', 'berhasil hapus data ujian.');
    }
}
