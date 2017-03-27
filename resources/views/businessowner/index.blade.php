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
            @if (Entrust::hasRole('businessowner'))
            <div class="panel-body" align="center">
                <a href="{{url('/loan_application/create')}}" class="btn btn-primary">Apply Loan</a>
            </div>
            <div class="panel-body" align="center">
                <a href="{{url('bo_myloans')}}" class="btn btn-primary">My Loans</a>
            </div>
            @else
            <div class="panel-body" align="center">
                <a href="{{url('/bo_application/create')}}" class="btn btn-primary">Apply!!</a>
            </div>
            @endif
        </div>
    </div>
@endsection
