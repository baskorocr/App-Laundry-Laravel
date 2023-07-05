@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2"><i class='mt-2 me-3 bx bx-pencil icon' ></i>Tambah Transaksi Laundry</section>
<section class="d-flex mt-3 justify-content-center">
<div class="container-fluid w-75 ">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 ">
                        <form method="post" action="{{route('transaksiProses')}}">
                        @csrf
                        <label for="no" class=" form-label pl-5">Nomer Telp. Pengunjung</label>
                        <input type="text"  class=" pl-5 w-25 p-1 form-control" name="no" id="no" aria-describedby="nomer">
                        
                        </div>
                        
                        <div class="row mt-4 ms-3 mb-4 ">
                                <div class="col-4">
                                Kode
                                </div>
                                <div class="col-5">
                                <input type="text" class="form-control w-75" name="kode" id="kode" aria-describedby="kode">
                                <input type="hidden" value='Proses' class="form-control w-75" name="status" id="status" aria-describedby="status">
                                </div>
                                <div class="col-4 mt-2">
                                Opsi Laundry
                                </div>
                                <div class="col-5 mt-2">
                                <select class="form-select w-75" aria-label="Default select example" name="opsi" id="opsi">
                                    <option >-- Pilih --</option>
                                    <option value="satuan">satuan</option>
                                    <option value="kiloan">kiloan</option>
                                   
                                </select>
                                </div>
                                <div class="col-4 mt-2">
                                    
                                Nama
                                </div>
                                <div class="col-5 mt-2">
                                <input type="text" class="form-control w-75" name="nama" id="nama" aria-describedby="nama">
                                </div>
                                <div class="col-4 mt-2">
                                Alamat
                                </div>
                                <div class="col-5 mt-2">
                                <input type="text" class="form-control w-75" name="alamat" id="alamat" aria-describedby="alamat">
                                </div>
                                <div class="col-4 mt-2">
                                Harga
                                </div>
                                <div class="col-5 mt-2">
                                <input type="text" class="form-control w-75" name="harga" id="harga" aria-describedby="harga">
                                </div>
                                <div class="col-4 mt-2">
                                Berat Kiloan
                                </div>
                                <div class="col-5 mt-2">
                                <input type="text" class="form-control w-75" name="berat" id="berat" aria-describedby="berat">
                                </div>
                                <div class="col-4 mt-2">
                                Id Petugas
                                </div>
                                <div class="col-5 mt-2">
                                <input type="text" class="form-control w-75" name="pegawai" id="pegawai" aria-describedby="pegawai">
                                </div>
                                <div class="col-4 mt-2">
                                Diskon
                                </div>
                                <div class="col-5 mt-2">
                                <input type="text" class="form-control w-75" name="diskon" id="diskon" aria-describedby="diskon">
                                </div>
                                <div class="col-4 mt-2">
                                Ongkos kirim
                                </div>
                                <div class="col-5 mt-2">
                                <input type="text" class="form-control w-75" name="ongkos" id="ongkos" aria-describedby="ongkos">
                                </div>
                                <div class="col-4 mt-2">
                                Total
                                </div>
                                <div class="col-5 mt-2">
                                <input type="text" class="form-control w-75" name="total" id="total" aria-describedby="total">
                                </div>
                                <div class="col-4 mt-2">
                                Dibayar
                                </div>
                                <div class="col-5 mt-2">
                                <select class="form-select w-75" aria-label="Default select example" name="bayar">
                                    <option >-- Pilih --</option>
                                    <option value="belum">Belum</option>
                                    <option value="sudah">Lunas</option>
                                   
                                </select>
                                </div>
                                <div class="col-4 mt-2">
                                
                                </div>
                                <div class="col-5 mt-3">
                                <button type="submit" style="background:#820000; color:#ffffff" class="btn "><i class=' me-1 bx bxs-send icon' ></i>Submit</button>
                                </div>
                               
                                
                                
                        </div>
                       
                        </form>
                    </div>

                </div>

        
        
       
</section>
</div>

@include('sweetalert::alert')
@endsection