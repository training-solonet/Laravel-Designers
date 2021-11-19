@extends('layouts.main')
@section('container')
<div class="layout_padding-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="img_box">
                                <figure><img style="width: 200px;" src="{{ asset('storage/'.$produk   ->foto_produk) }}" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 product_detail_side">
                            <div class="abotext_box">
                                <div class="product-heading">
                                    <h2>{{ $produk->nama_produk }}</h2>
                                </div>
                                <div class="product-detail-side">
                                    <span><del>$679.89</del></span><span class="new-price">Rp. {{ $produk->harga_produk }}</span>
                                    <span class="rating">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                     </span>
                                    <span class="review">(5 customer review)</span>
                                </div>
                                <div class="detail-contant">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                        <br><span class="stock">2 in stock</span>
                                    </p>
                                    <form class="cart" method="post" action="shop-cart.html">
                                        <div class="quantity">
                                            <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                                        </div>
                                        <button type="submit" class="bt_main">Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection