@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2">Tambah Admin</section>
<section class="d-flex mt-5 justify-content-center">

        
        
        <div class="ps-2">
        <form method="post" action="{{route('prosesAddUser')}}">
        @csrf
        
        <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
                    <div id="no" class="form-text">Masukan Email calon admin yang akan digunakan</div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama">
                    <div id="emailHelp" class="form-text">Masukan Nama Pengunjung.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Masukan Password.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password Konfirmasi</label>
                    <input type="password" class="form-control" name="passwordRe" id="passwordRe" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Masukan Ulang Password.</div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
       
</section>
</div>


@endsection