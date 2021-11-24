<!DOCTYPE html>
<html lang="en">

<head>
    <title>Serenade | {{ $title }}</title>

    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ url('images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ url('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="main-layout">


    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container- ">

                <div class="row">
                    <div class="col-lg-3 logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a class="navbar-brand" href="/" style="color: #01312e;"><img
                                            style="width: 100px; margin-left: 30px; margin-top: -50px; margin-bottom: -50px;"
                                            src="{{ url('images/serenade1.png') }}">SERENADE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="right_header_info">
                            <ul>
                                <li>
                                    <div class="dropdown">
                                        <a href="{{ route('login') }}"><img style="margin-right: 15px;"
                                                    src="{{ url('icon/1.png') }}" /></a>
                                        <div class="dropdown-content">
                                            @if (Route::has('login'))
                                            @auth
                                            <a href="{{ url('/home') }}" >Home</a>
                                            @else
                                            <a href="{{ route('login') }}"style="color: black;">Login</a>
                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}" style="color: black;">Register</a>
                                            @endif
                                            @endauth
                                            @endif
                                        </div>
                                    </div>
                                </li>
                                <li class="tytyu">
                                    <a href="#"><img style="margin-right: 15px;" src="{{ url('icon/2.png') }}"
                                            alt="#" /></a>
                                </li>
                                <li>
                                    @include('shopCart')
                                </li>

                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="{{ url('images/menu_icon.png') }}" alt="#" />
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end header inner -->
    </header>
    @include('partials.navbar')

    @yield('container')

    @include('partials.footer')

    <!-- Javascript files-->
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ url('js/custom.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = {
                {
                    url('images/maps-and-flags.png')
                }
            };
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->
</body>

</html>
x