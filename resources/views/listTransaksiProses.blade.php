@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2"><i class='mt-2 me-3 bx bxs-hourglass-bottom  icon' ></i>Transaksi di Proses</section>
<section class="d-flex mt-5 justify-content-center">
<div class="container-fluid w-100">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                            <div class="row">
                                <div class="col">
                                <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('createTransaksi')}}" type="button" class="btn " style="background:#820000; color:#ffffff">tambah data</a></h6>
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
                                            <th>Invoice</th>
                                            <th>Nama Pengujung</th>
                                            <th>Alamat</th>
                                            <th>Di Bayar</th>
                                            <th>Status</th>
                                            <th>Berat(Kg)</th>
                                            <th>Harga</th>
                                            <th>Diskon</th>
                                            <th>Total</th>
                                            <th>Pegawai</th>
                                            <th>Option</th>
                                            
                                         
                                        </tr>
                                        @foreach($data as $s)
                                        <tr class="align-middle">
                                            <th>{{$s->Invoice}}</th>
                                            <th>{{$s->nama}}</th>
                                            <th>{{$s->alamat}}</th>
                                            <th>{{$s->dibayar}}</th>
                                            <th>{{$s->status}}</th>
                                            <th>{{$s->berat}}</th>
                                            <th>{{$s->harga}}</th>
                                            <th>{{$s->diskon}}</th>
                                            <th>{{$s->total}}</th>
                                            <th>{{$s->pegawai}}</th>
                                            <th>
                                            
                                            <a href="printInvoce/{{$s->Invoice}}" type="button" class="btn btn-primary">Cetak</a>
                                            <a href="rubahStatus/{{$s->Invoice}}" type="button" class="btn btn-success">Ubah Status</a>
                                              
                                            <a href="deleteProses/{{$s->Invoice}}" type="button" class="btn btn-danger">Batalkan</a>
                                                
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