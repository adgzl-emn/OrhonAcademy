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

                            <form method="post" action="{{route('back.category.post')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategori Adı</label>
                                    <input type="text" class="form-control form-control-user" name="cname" id="cname" placeholder="Kategori Adı" required>
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
                                        <th>Kategori</th>
                                        <th>Durum</th>
                                        <th>Blog sayısı</th>
                                        <th>Oluşturma Tarihi</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->name}}</td>
                                            <td>
                                                <input class="switch" category-id="{{$category->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" @if($category->status == 1) checked @endif data-toggle="toggle" data-onstyle="success">
                                            </td>
                                            <td>{{$category->BlogCount()}}</td>
                                            <td>{{$category->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{route('back.category.delete',$category->id)}}" title="Sil" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
                                                <a href="" title="Güncelle" class="btn btn-sm btn-success"> <i class="fa fa-eye"></i> </a>
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

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
                <script>

                    $(function (){
                        $('.switch').change(function() {
                            id = $(this)[0].getAttribute('category-id');
                            statu= $(this).prop('checked');
                            $.get("{{route('back.category.switch')}}", {id:id , statu:statu}, function(data, status) {
                            });
                        })
                    })
                </script>
