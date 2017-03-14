
@extends('layouts.app')

@section('content')


<div class="col-lg-12" align="center">
    <div class="panel panel-default" align="center">
        <div class="panel-heading" align="center"><h2>Investor Application</h2></div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if (session('status1'))
            <div class="alert alert-success">
                {{ session('status1') }}
            </div>
        @endif
        <div class="panel-body" align="center">
            <a href="{{url('/inv_application/create')}}" class="btn btn-primary">Apply!!</a>

        </div>
        <div class="panel-body" align="center">
            <a href="{{url('/add_funds/create')}}" class="btn btn-primary">Add Funds</a>

        </div>

    </div>

</div>



















@endsection
