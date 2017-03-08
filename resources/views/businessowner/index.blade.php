@extends('layouts.app')
@section('content')
    <div class="col-lg-12" align="center">
        <div class="panel panel-default" align="center">
            <div class="panel-heading" align="center"><h2>Business Owner Application</h2></div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="panel-body" align="center">
                <a href="{{url('/bo_application/create')}}" class="btn btn-primary">Apply!!</a>
            </div>
            <div class="panel-body" align="center">
                <a href="{{url('/loan_application/create')}}" class="btn btn-primary">Apply Loan</a>
            </div>
        </div>
    </div>
@endsection
