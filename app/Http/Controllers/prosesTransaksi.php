<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\proses;
use App\Models\transaction;
use RealRashid\SweetAlert\Facades\Alert;


class prosesTransaksi extends Controller
{
    public function listTransaksiProses(){
        $proses = DB::table('proses')
        ->join('users', 'proses.idUser', '=', 'users.id')
        ->join('members', 'proses.nomerHp', '=', 'members.nomerHp')
        ->select('proses.Invoice','proses.status','users.name as pegawai', 'members.nama','members.alamat', 'proses.berat','proses.harga','proses.diskon','proses.total','proses.dibayar')
        ->get();
        
        return view('listTransaksiProses',['data'=> $proses]);
    }
    public function transaksiProses(Request $request){
        
        $temp=0;
        if($request->berat != null){
            $temp = $request->berat;
        }
       
        proses::create([
            'Invoice'=>$request->kode,
            'status'=>"Di Proses",
            'idUser'=>$request->pegawai,
            'nomerHp'=>$request->no,
            'berat'=>$temp,
            'harga'=>$request->harga,
            'diskon'=>$request->diskon,
            'total'=>$request->total,
            'dibayar'=>$request->bayar,
            'ongkos'=>$request->ongkos,
        ]);
        Alert::success('berhasil!', 'Transaksi Proses Sudah dibuat');
        return redirect()->route('listTransaksiProses');
    }
    public function deleteProses($Invoice){
        proses::where('invoice',$Invoice)->delete();
        Alert::success('berhasil!', 'Transaksi Proses telah di batalkan' );
        return redirect()->route('listTransaksiProses');
    }
    public function prosesEditStatus(Request $request){
      
        $status = $request->status;

        if($status == "Dicuci"){
            $proses = proses::where("Invoice",$request->kode );
            $proses->update([
                'status' => $request->status,
            ]);
            Alert::success('berhasil!', 'Status Berhasil di rubah');
        
            return redirect()->route('listTransaksiProses');
        }
        else if($status == "selesai"){
           $this->transaksiGet($request->kode);
           return redirect()->route('listTransaksiProses');
        
        }
    }
    public function transaksiGet($Invoice){
        $proses = proses::where('invoice', $Invoice)->first();

        transaction::create([
            'Invoice'=>$proses->Invoice,
            'status'=>"Siap diambil/diantar",
            'idUser'=>$proses->idUser,
            'nomerHp'=>$proses->nomerHp,
            'berat'=>$proses->berat,
            'harga'=>$proses->harga,
            'diskon'=>$proses->diskon,
            'total'=>$proses->total,
            'dibayar'=>$proses->dibayar,
            'ongkos'=>$proses->ongkos,
        ]);
       
        proses::where('invoice', $Invoice)->delete();
        Alert::success('Berhasil!', 'Transaksi Telah Selesai');
        return redirect()->route('listTransaksi');
    }
    public function rubahStatus(Request $request)
    {
        return view('editStatus',["data"=>$request->Invoice]);

    }
}
