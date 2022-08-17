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
                                    <th>Durum</th>
                                    <th>Hit</th>
                                    <th>Oluşturulma Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blog as $data)
                                    <tr>
                                        <td>
                                            <img src="{{$data->image}}" width="80">
                                        </td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->status}}</td>
                                        <td>{{$data->hit}}</td>
                                        <td>{{$data->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('back.blog.recover',$data->id)}}" title="Güncelle" class="btn btn-sm btn-success"><i class="fa fa-recycle"></i> </a>
                                            <a href="{{route('back.blog.forcedelete',$data->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </a>
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
