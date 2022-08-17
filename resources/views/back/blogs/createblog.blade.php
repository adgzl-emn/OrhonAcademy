@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">

                            <form class="form-valide" action="{{route('back.blog.post')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Başlık<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="title" placeholder="Başlığı girin">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Kapak Fotoğrafı <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" id="val-username" name="image" placeholder="Enter a username..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Kategori Seçin<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="val-skill" name="category">
                                            <option value="">Seçim Yapın</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-currency">YouTube Link<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-currency" name="youtube">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-phoneus">Editör<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea name="editor" class="summernote"></textarea>
                                    </div>
                                </div>

                                <!--
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-digits">Digits <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="5">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-number">Number <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-number" name="val-number" placeholder="5.0">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-range">Range [1, 5] <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label"><a href="#">Terms &amp; Conditions</a>  <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-8">
                                        <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                            <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1"> <span class="css-control-indicator"></span> I agree to the terms</label>
                                    </div>
                                </div>
                            -->
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
