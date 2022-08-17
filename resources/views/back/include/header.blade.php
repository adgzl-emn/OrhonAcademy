<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{asset('back')}}/image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{asset('back')}}/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('back')}}/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{asset('back')}}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <link href="{{asset('back')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('back')}}/plugins/summernote/dist/summernote.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    @toastr_css

</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="{{route('back.home')}}">
                <b class="logo-abbr">  <font color="white">Orhon</font></b>
                <span class="logo-compact">abc</span>
                <span class="brand-title">
                  <font color="white">Orhon Academy</font>
                    </span>
            </a>
        </div>
    </div>

