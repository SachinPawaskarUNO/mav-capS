
@extends('layouts.app')

@section('content')

<div class="container-heading" align="center">
  <h1><b><u>Review Business Owner Applications</u></b></h1>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Review Pending Applications</h3></div>
                @if (session('status1'))
                    <div class="alert alert-success">
                        Status Updated
                    </div>
                @endif
                <div class="panel-body">
                  <div class="container-responsive">
  <table class="table table-hover">
    <thead>
      <tr>

        <th>Business Owner Name</th>
        <th>Details</th>
        <th>Action</th>
        <th></th>
        <th>Application Status</th>

      </tr>
    </thead>
    <tbody>

@foreach ($businessownerapplication as $businessownerapplications)
@if($businessownerapplications->bo_app_status == '')



    <tr>

        <td>{{$businessownerapplications->bo_first_name}} {{$businessownerapplications->bo_last_name}}</td>
        <td><a href="{{url('bo_application',$businessownerapplications->id)}}" class="btn btn-primary btn-sm">Details</a>
           <button type="button" class="btn btn-primary btn-sm">Download</button></td>
        <td>
          {!!Form::model($businessownerapplication,array('route'=>['bo_application.update',$businessownerapplications->id],'method'=>'PATCH'))!!}

          {!! Form::submit('Approve', ['class' => 'btn btn-primary','id' =>'accept'])!!}
          {!!Form::close() !!}</td>
          <td>
            {!!Form::model($businessownerapplication,array('route'=>['newsletter.update',$businessownerapplications->id],'method'=>'PATCH'))!!}
          {!! Form::submit('Reject', ['class' => 'btn btn-primary','id' =>'reject'])!!}
           {!!Form::close() !!}</td>
           <td>
          {{$businessownerapplications->bo_app_status == '' ? 'Pending' : $businessownerapplications->bo_app_status}}</td>
    </tr>
@endif
  @endforeach

        </tbody>
  </table>

</div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Review Current Applications</h3></div>

            <div class="panel-body">
              <div class="container-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Business Owner Name</th>
                      <th>Details</th>
                      <th>Action</th>
                      <th>Application Status</th>
                    </tr>
                  </thead>
                  <tbody>
@foreach ($businessownerapplication as $businessownerapplications)
      <tr>              <td>{{$businessownerapplications->bo_first_name}} {{$businessownerapplications->bo_last_name}}</<td>
                      <td></td>
                      <td></td>
                      <td>{{$businessownerapplications->bo_app_status == '' ? 'Pending' : $businessownerapplications->bo_app_status}}</td>
</tr>
@endforeach
                      </tbody>
                </table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
