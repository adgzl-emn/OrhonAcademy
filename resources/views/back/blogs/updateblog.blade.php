@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">

                            <form class="form-valide" action="{{route('blogs.update',$blogs->id)}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-currency">Geçerli Kapak Fotoğrafı <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <img src="{{asset($blogs->image)}}" class="img-thumbnail rounded" width="260" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Güncellemek İstediğiniz Kapak Fotoğrafı <span class="text-danger">*</span>
                                    </label>
                                    <div class="row">
                                            <div class="col-md-12">
                                                <input type="file" class="form-control" id="val-username" name="image">
                                            </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-currency">YouTube Video <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <x-embed url="{{$blogs->youtube}}" aspect-ratio="1:0" />
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-currency">YouTube Video Güncellemek için link girin..
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-currency" name="youtube">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Başlık<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="title" placeholder="Başlığı girin" value="{!! $blogs->title !!}">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Kategori Seçin<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="val-skill" name="val-skill">
                                            <option value="">Seçiniz</option>
                                            @foreach($categories as $categorie)
                                                <option @if($blogs->category_id==$categorie->id) selected @endif value="{{$categorie->id}}">{{$categorie->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-phoneus">Editör<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea name="editor" class="summernote">{{$blogs->content}}</textarea>
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
