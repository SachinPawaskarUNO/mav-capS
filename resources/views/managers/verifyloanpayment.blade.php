@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">Verify Funds for Loan Payment</h1>
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
                        <th>Business Owner Name</th>
                        <th>Amount Paid</th>
                        <th>UID</th>
                        <th>Verify Amount</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @foreach($businessowners as  $businessowner)
                            @foreach($loanpayments as $loanpayment)
                                @if($loan->id == $loanpayment->loan_id && $loanpayment->loan_payment_status == null)
                                    <tr>
                                        <td>{{$businessowner->bo_first_name}} {{$businessowner->bo_last_name}}</td>
                                        <td>MYR {{$loanpayment->loan_amount_paid}}</td>
                                        <td>{{$loanpayment->loan_paid_uid}}</td>
                                        <form role="form" method="POST" action="{{ url('loanpayment_approve_manager') }}">{{ csrf_field() }}
                                            <td>MYR
                                                <div class="input-group {{ $errors->has('loanpayment_verified_amount') ? ' has-error' : '' }}">
                                                    {!! Form::text('loanpayment_verified_amount',null,['class'=>'form-control', 'id'=>'loanpayment_verified_amount', 'onchange'=>'decimal(this)'])!!}
                                                </div>
                                                @if ($errors->has('loanpayment_verified_amount'))
                                                    <span class="help-block" style="color: darkred"><strong>{{ $errors->first('loanpayment_verified_amount') }}</strong></span>
                                                @endif</td>
                                            <td>
                                                <!--Approve Button-->
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" id="loanpayment_approval" data-target="#loanpayment_approve{{ $loanpayment->id }}">Approve</button>
                                                <!--Model-->
                                                <div class="modal fade" id="loanpayment_approve{{ $loanpayment->id }}" role="dialog">
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
                                                                <input type="hidden" name="loanpayment_id" value="{{ $loanpayment->id }}">
                                                                <button type="submit" id="loanpayment_accept" class="btn btn-success">Approve</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal" id="loanpayment_approve_no">No</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                        </td>
                                        <td>
                                            <!--Reject Button-->
                                            <button type="button" class="btn btn-danger" data-toggle="modal" id="loanpayment_rejection" data-target="#loanpayment_reject{{ $loanpayment->id }}">Reject</button>
                                            <!--Model-->
                                            <div class="modal fade" id="loanpayment_reject{{ $loanpayment->id }}" role="dialog">
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
                                                            <form role="form" method="POST" action="{{ url('loanpayment_reject_manager') }}">{{ csrf_field() }}
                                                                <input type="hidden" name="loanpayment_reject_manager" value="{{ $loanpayment->id }}">
                                                                <button type="submit" id="loanpayments_manager_reject" class="btn btn-danger">Reject</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal" id="loanpayment_manager_reject_no">No</button>
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
                        <th>Business Owner Name</th>
                        <th>Amount Paid</th>
                        <th>UID</th>
                        <th>Amount Verified</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @foreach($businessowners as  $businessowner)
                            @foreach($loanpayments as $loanpayment)
                                @if($loan->id == $loanpayment->loan_id && ($loanpayment->loan_payment_status == 'Manager Approved' || $loanpayment->loan_payment_status == 'Manager Rejected'))
                                    <tr>
                                        <td>{{$businessowner->bo_first_name}} {{$businessowner->bo_last_name}}</td>
                                        <td>MYR {{$loanpayment->loan_amount_paid}}</td>
                                        <td>{{$loanpayment->loan_paid_uid}}</td>
                                        <td>MYR {{$loanpayment->loan_amount_verified}}</td>
                                        <td>{{$loanpayment->loan_payment_status}}</td>
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