<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PengaturanController extends Controller
{
    public function index(){
        $data['data'] = DB::table('sekolah')->where('id',1)->first();
        $data['banner'] = DB::table('sekolah_banner')->where('sekolahId',1)->paginate(8);
        $data['lampiran'] = DB::table('sekolah_lampiran')->where('sekolahId',1)->get();

        return view('auth.pengaturan.index',$data);
    }
    public function update(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                "nama_sekolah" => "required",
                "kepala_sekolah" => "required",
                "sambutan" => "required",
                "phone" => "required",
                "email" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('pengaturan.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }

        $filename = null;
        if ($request->file('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/sekolah'), $imageName);

            $filename = 'images/sekolah/' . $imageName;
        }

        $filenameAvatar = null;
        if ($request->file('avatar')) {
            $imageAvatar = $request->file('avatar');
            $imageNameAvatar = time() . '.' . $imageAvatar->getClientOriginalExtension();

            // Store the image in the public folder
            $imageAvatar->move(public_path('images/kepala_sekolah'), $imageNameAvatar);

            $filenameAvatar = 'images/kepala_sekolah/' . $imageNameAvatar;
        }

        $data = $request->except('_token','logo','avatar');
        if($filename){
            $data['logo'] = $filename;
        }

        if($filenameAvatar){
            $data['avatar'] = $filenameAvatar;
        }

        DB::table('sekolah')->where('id', 1)->update($data);

        return redirect()->route('pengaturan.index')
        ->with('success', 'berhasil update data sekolah.');
    }
    public function store_lampiran(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "jenis" => "required",
                "lampiran" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('pengaturan.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }

        $filename = null;
        if ($request->file('lampiran')) {
            $image = $request->file('lampiran');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/lampiran'), $imageName);

            $filename = 'images/lampiran/' . $imageName;
        }

        $data = $request->except('_token','lampiran');
        if($filename){
            $data['lampiran'] = $filename;
        }
        $data['sekolahId'] = 1;

        DB::table('sekolah_lampiran')->insert($data);

        return redirect()->route('pengaturan.index')
        ->with('success', 'berhasil tambah data lampiran sekolah.');
    }

    public function update_profile(Request $request){
        $data = $request->except('_token');
        DB::table('sekolah')->where('id', 1)->update($data);

        return redirect()->route('pengaturan.index')
        ->with('success', 'berhasil update data sekolah.');
    }
    public function update_visi_misi(Request $request){
       $data = $request->except('_token');
        DB::table('sekolah')->where('id', 1)->update($data);

        return redirect()->route('pengaturan.index')
        ->with('success', 'berhasil update data visi misi sekolah.');
    }

    public function store_banner(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                "banner" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('pengaturan.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('banner');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/banner'), $imageName);

        $filename = 'images/banner/' . $imageName;

        $data = $request->except('_token','banner');
        $data['banner'] = $filename;
        $data['sekolahId'] = 1;

        DB::table('sekolah_banner')->insert($data);

        return redirect()->route('pengaturan.index')
        ->with('success', 'berhasil tambah data banner halaman sekolah.');
    }

    public function destroy_banner($id){
        DB::table('sekolah_banner')->where('id', $id)->delete();
        return redirect()->route('pengaturan.index')
        ->with('success', 'berhasil hapus data banner sekolah.');
    }

    public function destroy_lampiran($id){
        DB::table('sekolah_lampiran')->where('id', $id)->delete();
        return redirect()->route('pengaturan.index')
        ->with('success', 'berhasil hapus data lampiran sekolah.');
    }
}
