@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2">Setting harga</section>
<section class="d-flex mt-5 justify-content-center">

        
        
        <div class="ps-2">
        <form method="post" action="{{route('postSetting')}}">
        @csrf
        @if(count($data) == 0)
        <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" aria-describedby="harga">
                    <div id="emailHelp" class="form-text">Masukan jumlah harga perkilo</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Diskon</label>
                    <input type="text" class="form-control" name="diskon" id="diskon" aria-describedby="diskon">
                    <div id="emailHelp" class="form-text">Cukup Masukan angka 1-100.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga Pick Up</label>
                    <input type="text" class="form-control" name="pickUp" id="pickUp" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Harga pickup diperuntukan untuk syarat dan ketentuan.</div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        @else         
        <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" value="{{($data[0]['harga'])}}" class="form-control" name="harga" id="harga" aria-describedby="harga">
                    <div id="emailHelp" class="form-text">Masukan jumlah harga perkilo</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Diskon</label>
                    <input type="text" value="{{($data[0]['diskon'])}}" class="form-control" name="diskon" id="diskon" aria-describedby="diskon">
                    <div id="emailHelp" class="form-text">Cukup Masukan angka 1-100.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga Pick Up</label>
                    <input type="text" class="form-control" value="{{($data[0]['HargaPickUp'])}}" name="pickUp" id="pickUp" aria-describedby="HargaPickUp">
                    <div id="emailHelp" class="form-text">Harga pickup diperuntukan untuk syarat dan ketentuan.</div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        @endif
</section>
</div>


@endsection