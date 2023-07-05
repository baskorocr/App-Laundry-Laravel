@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2">Ubah Status Laundry</section>
<section class="d-flex mt-3 justify-content-center">
<div class="container-fluid w-75 ">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 ">
                        <form method="post" action="{{route('prosesEditStatus')}}">
                        @csrf
                        <label for="no" class=" form-label pl-5">Edit Status</label>
                       
                        </div>
                        
                        <div class="row mt-4 ms-3 mb-4 ">
                                <div class="col-4">
                                Kode
                                </div>
                                <div class="col-5">
                                <input type="text" value="{{$data}}" class="form-control w-75" name="kode" id="kode" aria-describedby="kode">
                                 </div>
                                <div class="col-4 mt-2">
                                Status
                                </div>
                                <div class="col-5 mt-2">
                                <select class="form-select w-75" aria-label="Default select example" name="status" id="status">
                                    <option >-- Pilih --</option>
                                    <option value="Dicuci">dicuci</option>
                                    <option value="selesai">selesai</option>
                                   
                                </select>
                                </div>
                                <div class="col-4 mt-2">
                                
                                </div>
                                <div class="col-5 mt-3 d-flex">
                                <button type="submit" class="btn btn-primary" style="background:#820000; color:#ffffff"><i class=' me-1 bx bxs-send icon' ></i>Submit</button>
                                </div>
                                
                       
                        </form>
                    </div>

                </div>

        
        
       
</section>
</div>

@include('sweetalert::alert')
@endsection