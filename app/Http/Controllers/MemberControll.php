<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use RealRashid\SweetAlert\Facades\Alert;


class MemberControll extends Controller
{
    public function listMember(){
        $member = member::get();
        return view('listMember',['member'=>$member]);
    }
    public function deleteMember($nomerHp){
        member::where('nomerHp',$nomerHp)->delete();
        Alert::success('berhasil!', 'Data Member Telah dihapus.');  
        return redirect()->route('listMember');
        
    }
    public function addMember(){
        return view('addMember');
    }
    public function prosesAddMember(Request $request){

        $cek = member::where('nomerHp', $request->no)->first();
        if($cek == null){
            member::create([
                'nomerHp'=>$request->no,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
            ]);
        }
        else{
            dd('nomer sudah ada');
        }
        Alert::success('berhasil!', 'Member Berhasil Ditambahkan.');  
       
        return redirect()->route('listMember');
    }
    public function editMember($nomerHp){
        $member = member::where('nomerHp', $nomerHp)->first();
      
        return view('editMember',['member'=>$member]);
    }

    public function prosesEditMember(Request $request){
        
        $member = member::where('nomerHp', $request->TempNo);
     
        if($request->TempNo != $request->no ){
            $member->update([
                'nomerHp' => $request->no,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
            ]);
        }
        else{
            $member->update([
                'nomerHp' => $request->TempNo,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
            ]);
        }
        Alert::success('berhasil!', 'Edit data Customer Berhasil.');  
        return redirect()->route('listMember');
    }
}
