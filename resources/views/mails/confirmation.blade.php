
@extends('layouts.app')
@section('content')
    <div class = "container" >

        <h1>you are registered as {{$role_request}}</h1>
        <h2>{{$token}}</h2>
        <h3><a href="{{route('confirmation',$token)}}"></a></h3>

        <br>{{ URL::to('confirmation' ,$token) }}</br>

    </div>
    @endsection
