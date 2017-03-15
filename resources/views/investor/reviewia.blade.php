
@extends('layouts.app')

@section('content')

    <div class="container-heading" align="center">
        <h1><b><u>Review Investor Applications</u></b></h1>
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



                                @foreach ($investorapplication as $investorapplications)

                                    @if($investorapplications->STATUS == '')

                                    <tr>
                                        <td>{{$investorapplications->id}}</td>
                                        <td>{{$investorapplications->inv_first_name}} {{$investorapplications->inv_last_name}}</td>
                                        <td><a href="{{url('inv_application',$investorapplications->id)}}" class="btn btn-primary">details</a> <button type="button" class="btn btn-primary btn-sm">Download</button></td>

                                        <td>

                                        <td>
                                            {!!Form::model($investorapplication,array('route'=>['inv_application.update',$investorapplications->id],'method'=>'PATCH'))!!}

                                            {!! Form::submit('Approve', ['class' => 'btn btn-primary','id' =>'accept'])!!}
                                            {!!Form::close() !!}</td>
                                        <td>
                                            {!!Form::model($investorapplication,array('route'=>['loan_application.update',$investorapplications->id],'method'=>'PATCH'))!!}
                                            {!! Form::submit('Reject', ['class' => 'btn btn-primary','id' =>'reject'])!!}
                                            {!!Form::close() !!}</td>
                                        <td>
                                            {{$investorapplications->STATUS == '' ? 'Pending' : $investorapplications->STATUS}}</td>

                                        </td>
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
                    <div class="panel-heading"><h3>Approved/Rejected Applications</h3></div>

                    <div class="panel-body">
                        <div class="container-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Investor Name</th>
                                    <th>Details</th>
                                    <th>Application Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($investorapplication as $investorapplications)
                                    <tr>              <td>{{$investorapplications->inv_first_name}} {{$investorapplications->inv_last_name}}</td>
                                        <td><a href="{{url('inv_application',$investorapplications->id)}}" class="btn btn-primary">details</a> <button type="button" class="btn btn-primary btn-sm">Download</button></td>
                                        
                                        <td>{{$investorapplications->STATUS == '' ? 'Pending' : $investorapplications->STATUS}}</td>
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

