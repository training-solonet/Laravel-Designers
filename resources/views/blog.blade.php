@extends('layouts.main')

@section('container')

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>

    <div class="wrapper">

        <!-- end loader -->

        <div id="content">
            <div class="contactus">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Blog</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog">
                <div class="container">
                    <div class="row">
                    @foreach ($produk as $pr )
                        
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                            <div class="news-box">
                                <figure><img src="images/blol.jpg" alt="img" /></figure>
                                <h3>{{ $pr->nama_produk }}</h3>
                                <span>{{ $pr->created_at }}</span><span>Comment</span>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, </p>
                            </div>
                        </div>
                    @endforeach
                        
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="overlay"></div>

</body>
@endsection