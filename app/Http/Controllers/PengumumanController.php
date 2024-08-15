<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
    public function index(){
        $data['feeds'] = DB::table('pengumuman')->join('users as creator', 'pengumuman.userId', '=', 'creator.id')
        ->select('pengumuman.*','creator.fullname as creator')
        ->get();

        return view('auth.pengumuman.index', $data);
    }

    public function store(Request $request){
        $user = Auth::user();

        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "thumbnail" => "required",
                "lampiran" => "required",
                "deskripsi" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('pengumuman.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $attachment = $request->file('lampiran');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $attachmentName = time() . '.' . $attachment->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/pengumuman'), $imageName);
        $attachment->move(public_path('images/pengumuman_lampiran'), $attachmentName);

        $filename = 'images/pengumuman/' . $imageName;
        $filenameAttachment = 'images/pengumuman_lampiran/' . $attachmentName;

        $slug = Str::slug($request->judul);

        $data = $request->except('_token','thumbnail','lampiran');
        $data['thumbnail'] = $filename;
        $data['lampiran'] = $filenameAttachment;
        $data['userId'] = $user->id;
        $data['slug'] = $slug;

        DB::table('pengumuman')->insert($data);

        return redirect()->route('pengumuman.index')
        ->with('success', 'berhasil tambah data pengumuman.');
    }


    public function update(Request $request,$id){
        $user = Auth::user();
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "deskripsi" => "required"
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('pengumuman.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $filename = null;
        $lampiranName = null;
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('images/pengumuman'), $imageName);

            $filename = 'images/pengumuman/' . $imageName;
        }

        if ($request->file('lampiran')) {
            $attach = $request->file('lampiran');
            $attachName = time() . '.' . $attach->getClientOriginalExtension();

            // Store the image in the public folder
            $attach->move(public_path('images/pengumuman_lampiran'), $attachName);
            $lampiranName = 'images/pengumuman_lampiran/' . $attachName;
        }

        $data = $request->except('_token','thumbnail','lampiran');
        if($filename){
            $data['thumbnail'] = $filename;
        }
        if($lampiranName){
            $data['lampiran'] = $lampiranName;
        }

        $slug = Str::slug($request->judul);
        $data['slug'] = $slug;
        $data['userId'] = $user->id;

        DB::table('pengumuman')->where('id', $id)->update($data);

        return redirect()->route('pengumuman.index')
        ->with('success', 'berhasil update data pengumuman.');
    }

    public function destroy($id){
        DB::table('eskul')->where('id', $id)->delete();
        return redirect()->route('eskul.index')
        ->with('success', 'berhasil hapus data eskul.');
    }
}
