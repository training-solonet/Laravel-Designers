@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Product </h1>      
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/posts" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="nama_produk" class="form-label">Product Name</label>
    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk">
    @error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="harga_produk" class="form-label ">Harga</label>
    <input type="number" class="form-control @error('harga_produk') is-invalid @enderror" id="harga_produk" name="harga_produk">
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
  <div class="mb-3">
  <label for="stok_produk" class="form-label">Stok produk</label>
  <input class="form-control @error('stok_produk') is-invalid @enderror" type="file" id="stok_produk" name="stok_produk">
  @error('stok_produk')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
  <label for="foto_produk" class="form-label">Foto produk</label>
  <input class="form-control @error('foto_produk') is-invalid @enderror" type="file" id="foto_produk" name="foto_produk">
  @error('foto_produk')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
  <div class="mb-3">
    <label for="Deskripsi" class="form-label">Deskripsi</label>
    @error('Deskripsi')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <input id="Deskripsi" type="hidden" name="Deskripsi" value="{{ old('Deskripsi') }}">
    <trix-editor input="Deskripsi"></trix-editor>
  </div>
  <button type="submit" class="btn btn-primary">Create Product</button>
</form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' +  title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e){e.preventDefault();})
</script>
@endsection