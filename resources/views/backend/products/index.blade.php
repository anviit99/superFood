@extends('backend.layouts.master')
@section('title'){{'Products'}}@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Users</div>
            <div class="card-body">Body
                <div class="table table-responsive table-bordered table-hover">
                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>nationality</th>
                            <th>Age in Yrs</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->price}}</td>
                                <td>{{$user->price_old}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="button btn btn-sucess"></div>
            </div>
        </div>
    </div>
@endsection