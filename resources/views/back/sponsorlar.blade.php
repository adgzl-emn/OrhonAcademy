@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid mt-3">


            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kategori Oluştur</h6>
                        </div>
                        <div class="card-body">

                            <form method="post" action="{{route('back.sponsorlar.post')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Fotoğraf Boyutu 340 x 240 olmalı !</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sponsor Adı</label>
                                    <input type="text" class="form-control form-control-user" name="sname" id="sname" placeholder="Sponsor Adı" required>
                                    <small id="emailHelp" class="form-text text-muted">Gireceğiniz Kategorinin Başlığı.</small>
                                </div>


                                <button type="submit" class="btn btn-primary btn-block">Oluştur</button>
                            </form>

                        </div>
                    </div>
                </div>



                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sponsorlar Tablosu</h4>
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Sponsor Fotoğraf</th>
                                        <th>Sponsor İsmi</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sponsorlar as $sponsor)
                                    <tr>
                                        <td>
                                            <img src="{{$sponsor->image}}" width="80">
                                        </td>
                                        <td>{{$sponsor->sname}}</td>
                                       <td>
                                           <a href="{{route('back.sponsor.delete',$sponsor->id)}}" title="Sil" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>



        </div>
    </div>

@endsection
