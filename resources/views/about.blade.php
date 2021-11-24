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
                                <h2>About</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="aboutimg">
                                <h3>About us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="aboutimg">
                                <figure><img src="images/Avangarda_klu.jpg" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="overlay"></div>
</body>
@endsection