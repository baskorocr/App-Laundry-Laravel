@extends('layouts.slide')

@section('contents')

<div class="bodi">
<section class="d-flex mt-5 justify-content-center fs-2 ps-2"><i class='mt-2 me-3 bx bx-message-square-check  icon' ></i>
                            Data Transaksi</section>
<section class="d-flex mt-5 justify-content-center">
<div class="container-fluid w-100">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        Transaksi    
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Status</th>
                                            <th>Nama Pengujung</th>
                                            <th>Alamat</th>
                                            <th>Berat(Kg)</th>
                                            <th>Harga</th>
                                            <th>Diskon</th>
                                            <th>Total</th>
                                            <th>Pegawai</th>
                                            <th>Di Bayar</th>
                                            
                                         
                                        </tr>
                                        @foreach($data as $s)
                                        <tr class="align-middle">
                                            <th>{{$s->Invoice}}</th>
                                            <th>{{$s->status}}</th>
                                            <th>{{$s->nama}}</th>
                                            <th>{{$s->alamat}}</th>
                                            <th>{{$s->berat}}</th>
                                            <th>{{$s->harga}}</th>
                                            <th>{{$s->diskon}}</th>
                                            <th>{{$s->total}}</th>
                                            <th>{{$s->pegawai}}</th>
                                            <th>{{$s->dibayar}}</th>
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