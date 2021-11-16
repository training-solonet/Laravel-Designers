@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Table Product </h1>      
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive">
    <a href="/admin/products/create" class="btn btn-primary mb-3">Create New Products</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Product Name</th>
              <th scope="col">Category</th>
              <th scope="col">Price</th>
              <th scope="col">Stok</th>
              <th scope="col">Image</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($produk as $p )
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $p->nama_produk }}</td>
              <td>{{ $p->category->nama_category }}</td>
              <td>{{ $p->harga_produk }}</td>
              <td>{{ $p->stok_produk }}</td>
              <td> <img style="width: 30px"src="{{ asset('storage/'.$p->foto_produk) }}" class="img-fluid mt-3 mb-3"></td>
              <td>{{ $p->deskripsi }}</td>
              <td>
               <a href="/admin/products/{{ $p->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="{{ url('admin/products', $p->id) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="badge bg-danger border-0" onclick="return confirm('yakin ingin hapus?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
          </tr>
          @endforeach
          </tbody>
</div>

@endsection