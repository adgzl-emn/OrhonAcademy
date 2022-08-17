@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sponsorlar Tablosu</h4>
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>Blog Kapak Fotoğrafı</th>
                                    <th>Başlık</th>
                                    <th>Kategori</th>
                                    <th>Durum</th>
                                    <th>Hit</th>
                                    <th>Oluşturulma Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>
                                            <img src="{{$blog->image}}" width="80">
                                        </td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->getCategory->name}}</td>
                                        <td>
                                            <input class="switch" blog-id="{{$blog->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" @if($blog->status == 1) checked @endif data-toggle="toggle" data-onstyle="success">
                                        </td>
                                        <td>{{$blog->hit}}</td>
                                        <td>{{$blog->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('back.blog.delete',$blog->id)}}" title="Sil" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
                                            <a href="{{route('blogs.update',$blog->id.'/edit')}}" title="Güncelle" class="btn btn-sm btn-success"> <i class="fa fa-eye"></i> </a>
                                    </button>
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
                        id = $(this)[0].getAttribute('blog-id');
                        statu= $(this).prop('checked');
                        $.get("{{route('back.blog.switch')}}", {id:id , statu:statu}, function(data, status) {
                        });
                    })
                })
            </script>
