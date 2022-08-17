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
                                    <th>Video</th>
                                    <th>Başlık</th>
                                    <th>Durum</th>
                                    <th>Hit</th>
                                    <th>Oluşturulma Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vid as $vid)
                                    <tr>
                                        <td>
                                            <x-embed url="{{$vid->youtube}}" aspect-ratio="1:0" />
                                        </td>
                                        <td>{{$vid->title}}</td>
                                        <td>
                                            <input class="switch" vid-id="{{$vid->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" @if($vid->status == 1) checked @endif data-toggle="toggle" data-onstyle="success">
                                        </td>
                                        <td>{{$vid->hit}}</td>
                                        <td>{{$vid->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('back.vid.delete',$vid->id)}}" title="Sil" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
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
                        id = $(this)[0].getAttribute('vid-id');
                        statu= $(this).prop('checked');
                        $.get("{{route('back.vid.switch')}}", {id:id , statu:statu}, function(data, status) {
                        });
                    })
                })
            </script>
