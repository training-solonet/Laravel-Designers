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
            text-align: center;
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
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td><img src="{{ url('icon/2.png') }}"/>
            <span>
                Harga<br>
                Nama<br>
                awdaw
            </span>
            </td>
            <td>Griffin</td>
            <td><input type="number" name="stok_produk" ></td>
            <td></td>
        </tr>
        
    </table>

</body>
@endsection