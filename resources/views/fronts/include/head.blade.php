<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BizConsult - Consulting HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('front3')}}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front3')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('front3')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front3')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('front3')}}/css/style.css" rel="stylesheet">
</head>

<body>
<div class="bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-dark" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand p-0">
                <h1 class="m-0">Orhon Academy</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('home')}}" class="nav-item nav-link">@lang('menu.anasayfa')</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">@lang('menu.akademi')</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('blog')}}" class="dropdown-item">@lang('menu.blog')</a>
                            <a href="{{route('publising')}}" class="dropdown-item">@lang('menu.videolar')</a>
                        </div>
                    </div>
                    <a href="{{route('production')}}" class="nav-item nav-link">@lang('menu.prodüksiyon')</a>
                    <a href="{{route('sponsorlar')}}" class="nav-item nav-link">@lang('menu.tasarım')</a>
                    <a href="{{route('yayıncılık')}}" class="nav-item nav-link">@lang('menu.yayıncılık')</a>
                    <a href="{{route('yatırım')}}" class="nav-item nav-link">@lang('menu.yatırım')</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">@lang('menu.hakkımızda')</a>
                    <a href="{{route('iletisim')}}" class="nav-item nav-link">@lang('menu.iletisim')</a>
                </div>
                <div class="nav-item dropdown">
                    <select href="" class="btn btn-light text-dark ms-lg-5" id="dil" name="dil">
                    <div class="dropdown-menu m-0">
                        <option value="" selected>Dil</option>
                        <option value="tr">Tr</option>
                        <option value="en">En</option>
                    </div>
                    </select>
                </div>

            </div>
        </nav>
        @toastr_css

    <!-- Navbar & Hero End -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
        <script>
            $(function() {
                $('#dil').change(function() {
                    dil=this.value;
                    console.log(dil);
                    $.get("{{route('lang')}}", {dil:dil}, function(data, status) {
                        window.location.reload(1);
                    });

                })
            })

        </script>
