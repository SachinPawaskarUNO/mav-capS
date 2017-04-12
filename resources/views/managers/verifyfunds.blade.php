@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">Verify Funds for Add Funds</h1>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                @if (session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <h2 style="color: darkblue">Pending Funds to Verify</h2><br>
                <table class="table table-hover table-responsive" id="lrc1">
                    <thead>
                    <tr>
                        <th>Investor Name</th>
                        <th>Amount Added</th>
                        <th>UID</th>
                        <th>Verify Amount</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($funds as $fund)
                        @foreach($fundtotals as  $fundtotal)
                            @foreach($investors as $investor)
                                @if($fund->fund_total_id == $fundtotal->id && $fundtotal->inv_app_id == $investor->id && $fund->fund_status == null)
                            <tr>
                                <td>{{$investor->inv_first_name}} {{$investor->inv_last_name}}</td>
                                <td>MYR {{$fund->fund_amount}}</td>
                                <td>{{$fund->fund_uid}}</td>
                                <form role="form" method="POST" action="{{ url('add_funds_approve_manager') }}">{{ csrf_field() }}
                                    <td>MYR
                                        <div class="input-group {{ $errors->has('fund_verified_amount') ? ' has-error' : '' }}">
                                            {!! Form::text('fund_verified_amount',null,['class'=>'form-control', 'id'=>'fund_verified_amount'])!!}
                                        </div>
                                        @if ($errors->has('fund_verified_amount'))
                                            <span class="help-block" style="color: darkred"><strong>{{ $errors->first('fund_verified_amount') }}</strong></span>
                                        @endif</td>
                                    <td>
                                        <!--Approve Button-->
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" id="add_funds_approval" data-target="#add_funds_approve">Approve</button>
                                        <!--Model-->
                                        <div class="modal fade" id="add_funds_approve" role="dialog">
                                            <div class="modal-dialog">
                                                <!--Model Content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Confirmation</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to approve?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="add_funds_id" value="{{ $fund->id }}">
                                                        <button type="submit" id="add_funds_approve_accept" class="btn btn-success">Approve</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="add_funds_approve_no">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                                </td>
                                <td>
                                    <!--Reject Button-->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" id="add_funds_rejection" data-target="#add_funds_reject">Reject</button>
                                    <!--Model-->
                                    <div class="modal fade" id="add_funds_reject" role="dialog">
                                        <div class="modal-dialog">
                                            <!--Model Content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to reject?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form role="form" method="POST" action="{{ url('add_funds_reject_manager') }}">{{ csrf_field() }}
                                                        <input type="hidden" name="add_funds_reject_manager" value="{{ $fund->id }}">
                                                        <button type="submit" id="add_funds_manager_reject" class="btn btn-danger">Reject</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="add_funds_manager_reject_no">No</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                </td>
                            </tr>
                        @endif
                        @endforeach
                    @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <h2 style="color: darkblue">Accepted/Rejected Funds</h2><br>
                <table class="table table-hover table-responsive" id="lrc2">
                    <thead>
                    <tr>
                        <th>Investor Name</th>
                        <th>Amount Added</th>
                        <th>UID</th>
                        <th>Amount Deposited</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($funds as $fund)
                        @foreach($fundtotals as  $fundtotal)
                            @foreach($investors as $investor)
                                @if($fund->fund_total_id == $fundtotal->id && $fundtotal->inv_app_id == $investor->id && $fund->fund_status == 'Manager Approved' || $fund->fund_status == 'Manager Rejected')
                            <tr>
                                <td>{{$investor->inv_first_name}} {{$investor->inv_last_name}}</td>
                                <td>MYR {{$fund->fund_amount}}</td>
                                <td>{{$fund->fund_uid}}</td>
                                <td>MYR {{$fund->fund_verified_amount}}</td>
                                <td>{{$fund->fund_status}}</td>
                            </tr>
                        @endif
                        @endforeach
                    @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection