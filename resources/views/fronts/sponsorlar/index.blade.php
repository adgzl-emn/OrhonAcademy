@extends('fronts.include.master')
@section('content')

    <!-- Navbar & Hero Start -->

    <div class="bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Sponsorlar ♥</h1>
            <nav aria-label="breadcrumb">
                <br>
                <ol class="breadcrumb justify-content-center">

                    <li class="breadcrumb-item"><a class="text-white" href="#"></a></li>

            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->



    <!-- About Start -->
    <div class="py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                @foreach($sponsorlar as $sponsor)
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.4s">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{$sponsor->image}}">
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-4">{{$sponsor->sname}}</h2>
                    <p class="mb-4">{!! $sponsor->content !!}</p>
                    <div class="row g-6 mb-6">
                        <div class="col-6 d-flex">

                        </div>
                        <div class="col-12 d-flex">

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- About End -->





@endsection
