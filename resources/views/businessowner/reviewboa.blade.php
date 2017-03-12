
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

                <div class="panel-body">
                  <div class="container-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Business Owner Name</th>
        <th>Details</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

@foreach ($businessownerapplication as $businessownerapplications)


    <tr>
        <td>{{$businessownerapplications->id}}</td>
        <td>{{$businessownerapplications->bo_first_name}} {{$businessownerapplications->bo_last_name}}</td>
        <td><a href="{{url('bo_application',$businessownerapplications->id)}}" class="btn btn-primary">details</a> <button type="button" class="btn btn-primary btn-sm">Download</button></td>
        <td><button type="button" class="btn btn-info btn-sm">Approve</button>&nbsp;<button type="button" class="btn btn-danger btn-sm">Reject</button></td>
    </tr>

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
                    </tr>
                  </thead>
                  <tbody>
@foreach ($businessownerapplication as $businessownerapplications)
      <tr>              <td>{{$businessownerapplications->bo_first_name}} {{$businessownerapplications->bo_last_name}}</<td>
                      <td></td>
                      <td></td>
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
