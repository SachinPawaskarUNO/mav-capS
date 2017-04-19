@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h2 class="text-center">Profile Management</h2>
            <hr>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status1') }}
            </div>
        @endif
    </div>
    <div class="col-md-10 col-md-offset-1">
        <h2>Profile Information</h2>
        <table class="table table-striped table-bordered table hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>First Name</td>
                <td>{{$user->first_name}}</td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>{{$user->middle_name}}</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>{{$user->last_name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>*********</td>
            </tr>
            </tbody>
        </table>
        <div align="right">
            <a href="{{url('/editadminprofile')}}" class="btn btn-info" id="adminprofile_edit">Edit</a>
            <a href="{{ url()->previous() }}" class="btn btn-info" id="adminprofile_back">Back</a>
        </div>
    </div>
@endsection