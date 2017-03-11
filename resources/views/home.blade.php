@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">Manager</div>

                <div class="panel-body">
                  <div class="row">
                &nbsp; &nbsp;    <a href="{{url('bo_review')}}"class="btn btn-primary">Review BusinessOwner Application</a>
<br><br><br><br>
              &nbsp; &nbsp;    <a href="{{url('ia_review')}}"class="btn btn-primary">Review Investor Application</a>
                  </div>
                </div>
            </div>

    </div>
</div>
@endsection
