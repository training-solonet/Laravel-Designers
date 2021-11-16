@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit {{ $produk->nama_produk }} </h1>      
</div>

<div class="col-lg-8">

<form method="POST" action="/admin/products/{{ $produk->id }}">
@csrf
@method('PUT')

<div class="mb-3">
    <label for="nama_produk" class="form-label">Nama Produk</label>
    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" required autofocus value="{{ $produk->nama_produk }}">
    @error('nama_produk')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="harga_produk" class="form-label @error('harga_produk') is-invalid @enderror">Harga Produk</label>
    <input type="number" class="form-control" id="harga_produk" name="harga_produk" required value="{{ old('harga_produk', $produk->harga_produk) }}">
    @error('harga_produk')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select" name="id_category" id="category">
    @foreach ( $categories as $category )
      @if(old('id_category', $produk->id_category)== $category->id)
      <option value="{{ $category->id }}" selected>{{ $category->nama_category }}</option>  
      @else
      <option value="{{ $category->id }}">{{ $category->nama_category }}</option> 
      @endif 
    @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="stok_produk" class="form-label @error('stok_produk') is-invalid @enderror">Stok Produk</label>
    <input type="number" class="form-control" id="stok_produk" name="stok_produk" required value="{{ old('stok_produk', $produk->stok_produk) }}">
    @error('stok_produk')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="deskripsi" class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi Produk</label>
    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required value="{{ old('deskripsi', $produk->deskripsi) }}">
    @error('deskripsi')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Update Product</button>
</form>
</div>
  
@endsection