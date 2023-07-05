@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2"><i class='mt-2 me-3 bx bx-pencil icon' ></i>Edit Admin</section>
<section class="d-flex mt-5 justify-content-center">

        
        
        <div class="ps-2">
        <form method="post" action="{{route('prosesEditUser')}}">
        @csrf
        
        <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{($user['email'])}}" class="form-control" name="email" id="email" aria-describedby="email">
                    <div id="no" class="form-text">Masukan Email calon admin yang akan digunakan</div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" value="{{($user['name'])}}" name="nama" id="nama" aria-describedby="nama">
                    <input type="hidden" class="form-control" value="{{($user['id'])}}" name="id" id="id" aria-describedby="nama">
                    <div id="emailHelp" class="form-text">Masukan Nama Pengunjung.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Masukan Password baru.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password Konfirmasi</label>
                    <input type="password" class="form-control" name="passwordRe" id="passwordRe" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Masukan Ulang Password baru.</div>
                </div>
                
                <button type="submit" class="btn" style="background:#820000; color:#ffffff"><i class=' me-1 bx bxs-send icon' ></i>Submit</button>
            </form>
        </div>
       
</section>
</div>


@endsection