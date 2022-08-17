@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid mt-3">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">

                            <form class="form-valide" action="{{route('back.sponsorlar.post')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-currency">Logo Fotoğrafı<span class="text-danger">   Boyutu 340 x 240 olmalı !</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-currency">Sponsor Adı<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control form-control-user" name="sname" id="sname" placeholder="Sponsor Adı" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-phoneus">Editör<span class="text-danger">*</span>
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



@endsection
