<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\proses;
use App\Models\transaction;
use RealRashid\SweetAlert\Facades\Alert;


class Transaksi extends Controller
{
    public function listTransaksi(){
        $transaksi = DB::table('transactions')
        ->join('users', 'transactions.idUser', '=', 'users.id')
        ->join('members', 'transactions.nomerHp', '=', 'members.nomerHp')
        ->select('transactions.Invoice','transactions.status','transactions.dibayar', 'users.name as pegawai', 'members.nama','members.alamat', 'transactions.berat','transactions.harga','transactions.diskon','transactions.total')
        ->get();
       
        return view('listTransaksi',['data'=>$transaksi]);
    }
    
    
}
