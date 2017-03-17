@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row">
            <h2 class="text-center">Review Business Owner Applications</h2>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                @if (session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <h3 style="color: darkblue">Pending Applications</h3>
                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($boapps as $boapp)
                        @if($boapp->bo_app_status == '')
                    <tr>
                        <th scope="row">{{$boapp->bo_first_name}} {{$boapp->bo_last_name}}</th>
                        <td><a href="{{url('bo_application',$boapp->id)}}" class="btn btn-info btn-sm">View Details</a>
                            <button type="button" class="btn btn-primary btn-sm">Download</button></td>
                        <td> {!!Form::model($boapp,array('route'=>['bo_application.update',$boapp->id],'method'=>'PATCH'))!!}
                            {!! Form::submit('Approve', ['class' => 'btn btn-success btn-sm','id' =>'accept'])!!}
                            {!!Form::close() !!}</td><td>
                            {!!Form::model($boapp,array('route'=>['newsletter.update',$boapp->id],'method'=>'PATCH'))!!}
                            {!! Form::submit('Reject', ['class' => 'btn btn-danger btn-sm','id' =>'reject'])!!}
                            {!!Form::close() !!}</td>
                    </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <h3 style="color: darkblue">Accepted/Rejected Applications</h3>
                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($boapps as $boapp)
                        @if($boapp->bo_app_status != '')
                            <tr>
                                <th scope="row">{{$boapp->bo_first_name}} {{$boapp->bo_last_name}}</th>
                                <td><a href="{{url('bo_application',$boapp->id)}}" class="btn btn-info btn-sm">View Details</a>
                                    <button type="button" class="btn btn-primary btn-sm">Download</button></td>
                                <td>{{$boapp->bo_app_status == '' ? 'Pending' : $boapp->bo_app_status}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection