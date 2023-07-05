@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2">
    
<i class='mt-2 me-3 bx  bxs-user-plus icon'></i>Data User admin </section>
<section class="d-flex mt-5 justify-content-center">
<div class="container-fluid w-75">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                            <div class="col">
                            <h6 class="m-0 font-weight-bold "><a href="{{route('addUser')}}" type="button" class="btn " style="background:#820000; color:#ffffff">tambah data</a></h6>
                                </div>
                                <div class="col-4">
                                
                                </div>
                                <div class="col  text-end">
                                </div>
                            </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>option</th>
                                         
                                        </tr>
                                        @foreach($user as $s)
                                        <tr class="align-middle">
                                            <th>{{$s->id}}</th>
                                            <th>{{$s->name}}</th>
                                            <th>{{$s->email}}</th>
                                            <th>Admin</th>
                                            <th>
                                                <a href="deleteUser/{{$s->id}}" type="button" class="btn btn-danger">hapus</a>
                                                <a href="editUser/{{$s->id}}" type="button" class="btn btn-success">edit</a>
                                                
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