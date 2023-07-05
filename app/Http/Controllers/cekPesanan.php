<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cekPesanan extends Controller
{
    public function index(){
        return view('cekPesanan');
    }
    public function cek(Request $request){
        $inv = $request->input('inv');
        $proses = DB::table('proses')
        ->join('users', 'proses.idUser', '=', 'users.id')
        ->join('members', 'proses.nomerHp', '=', 'members.nomerHp')
        ->select('proses.Invoice','proses.status','users.name as pegawai', 'members.nama','members.alamat', 'proses.berat','proses.harga','proses.diskon','proses.total','proses.dibayar')
        ->where('Invoice',$inv)->first();
        $transaksi = DB::table('transactions')
        ->join('users', 'transactions.idUser', '=', 'users.id')
        ->join('members', 'transactions.nomerHp', '=', 'members.nomerHp')
        ->select('transactions.Invoice','transactions.status','transactions.dibayar', 'users.name as pegawai', 'members.nama','members.alamat', 'transactions.berat','transactions.harga','transactions.diskon','transactions.total')
        ->where("Invoice",$inv)->first();
       
        return response()->json([$proses, $transaksi, "hallo" ]);

    }
    
}

