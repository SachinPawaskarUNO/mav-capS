
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
        @if (Entrust::hasRole('investor'))
        <div class="panel-body" align="center">
            <a href="{{url('/add_funds/create')}}" class="btn btn-primary" id="inv_addfunds_button">Add Funds</a>
        </div>
        <div class="panel-body" align="center">
            <a href="{{url('/browse_loans')}}" class="btn btn-primary" id="inv_browseloans_button">Browse Loans</a>
        </div>
        @else
        <div class="panel-body" align="center">
            <a href="{{url('/inv_application/create')}}" class="btn btn-primary" id="inv_application_button">Apply!!</a>
        </div>

        @endif
    </div>
</div>



















@endsection
