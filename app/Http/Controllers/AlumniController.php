<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
    public function index(){
        $data['alumni'] = DB::table('alumni')->get();
        return view('auth.alumni.index', $data);
    }

    public function store(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                "nama" => "required",
                "thumbnail" => "required",
                "deskripsi" => "required",
                "kelulusan" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('alumni.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/alumni'), $imageName);

        $filename = 'images/alumni/' . $imageName;

        $data = $request->except('_token','thumbnail');

        $data['thumbnail'] = $filename;

        DB::table('alumni')->insert($data);

        return redirect()->route('alumni.index')
        ->with('success', 'berhasil tambah data alumni.');
    }

    public function update(Request $request,$id){
        $validator = Validator::make(
            $request->all(),
            [
                "nama" => "required",
                "deskripsi" => "required",
                "kelulusan" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('alumni.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $filename = null;
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/alumni'), $imageName);

            $filename = 'images/alumni/' . $imageName;
        }

        $data = $request->except('_token','thumbnail');
        if($filename){
            $data['thumbnail'] = $filename;
        }

        DB::table('alumni')->where('id', $id)->update($data);

        return redirect()->route('alumni.index')
        ->with('success', 'berhasil update data alumni.');
    }

    public function destroy($id){
        DB::table('alumni')->where('id', $id)->delete();
        return redirect()->route('alumni.index')
        ->with('success', 'berhasil hapus data alumni.');
    }
}
