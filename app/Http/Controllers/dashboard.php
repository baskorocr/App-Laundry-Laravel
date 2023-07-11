<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;
use App\Models\member;
use App\Models\User;
use App\Models\transaction;
use App\Models\proses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class dashboard extends Controller
{
    public function index(){
        return view('dashboard');
    }
   
    public function createTransaksi(){
        return view('createTransaksi');
    }
       
    public function printInvoce($Invoice){
        
        $proses = DB::table('proses')
        ->join('users', 'proses.idUser', '=', 'users.id')
        ->join('members', 'proses.nomerHp', '=', 'members.nomerHp')
        ->select('proses.Invoice','proses.status','users.name as pegawai','members.nomerHp', 'members.nama','members.alamat', 'proses.berat','proses.harga','proses.diskon','proses.total','proses.dibayar','proses.ongkos')
        ->where('Invoice',$Invoice)->first();
        
        $harga = number_format($proses->harga,2,",","." );
        $total = number_format($proses->total,2,",","." );
        $ongkos = number_format($proses->ongkos,2,",","." );
        
    
        return view("printInvoice",['data' => $proses, 'harga'=>$harga ,'ongkos' => $ongkos, 'total' => $total]);
    }
    

    

    

    public function listUser(){
        $user = User::get();
        return view('listUser',['user'=>$user]);
    }
    public function deleteUser($id){

        User::where('id',$id)->delete();
        Alert::success('berhasil!', 'Data user telah dihapus.');  
        return redirect()->route('listUser');
    }

    public function addUser(){
        return view('addUser');
    }

    public function prosesAddUser(Request $request){
        if($request->password == $request->passwordRe)
        {
            User::create([
                'name'=>$request->nama,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
              
        ]);
        Alert::success('berhasil!', 'Data user telah ditambahkan.');  
        
        return redirect()->route('listUser');
        }
        else{
            Alert::error('Kedua Password Tidak sama!', 'Cek Password anda.');
            return redirect()->back();
        }   
    }

    public function editUser($id){
       
        $user = User::where('id', $id)->first();
         return view('editUser', ['user' => $user]);
    }

    public function prosesEditUser(Request $request){
      
        if($request->password == $request->passwordRe){
        $user = User::where('id', $request->id)->first();
        $user->update([
             'email' => $request->email,
             'name' => $request->nama,
             'password' => Hash::make($request->password),
        ]);
        Alert::success('berhasil!', 'Edit data Admin Berhasil.');  
        return redirect()->route('listUser');
      }
      else{
        Alert::error('Kedua Password Tidak sama!', 'Cek Password anda.');
        return redirect()->back();
    }
        
    }

   

    public function search(Request $request){
        
        $nomer = $request->input('nomer');
       if($nomer != null){
        $member = member::where('nomerHp',$nomer)->first();
      
        $user = Auth::user();
        $ts1 = transaction::count();
        $ts2 = proses::count();
  
        $temp = proses::get()->all();
        $temp2 = transaction::get()->all();
        return response()->json([$member, $user->id,$ts1,$temp,$temp2]);
       }

    }
    
   

    

    
}
