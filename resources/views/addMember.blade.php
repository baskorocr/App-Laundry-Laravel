@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2">Tambah Member</section>
<section class="d-flex mt-5 justify-content-center">

        
        
        <div class="ps-2">
        <form method="post" action="{{route('prosessAddMember')}}">
        @csrf
        
        <div class="mb-3">
                    <label for="no" class="form-label">Nomer Telp.</label>
                    <input type="text" class="form-control" name="no" id="no" aria-describedby="nomer">
                    <div id="no" class="form-text">Masukan Nomer Whatsapp Aktif / nomer Hp aktif</div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama">
                    <div id="emailHelp" class="form-text">Masukan Nama Pengunjung.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Alamat Valid Pengujung.</div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
       
</section>
</div>


@endsection