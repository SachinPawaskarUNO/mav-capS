
@extends('layouts.app')

@section('content')

    <div class="col-lg-12" align="center">
        <div class="panel panel-default" align="center">
            <div class="panel-heading" align="center"><h2>Business Owner Application</h2></div>
            <div class="panel-body" align="center">
                <a href="{{url('/bo_application/create')}}" class="btn btn-primary">Apply!!</a>

            </div>

        </div>
    </div>



@endsection
