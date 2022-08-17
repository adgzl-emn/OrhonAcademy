@extends('fronts.include.master')
@section('content')

        <div class="bg-dark page-header">
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">@lang('menu.iletisim')</h1>

            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Contact Start -->
    <div class="py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-dark px-4 mb-3">İletişim</div>
                <h2 class="mb-5">Merhaba yabancı bizde seni tanıyalımm :)</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">

                    <form method="post" action="{{route('iletisim.post')}}">
                       @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name"  placeholder="İsminiz">
                                    <label for="name">İsminiz</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="baslik" placeholder="Konu Başlığı">
                                    <label for="subject">Konu Başlığı</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Seni dinliyoruz" name="message" style="height: 150px"></textarea>
                                    <label for="message">Mesaj</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
