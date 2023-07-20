@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2">Setting Page</section>
<section class="d-flex mt-5 justify-content-center">

        
        
        @if($setting==0)
            <div class="ps-2">
        <form method="post" action="{{route('settingPost')}}">
        @csrf
        
        <div class="mb-3">
                    <label for="no" class="form-label">Nama Toko.</label>
                    <input type="text" class="form-control" name="nama" id="no" aria-describedby="nomer">
                    <div id="emailHelp" class="form-text">Masukan Nama Toko</div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">About</label>
                    <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <div id="emailHelp" class="form-text">Masukan tentang toko.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Masukan Alamat Toko.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link</label>
                    <input type="text" class="form-control" name="link" id="alamat" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Link Frame MAPS.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomer Wa</label>
                    <input type="text" class="form-control" name="Nomer" id="alamat" aria-describedby="Nomer">
                    <div id="emailHelp" class="form-text">Masukan Nomer Wa Untuk Toko.</div>
                </div>
                
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
            </form>
        </div>
        @else<div class="ps-2">
        <form method="post" action="{{route('settingEdit')}}">
        @csrf
        
        <div class="mb-3">
                    <label for="no" class="form-label">Nama Toko.</label>
                    <input type="text" hidden value="{{$data->id}}" class="form-control" name="id" id="no" aria-describedby="nomer">
                    <input type="text" value="{{$data->NamaToko}}" class="form-control" name="nama" id="no" aria-describedby="nomer">
                    <div id="emailHelp" class="form-text">Masukan Nama Toko</div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">About</label>
                    <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="3">{{$data->About}}</textarea>
                    <div id="emailHelp" class="form-text">Masukan tentang toko.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" value="{{$data->Alamat}}" class="form-control" name="alamat" id="alamat" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Masukan Alamat Toko.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link</label>
                    <input type="text" value="{{$data->Link}}" class="form-control" name="link" id="alamat" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Link Frame MAPS.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomer Wa</label>
                    <input type="text" value="{{$data->Nomer}}" class="form-control" name="Nomer" id="alamat" aria-describedby="Nomer">
                    <div id="emailHelp" class="form-text">Masukan Nomer Wa Untuk Toko dengan 62.</div>
                </div>
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
            </form>
        </div>
        @endif
       
</section>
</div>


@endsection