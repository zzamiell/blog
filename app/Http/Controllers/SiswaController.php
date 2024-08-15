<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function index(){
        $data['gurus'] = DB::table('users')->where('role','SISWA')->get();
        return view('auth.siswa.index', $data);
    }

    public function store(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                "fullname" => "required",
                "email" => "required",
                "password" => "required",
                "phone" => "required",
                "tempat_lahir" => "required",
                "tanggal_lahir" => "required",
                "agama" => "required",
                "jenis_kelamin" => "required",
                "avatar" => "required",
                "alamat" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('siswa.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('avatar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/avatar'), $imageName);

        $filename = 'images/avatar/' . $imageName;

        $data = $request->except('_token','avatar');

        $data['avatar'] = $filename;
        $data['role'] = "SISWA";

        DB::table('users')->insert($data);

        return redirect()->route('siswa.index')
        ->with('success', 'berhasil tambah data siswa.');
    }

    public function update(Request $request,$id){
        $validator = Validator::make(
            $request->all(),
            [
                "fullname" => "required",
                "email" => "required",
                "phone" => "required",
                "tempat_lahir" => "required",
                "tanggal_lahir" => "required",
                "agama" => "required",
                "jenis_kelamin" => "required",
                "alamat" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('siswa.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $filename = null;
        if ($request->file('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/avatar'), $imageName);

            $filename = 'images/avatar/' . $imageName;
        }

        $data = $request->except('_token','avatar');
        if($filename){
            $data['avatar'] = $filename;
        }


        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('siswa.index')
        ->with('success', 'berhasil update data siswa.');
    }

    public function destroy($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('siswa.index')
        ->with('success', 'berhasil hapus data siswa.');
    }
}
