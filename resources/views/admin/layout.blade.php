<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <title>Admindek | Admin Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset("admin/css/waves.min.css")}}" type="text/css" media="all">

    {{-- icon --}}
    <link rel="stylesheet" type="text/css" href="{{asset('icon/css/feather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('icon/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('icon/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('icon/css/font-awesome-n.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/widget.css')}}">

    {{-- script --}}
    
    <script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/popper/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('admin/js/waves.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript" src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>

    <script src="{{asset('admin/js/pcoded.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/vertical-layout.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('admin/js/script.min.js')}}"></script>
    <script src="{{asset('admin/js/rocket-loader.min.js')}}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script>
    <script defer type="text/javascript" src="{{asset('admin/js/admin.js')}}"></script>
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('admin.header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('admin.sidebar')

                    <div class="pcoded-content">

                        @yield('breadcrumb')

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        @yield('content')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="styleSelectorpp">
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
</html>
