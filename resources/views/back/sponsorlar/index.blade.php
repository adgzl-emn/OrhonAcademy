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
                                        <th>Sponsor Fotoğraf</th>
                                        <th>Sponsor İsmi</th>
                                        <th>içerik</th>
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
                                            <td>{!! $sponsor->content !!}</td>
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
