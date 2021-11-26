@extends('layouts.main')
@section('container')

<head>
    <style>
        table {
            color: black;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        input{
          border: 0.5px solid;
        
          text-align: center;
          width: 7%;
          border-radius: 5px;
        }

    </style>
</head>

<body>
    <div class="contactus">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h2>Cart</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="container mt-5 mb-5">
        <tr>
            <th>Items</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Subtotal</th>
        </tr>
        
            
      
          
    @foreach ($keranjang as $d )
        
        <tr>
            <td>
            <img style="width: 300px;" src="{{ asset('storage/'. $d->produk->foto_produk) }}" />
            <li><strong>{{ $d->produk->nama_produk }}</strong></li>
            {{ $d->produk->category->nama_category }}
            
            </td>
            <td>Rp. {{ number_format($d->produk->harga_produk) }}</td>
            <td>{{ $d->jumlah_produk }}</td>
            <td>Rp. {{ number_format($d->jumlah_produk*$d->produk->harga_produk) }}</td>
        </tr>
    @endforeach 
       
       
        
    </table>

</body>
@endsection