@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid mt-3">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sponsorlar Tablosu</h4>
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>İsim</th>
                                    <th>Mail</th>
                                    <th>Başlık</th>
                                    <th>Mesaj</th>
                                    <th>Gönderim Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                @foreach($iletisim as $data)
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->baslik}}</td>
                                        <td>{{$data->mail}}</td>
                                        <td>{{$data->message}}</td>
                                        <td>{{$data->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('back.iletisim.delete',$data->id)}}" title="Sil" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
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
