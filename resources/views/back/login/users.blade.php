@extends('back.include.master')
@section('content')

    <div class="content-body">
        <div class="container-fluid">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kullanıcılar Tablosu</h4>
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>Kullanıcı Adı</th>
                                    <th>Username</th>
                                    <th>Şifre</th>
                                    <th>Oluşturulma Tarihi</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>:)</td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
        </div>
    </div>


@endsection

