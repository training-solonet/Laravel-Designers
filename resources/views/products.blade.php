@extends('layouts.main')

@section('container')
  <div class="wrapper">

      <!-- end loader --> 
      <div class="sidebar">
         <!-- Sidebar  -->
        
     
     <div id="content">
      
<div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Our Product</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>

<div class="ourproduct">
  <div class="container">
     <div class="row product_style_3" >
      @foreach ($produks as $p )
      <!-- product -->
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="{{ asset('storage/'.$p->foto_produk) }}" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="/products/{{ $p->id }}">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">Rp. {{ number_format($p->harga_produk) }} <span class="old_price">Rp. {{ number_format($p->harga_produk*1.5) }}</span></p>
            <p class="product_descr">{{ $p->nama_produk }}</p>
          </div>
        </div>
      </div>
      <!-- end product -->
      @endforeach
    </div>
  </div>
</div>
   </div>

</div>

@endsection