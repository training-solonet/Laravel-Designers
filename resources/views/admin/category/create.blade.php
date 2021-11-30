@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Category</h2>
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
   
<form action="/admin/category" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="mb-3">
    <label for="nama_category" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control @error('nama_category') is-invalid @enderror" id="nama_category" name="nama_category">
    @error('nama_category')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>

    <div class="mb-3">
        <label for="kode_category" class="form-label ">Kode Kategori</label>
        <input type="text" class="form-control @error('kode_category') is-invalid @enderror" id="kode_category" name="kode_category">
        @error('kode_category')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto :</strong>
                <input type="file" name="foto_produk" class="form-control" placeholder="Image">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection