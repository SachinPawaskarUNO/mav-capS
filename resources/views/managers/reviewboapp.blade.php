@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row">
            <h2 class="text-center">Review Business Owner Applications</h2>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                @if (session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <h3 style="color: darkblue">Pending Applications</h3>
                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($boapps as $boapp)
                        @if($boapp->bo_app_status == '')
                    <tr>
                        <th scope="row">{{$boapp->bo_first_name}} {{$boapp->bo_last_name}}</th>
                        <td><a href="{{url('bo_application',$boapp->id)}}" class="btn btn-info btn-sm">View Details</a>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#bo_download">Download</button>
                            <div class="modal fade" id="bo_download" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Download Documents</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Please click on the below links to download a specific document.</p>
                                            <a href="{{url('add_funds','bo_upload_IC')}}">Self Identification</a><br>
                                            <a href="{{url('add_funds','bo_business_license')}}">Business License</a><br>
                                            <a href="{{url('add_funds','bo_entity_type')}}">Business Entity Type</a><br>
                                            <a href="{{url('add_funds','bo_CTOS')}}">CTOS Documents</a><br>
                                            <a href="{{url('add_funds','bo_audited_statements')}}">Audited Financial Statements</a><br>
                                            <a href="{{url('add_funds','bo_operating_statements')}}">Operating Bank Statements</a><br>
                                            <a href="{{url('add_funds','bo_tax_returns')}}">Tax Return Forms</a>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal" id="bo_download_ok_confirm">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </td>
                        <td>{!!Form::model($boapp,array('route'=>['bo_application.update',$boapp->id],'method'=>'PATCH'))!!}
                            {!! Form::submit('Approve', ['class' => 'btn btn-success btn-sm','id' =>'accept'])!!}
                            {!!Form::close() !!}</td><td>
                            <form role="form" method="POST" action="{{ url('bo_app_reject') }}">{{ csrf_field() }}
                                <input type="hidden" name="bo_app_id" value="{{ $boapp->id }}">
                                <button type="submit" id="reject" class="btn btn-danger btn-sm">Reject</button></form></td>
                    </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <h3 style="color: darkblue">Accepted/Rejected Applications</h3>
                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($boapps as $boapp)
                        @if($boapp->bo_app_status != '')
                            <tr>
                                <th scope="row">{{$boapp->bo_first_name}} {{$boapp->bo_last_name}}</th>
                                <td><a href="{{url('bo_application',$boapp->id)}}" class="btn btn-info btn-sm">View Details</a>
                                    <button type="button" class="btn btn-primary btn-sm">Download</button></td>
                                <td>{{$boapp->bo_app_status == '' ? 'Pending' : $boapp->bo_app_status}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection