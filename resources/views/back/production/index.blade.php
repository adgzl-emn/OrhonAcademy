@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Prodüksiyon Tablosu</h4>
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>Prodüksiyon Videosu</th>
                                    <th>Başlık</th>
                                    <th>IMDB</th>
                                    <th>Durum</th>
                                    <th>Oluşturulma Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($prod as $prod)
                                    <tr>
                                        <td><x-embed url="{{$prod->youtube}}" aspect-ratio="1:0" /></td>
                                        <td>{{$prod->title}}</td>
                                        <td>{{$prod->imdb}}</td>
                                        <td>
                                            <input class="switch" prod-id="{{$prod->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" @if($prod->status == 1) checked @endif data-toggle="toggle" data-onstyle="success">
                                        </td>
                                        <td>{{$prod->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('back.prod.delete',$prod->id)}}" title="Sil" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
                                            <a href="{{route('prods.update',$prod->id.'/edit')}}" title="Güncelle" class="btn btn-sm btn-success"> <i class="fa fa-eye"></i> </a>
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
                        id = $(this)[0].getAttribute('prod-id');
                        statu= $(this).prop('checked');
                        $.get("{{route('back.prod.switch')}}", {id:id , statu:statu}, function(data, status) {
                        });
                    })
                })
            </script>
