<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Produk::where('id', $id)->first();

        return view('cart', [
            "title" => "Shopping Cart",
            "produk" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {        

        $cek = Keranjang::where('id_produk', $request->id_produk)
                        ->where('id_user', 0)
                        ->first();

        if($cek){

            //fungsi update
            Keranjang::where('id_produk', $request->id_produk)
                        ->where('id_user', 0)
                        ->update([
                                'jumlah_produk'     => $cek->jumlah_produk + $request->jumlah_produk
                            ]);

        }else{

            Keranjang::create([
                'jumlah_produk'     => $request->jumlah_produk,
                'id_user'           => 0,
                'id_produk'         => $request->id_produk
            ]);
        }


        return redirect('cart')->with('success', 'Product is add to Cart Succesfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show(Keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit(Keranjang $keranjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keranjang $keranjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keranjang $keranjang)
    {
        //
    }
}
