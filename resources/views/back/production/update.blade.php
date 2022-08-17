@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">

                            <form class="form-valide" action="{{route('prods.update',$prod->id)}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-currency">YouTube Video <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <x-embed url="{{$prod->youtube}}" aspect-ratio="1:0" />
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-currency">YouTube Video Güncellemek için link girin..<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-currency" name="youtube">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-currency">İmdb Link<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-currency" name="link" value="{!! $prod->link !!}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Başlık<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="title" placeholder="Başlığı girin" value="{!! $prod->title !!}">
                                    </div>
                                </div> 



                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-phoneus">Editör<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea name="editor" class="summernote">{!! $prod->content !!}</textarea>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Güncelle</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
