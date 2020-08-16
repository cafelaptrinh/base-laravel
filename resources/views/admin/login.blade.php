<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <title>Đăng Nhập | Admin Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/pages.css')}}">
</head>

<body themebg-pattern="theme1">

    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form class="md-float-material form-material" method="post" action="{{cproute('login')}}">
                        <div class="text-center">
                            <img src="{{asset('admin/png/logo.png')}}" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Đăng Nhập</h3>
                                    </div>
                                </div>
                                @csrf
                                <div class="form-group form-primary">
                                    <input type="text" name="username" value="" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Tài khoản hoặc Email</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" value="" name="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Mật khẩu</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="remember">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Nhớ mật khẩu</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right">
                                            <a href="auth-reset-password.html" class="text-right f-w-600"> Quên mật khẩu ?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">ĐĂNG NHẬP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        </div>

    </section>



<script type="text/javascript" src="{{asset('admin/js/jquery.min.js')}}"></script>

    <script src="{{asset('admin/js/waves.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('admin/js/common-pages.js')}}"></script>
</body>
</html>
