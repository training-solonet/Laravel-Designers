<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        return view('products', [
            "title" => 'Products',
            "produk"=>  Produk::all()
        ]);
    }

    public function show(Produk $produk)
    {
        return view('productDetail', [
            "title" => 'Detail',
            "produk" => $produk
        ]);
    }
}
