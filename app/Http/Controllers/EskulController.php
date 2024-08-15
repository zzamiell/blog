<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EskulController extends Controller
{
    public function index(){
        $data['feeds'] = DB::table('eskul')->join('users as creator', 'eskul.userId', '=', 'creator.id')
        ->join('users as pembina', 'eskul.pembinaId', '=', 'pembina.id')
        ->select('eskul.*','creator.fullname as creator','pembina.fullname as pembina')
        ->get();

        $data['users'] = DB::table('users')->where('role',"!=","ADMIN")->get();

        return view('auth.eskul.index', $data);
    }

    public function store(Request $request){
        $user = Auth::user();

        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "thumbnail" => "required",
                "deskripsi" => "required",
                "pembinaId" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('eskul.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/eskul'), $imageName);

        $filename = 'images/eskul/' . $imageName;

        $slug = Str::slug($request->judul);

        $data = $request->except('_token','thumbnail');
        $data['thumbnail'] = $filename;
        $data['userId'] = $user->id;
        $data['slug'] = $slug;

        DB::table('eskul')->insert($data);

        return redirect()->route('eskul.index')
        ->with('success', 'berhasil tambah data eskul.');
    }


    public function update(Request $request,$id){
        $user = Auth::user();
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "deskripsi" => "required",
                "pembinaId" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('eskul.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $filename = null;
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/eskul'), $imageName);

            $filename = 'images/eskul/' . $imageName;
        }

        $data = $request->except('_token','thumbnail');
        if($filename){
            $data['thumbnail'] = $filename;
        }

        $slug = Str::slug($request->jurusan);
        $data['slug'] = $slug;
        $data['userId'] = $user->id;

        DB::table('eskul')->where('id', $id)->update($data);

        return redirect()->route('eskul.index')
        ->with('success', 'berhasil update data eskul.');
    }

    public function destroy($id){
        DB::table('eskul')->where('id', $id)->delete();
        return redirect()->route('eskul.index')
        ->with('success', 'berhasil hapus data eskul.');
    }
}
