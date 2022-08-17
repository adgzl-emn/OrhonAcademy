<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{asset('front')}}/assets/css/fontawesome.css">
<link rel="stylesheet" href="{{asset('front')}}/assets/css/templatemo-grad-school.css">
<link rel="stylesheet" href="{{asset('front')}}/assets/css/owl.css">
<link rel="stylesheet" href="{{asset('front')}}/assets/css/lightbox.css">
@extends('fronts.include.master')

@section('content')


        <!-- ***** Main Banner Area Start ***** -->
        <section class="section main-banner" id="top" data-section="section1">
            <video autoplay muted loop id="bg-video">
                <source src="{{asset('front')}}/assets/images/course-video.mp4" type="video/mp4" />
            </video>

            <div class="video-overlay header-text">
                <div class="caption">
                    <h6>@lang("anasayfa.hosgeldin")</h6>
                    <h2><em>@lang("anasayfa.orhon")</em> @lang("anasayfa.akademi")</h2>
                    <div class="main-button">
                        <div class="scroll-to-section"><a href="{{route('publising')}}">İçeri Girr</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Main Banner Area End ***** -->

    </div>




    <!-- Newsletter Start
    <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Ready to get started</h3>
                    <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="max-height: 250px;" src="{{asset('front3')}}/img/newsletter.png">
                </div>
            </div>
        </div>
    </div>
     Newsletter End -->



    <!-- Features Start -->
    <div class="py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-dark px-4 mb-3">Features</div>
                    <h2 class="mb-4">Neler Yapıyoruz? Neler sunuyoruz </h2>
                    <p>Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                    <p>Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 mt-2" href="{{route('about')}}">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-dark rounded-circle me-3">
                                    <i class="fa fa-cubes text-white"></i>
                                </div>
                                <h6 class="mb-0">Best In Industry</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-dark rounded-circle me-3">
                                    <i class="fa fa-percent text-white"></i>
                                </div>
                                <h6 class="mb-0">99% Success Rate</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-dark rounded-circle me-3">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <h6 class="mb-0">Award Winning</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-dark rounded-circle me-3">
                                    <i class="fa fa-smile-beam text-white"></i>
                                </div>
                                <h6 class="mb-0">100% Happy Client</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-dark rounded-circle me-3">
                                    <i class="fa fa-user-tie text-white"></i>
                                </div>
                                <h6 class="mb-0">Professional Advisors</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-dark rounded-circle me-3">
                                    <i class="fa fa-headset text-white"></i>
                                </div>
                                <h6 class="mb-0">24/7 Customer Support</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Client Start -->
    <div class="bg-dark my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                <a href="#"><img class="img-fluid" src="{{asset('front3')}}/img/logo-1.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('front3')}}/img/logo-2.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('front3')}}/img/logo-3.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('front3')}}/img/logo-4.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('front3')}}/img/logo-5.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('front3')}}/img/logo-6.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('front3')}}/img/logo-7.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('front3')}}/img/logo-8.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Client End -->


    <!-- Testimonial Start -->
    <div class="py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="mb-5">Markalarımız</h2>
            </div>

            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid w-100" src="{{asset('uploads')}}/a.png" style="height: 150px;">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <h4 class="mb-1">aliveli gurme pide</h4>
                    </div>
                </div>
                @foreach($sponsors as $sponsor)
                <div class="testimonial-item rounded p-4">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid w-100" src="{{$sponsor->image}}" style="height: 150px;">
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <h4 class="mb-1">{{$sponsor->sname}}</h4>
                    </div>

                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Testimonial End -->




@endsection


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('front')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('front')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('front')}}/assets/js/isotope.min.js"></script>
<script src="{{asset('front')}}/assets/js/owl-carousel.js"></script>
<script src="{{asset('front')}}/assets/js/lightbox.js"></script>
<script src="{{asset('front')}}/assets/js/tabs.js"></script>
<script src="{{asset('front')}}/assets/js/video.js"></script>
<script src="{{asset('front')}}/assets/js/slick-slider.js"></script>
<script src="{{asset('front')}}/assets/js/custom.js"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function () {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
        if($(e.target).hasClass('external')) {
            return;
        }
        e.preventDefault();
        $('#menu').removeClass('active');
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
        checkSection();
    });
</script>

