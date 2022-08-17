@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">

                            <form method="post" action="{{route('back.vid.post')}}" enctype="multipart/form-data">                                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Başlık<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="title" placeholder="Başlığı girin">
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
                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Kapak Fotoğrafı <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" id="val-username" name="image">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-phoneus">Editör<span class="text-danger">  (kısa bilgi)</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea name="editor" class="summernote"></textarea>
                                    </div>
                                </div>

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

