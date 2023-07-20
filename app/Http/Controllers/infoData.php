<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\info;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class infoData extends Controller
{
    public function index(){
        $info = info::get();
        return view('info',['info'=>$info]);
     
    }
    public function store(Request $request)
    {
        $input = $request->all();
      
        info::create([
            'title' => $input['title'],
            'information' => $input['summernote'],
        ]);
        return redirect()->route('info');
       
    }
    public function create(){
        return view('createInfo');
    }
    public function deleteInfo($id){
        info::where('id',$id)->delete();
        Alert::success('berhasil!', 'Informasi Telah dihapus.');  
        return redirect()->route('info');
        
    }
    public function editInfo($id){
        $info = info::where('id',$id)->first();

        return view('updateInfo',['info'=>$info]);
    }

    public function updatePosts(Request $request){
        $info = info::where('id', $request->id)->first();
        $info->update([
             'title' => $request->title,
             'information' => $request->summernote,

        ]);

        return redirect()->route('info');
    }

    public function pengumuman($id){
        return view('pengumuman');
    }
}
