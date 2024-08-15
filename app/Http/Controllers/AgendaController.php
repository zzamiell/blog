<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AgendaController extends Controller
{
    public function index(){
        $data['feeds'] = DB::table('agenda') ->join('users as creator', 'agenda.userId', '=', 'creator.id')
        ->join('users as koordinator', 'agenda.koordinatorId', '=', 'koordinator.id')
        ->select('agenda.*','creator.fullname as creator','koordinator.fullname as koordinator')
        ->get();

        $data['users'] = DB::table('users')->where('role',"!=","ADMIN")->get();
        return view('auth.agenda.index', $data);
    }

    public function store(Request $request){
        $user = Auth::user();
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "thumbnail" => "required",
                "content" => "required",
                "pelaksanaan" => "required",
                "start" => "required",
                "end" => "required",
                "koordinatorId" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('agenda.index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }


        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public folder
        $image->move(public_path('images/thumbnail'), $imageName);

        $filename = 'images/thumbnail/' . $imageName;

        $slug = Str::slug($request->judul);

        $data = $request->except('_token','thumbnail','content');
        $data['thumbnail'] = $filename;
        $data['userId'] = $user->id;
        $data['slug'] = $slug;
        $data['deskripsi'] = $request->content;

        DB::table('agenda')->insert($data);

        return redirect()->route('agenda.index')
        ->with('success', 'berhasil tambah data agenda.');
    }

    public function update(Request $request,$id){
        $validator = Validator::make(
            $request->all(),
            [
                "judul" => "required",
                "content" => "required",
                "pelaksanaan" => "required",
                "start" => "required",
                "end" => "required",
                "koordinatorId" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('agenda.index')
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

        $data = $request->except('_token','thumbnail','content');
        if($filename){
            $data['thumbnail'] = $filename;
        }

        $data['deskripsi'] = $request->content;
        DB::table('agenda')->where('id', $id)->update($data);

        return redirect()->route('agenda.index')
        ->with('success', 'berhasil update data agenda.');
    }

    public function destroy($id){
        DB::table('agenda')->where('id', $id)->delete();
        return redirect()->route('agenda.index')
        ->with('success', 'berhasil hapus data agenda.');
    }
}
