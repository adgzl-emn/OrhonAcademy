
@extends('fronts.include.master')

@section('content')

    <!-- Navbar & Hero Start -->

    <div class="bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">@lang('menu.akademikv')</h1>
            <nav aria-label="breadcrumb">
                <br>
                <ol class="breadcrumb justify-content-center">

                    <li class="breadcrumb-item"><a class="text-white" href="#"></a></li>

            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->



    <!-- Service Start -->
    <div class="py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                <h2 class="mb-5">We Provide Solutions On Your Business</h2>
            </div>
            <div class="row g-4">
                @foreach($publising as $data)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">

                                <div class="p-lg-4 m-lg-2">
                                    <x-embed url="{{$data->youtube}}" aspect-ratio="1:0"/>
                                </div>

                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">{{$data->title}}</h5>
                                <span>{!! $data->content !!}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->






@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<script>

    $(function (){
        // Portfolio isotope and filter
        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });
        $('#portfolio-flters li').on('click', function () {
            $("#portfolio-flters li").removeClass('active');
            $(this).addClass('active');

            portfolioIsotope.isotope({filter: $(this).data('filter')});
        });
    })
</script>
