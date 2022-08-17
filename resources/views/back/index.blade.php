@extends('back.include.master')
@section('content')


        <!--**********************************
            Nav header end
        ***********************************-->


    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Eklenen Kategori</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{!! $kategoriler !!}</h2>
                                <p class="text-white mb-0">Aktifler : {!! $kategorilera !!}</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-4">
                        <div class="card-body">
                            <h3 class="card-title text-white">Eklenen Blog Sayısı</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{!! $bloglar !!}</h2>
                                <p class="text-white mb-0">Aktif Bloglar: {!! $bloglara !!}</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Eklenen Akademi Video</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{!! $videolar !!}</h2>
                                <p class="text-white mb-0">Aktif Videolar: {!! $videolara !!}</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-7">
                        <div class="card-body">
                            <h3 class="card-title text-white">Eklenen Prodüksiyon</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{!! $prod !!}</h2>
                                <p class="text-white mb-0">Aktifler : {!! $proda !!}</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-8">
                        <div class="card-body">
                            <h3 class="card-title text-white">Eklenen sponsorlar</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{!! $sponsorlar !!}</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                        </div>
                    </div>
                </div>
            </div>


            <h3>Kayıtlı Kişiler</h3>

            <div class="row">
                @foreach ($users as $user)
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-{{rand(0,12)}}">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back')}}/images/user/user.jpg" height="40" width="40" alt="" class="rounded-circle" alt="">
                                <h5 class="mt-3 mb-1">{{$user->name}}</h5>
                                <p class="m-0">Admin</p>
                                <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


@endsection
