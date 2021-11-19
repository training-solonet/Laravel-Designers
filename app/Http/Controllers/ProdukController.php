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
            "produks"=>  Produk::all()
        ]);
    }

    public function show($id)
    {
        return view('detailproduct', [
            "title" => 'Detail',
            "produk" => Produk::find($id)   
        ]);
    }
}
