<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;
use Illuminate\Support\Facades\DB;
use App\Models\info;

class index extends Controller
{
    public function index(){
        $count = setting::count();
        $data = setting::first();
        $news = DB::table('infos')->paginate(3);

        return view('home',['setting'=>$count, 'data'=>$data,  'news'=>$news]);
    
    }
    public function pengumuman($id){
        $info = info::where('id',$id)->first();
        return view('pengumuman',['data'=>$info]);
    }
}
