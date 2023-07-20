<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;

class settingPage extends Controller
{
    public function index(){
        $count = setting::count();
        $data = setting::first();

        return view('setting',['setting'=>$count, 'data'=>$data]);

    }
    public function settingPost(Request $request){
        setting::create([
            'NamaToko' => $request->nama,
            'About' => $request->about,
            'Alamat' => $request->alamat,
            'Link' => $request->link,
            'Nomer' => $request->Nomer,
        ]);
        return redirect()->back();

    }

    public function settingEdit(Request $request){
        $setting = setting::where('id',$request->id)->first();
       
        $setting->update([
            'NamaToko' => $request->nama,
            'Alamat' => $request->alamat,
            'About' => $request->about,
            'Link' => $request->link,
            'Nomer' => $request->Nomer,
        ]);

    return redirect()->back();

    }
}
