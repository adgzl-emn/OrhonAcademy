<link rel="stylesheet" href="{{asset('front')}}/assets/css/fontawesome.css">
<link rel="stylesheet" href="{{asset('front')}}/assets/css/templatemo-grad-school.css">
<link rel="stylesheet" href="{{asset('front')}}/assets/css/owl.css">
<link rel="stylesheet" href="{{asset('front')}}/assets/css/lightbox.css">

@extends('fronts.include.master')
@section('content')

    </div>
    <!-- Navbar & Hero End -->

    <section class="section coming-soon" data-section="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-8">
                    <div class="continer centerIt">
                        <div>
                            <h4> Yayıncılık için <em> Coming-soon</em></h4>
                            <div class="counter">

                                <div class="days">
                                    <div class="value">00</div>
                                    <span>Days</span>
                                </div>

                                <div class="hours">
                                    <div class="value">00</div>
                                    <span>Hours</span>
                                </div>

                                <div class="minutes">
                                    <div class="value">00</div>
                                    <span>Minutes</span>
                                </div>

                                <div class="seconds">
                                    <div class="value">00</div>
                                    <span>Seconds</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



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
