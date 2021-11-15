<?php

namespace App\Http\Controllers;

use App\Models\Produk;  
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::with('category')->get();
        // return $category;
        return view('admin.products.index', [
            'produk' => $produk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'nama_produk' => 'required|max:255',
            'harga_produk' => 'required',
            'id_category' => 'required',
            'stok_produk' => 'required',
            'foto_produk' => 'image|file|max:1024',
            'deskripsi' => 'required'
        ]);

        if($request->file('foto_produk')){
            $validateData['foto_produk']= $request->file('foto_produk')->store('produk-foto_produk');
        }
    
        Produk::create($validateData);
     
        return redirect('/admin/products')->with('success', 'New Products has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $product)
    {
        return view('admin.products.show', [
            'produk' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $p
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        Produk::destroy($produk->id);

    return redirect('/admin/products')->with('success', "has been Deleted");
    }   
}
