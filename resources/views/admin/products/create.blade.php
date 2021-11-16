@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="admin/products"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="/admin/products" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="mb-3">
    <label for="nama_produk" class="form-label">Nama Produk</label>
    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk">
    @error('nama_produk')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>

    <div class="mb-3">
        <label for="harga_produk" class="form-label ">Harga Produk</label>
        <input type="text" class="form-control @error('harga_produk') is-invalid @enderror" id="harga_produk" name="harga_produk">
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
            @if(old('id_category')== $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->nama_category }}</option>  
            @else
            <option value="{{ $category->id }}">{{ $category->nama_category }}</option> 
            @endif 
          @endforeach
          
          </select>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok :</strong>
                <input type="number" name="stok_produk" class="form-control" placeholder="stok_produk">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto :</strong>
                <input type="file" name="foto_produk" class="form-control" placeholder="Image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="deskripsi"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection