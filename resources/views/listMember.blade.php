@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2"><i class='mt-2 me-3 bx  bx-id-card icon'></i>Data Customer terdaftar</section>
<section class="d-flex mt-5 justify-content-center">
<div class="container-fluid w-75">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('TambahMember')}}" type="button" class="btn " style="background:#820000; color:#ffffff">tambah data</a></h6>
                                </div>
                                <div class="col-4">
                                
                                </div>
                                <div class="col  text-end">
                                </div>
                            </div>
                        </div>
                            
                           
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomer Hp</th>
                                            <th>Nama</th>
                                            <th>alamat</th>
                                            <th>option</th>
                                         
                                        </tr>
                                        @foreach($member as $s)
                                        <tr class="align-middle">
                                            <th>{{$s->nomerHp}}</th>
                                            <th>{{$s->nama}}</th>
                                            <th>{{$s->alamat}}</th>
                                            <th>
                                                <a href="deleteMember/{{$s->nomerHp}}" type="button" class="btn btn-danger">hapus</a>
                                                <a href="editMember/{{$s->nomerHp}}" type="button" class="btn btn-success">edit</a>
                                                
                                            </th>
                                        </tr>
                                        </tr>
                                        @endforeach
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

        
        
       
</section>
</div>


@endsection