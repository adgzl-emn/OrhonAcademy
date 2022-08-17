
@extends('fronts.include.master')

@section('content')

    <!-- Navbar & Hero Start -->

        <div class="bg-dark page-header">
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">Bloglar</h1>
                <nav aria-label="breadcrumb">
                    <br>
                    <h6 class="text-white animated zoomIn mb-3">Kategoriler:</h6>
                    <ol class="breadcrumb justify-content-center">
                        @foreach($categories as $categorie)
                        <li class="breadcrumb-item"><a class="text-white" href="#">{!! $categorie->name !!}</a></li>
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->



    <!-- Projects Start -->
    <div class="py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span><span></span></p>
                <h1 class="text-center mb-5">Bloglarımız !</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">

                    </ul>
                </div>
            </div>

            <div class="row g-4 portfolio-container">

                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{$blog->image}}" alt="">
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">Kategori : {{$blog->getCategory->name}}</p>
                            <p class="text-primary fw-medium mb-2">Tıklanma : {{$blog->hit}}</p>
                            <h6 class="lh-base mb-0">{{$blog->title}}

                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Projects End -->








@endsection


