<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Invoice</title>
    <link href="{{secure_asset('css/cetak.css')}}" rel="stylesheet">
    <link href="{{secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
   
    <table class="body-wrap">
        <tbody><tr>
            <td></td>
            <td class="container" width="600">
                <div class="content">
                    <table class="main" width="100%" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td class="content-wrap aligncenter">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td class="content-block">
                                        <img src="{{secure_asset('assets/img/img_properties/laundry.png')}}" class=" logo mt-3 mb-4" alt="gambar">
                                        <h2>Thanks for Order in Our Service</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="content-block">
                                            <table class="invoice">
                                                <tbody><tr>
                                                    <td>Nama: {{$data->nama}}<br>{{$data->Invoice}} <br> Alamat: {{$data->alamat}} <br> Nomer Hp: {{$data->nomerHp}} <br> Pegawai Bertugas: {{$data->pegawai}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                            <tbody><tr>
                                                                <td>Keterang/Berat</td>
                                                                @if($data->berat == 0)
                                                                <td class="alignright">Cuci Kiloan</td>
                                                                @else
                                                                <td class="alignright">{{$data->berat}} Kg</td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                <td>Harga</td>
                                                                <td class="alignright">Rp.{{$harga}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diskon</td>
                                                                <td class="alignright">{{$data->diskon}}%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ongkos Kirim</td>
                                                                <td class="alignright">Rp.{{$ongkos}}</td>
                                                            </tr>
                                                            
                                                            <tr class="total">
                                                                <td class="alignright" width="80%">Total</td>
                                                                <td class="alignright">{{$total}}</td>
                                                            </tr>
                                                            <br>
                                                            <br>
                                                            <tr>
                                                                <td>Status Dibayar</td>
                                                                <td class="alignright">{{$data->dibayar}} dibayar</td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                    
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                    
            </td>
            <td></td>
        </tr>
    </tbody></table>

<script>
    window.print();
</script>
</body>
</html>