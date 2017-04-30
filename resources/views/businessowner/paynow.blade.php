@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h2 class="text-center">Pay Now</h2>
            <hr>
            {!! Form::open(['url' => 'bo_payment', 'id' => 'bo_payment', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-md-6">
                    <table class="col-md-offset-6 table">
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> {{ Form::radio('monthly_amount', 1, true, ['class' => 'field', 'id'=>'monthly_radio']) }}
                                {!! Form::label('default_monthly_amount', 'Monthly Amount (MYR) :', ['class'=>' control-label']) !!}</td>
                            <td><b>{{$amortization->monthly_payment}}</b></td>
                        </tr>
                        <tr>
                            <td> {{ Form::radio('monthly_amount', 1, false, ['class' => 'field', 'id'=>'extra_radio']) }}
                                {!! Form::label('extra_monthly_amount', 'Other Amount (MYR) : ', ['class'=>' control-label']) !!}</td>
                            <td><div class="input-group {{ $errors->has('extra_monthly_amount') ? ' has-error' : '' }}">
                                    {!! Form::text('extra_monthly_amount',null,['class'=>'form-control', 'id'=>'extra_monthly_amount', 'onchange'=>'decimal(this)'])!!}
                                </div>
                                @if ($errors->has('extra_monthly_amount'))
                                    <span class="help-block" style="color: darkred"><strong>{{ $errors->first('extra_monthly_amount') }}</strong></span>
                                @endif
                               </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br><br><br>
                @if(!session('uid'))
                <div class="form-group col-md-10 text-center">
                    <button type="button" class="btn btn-success form-control" id="bo_pay_now_submit" style="width:70px;" data-toggle="modal" data-target="#pay_now">Submit</button>
                    <div class="modal fade" id="pay_now" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Confirm?</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to submit the payment?</p>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::submit('Yes', ['class' => 'btn btn-success', 'id'=>'bo_pay_now_submit_yes']) !!}
                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="bo_pay_no_confirm">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('bo_loanpayment') }}" class="btn btn-danger">Cancel</a>
                </div>
                @endif
                <input type="hidden" name="paid_amortization_id" value="{{ $amortization->id }}">
                {!! Form::close() !!}
                <br><br><br>
                <div class="form-group col-md-10 text-center">
                    <button type="button" class="btn btn-primary form-control" id="full_payment_submit" style="width:150px;" data-toggle="modal" data-target="#full_payment">Pay Full Amount</button>
                    <div class="modal fade" id="full_payment" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Confirm?</h4>
                                </div>
                                <div class="modal-body">
                                    <p>This will send an email to request the full payment amount which will be later emailed to you by CapSphere.</p><br>
                                    <p>Do you want to continue?</p>
                                </div>
                                <div class="modal-footer">
                                    <form role="form" method="POST" action="{{ url('bo_full_payment') }}">{{ csrf_field() }}
                                        <input type="hidden" name="full_amortization_id" value="{{ $amortization->id }}">
                                        <button type="submit" id="bo_pay_full_now_submit_yes" class="btn btn-success">Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="bo_pay_no_confirm">No</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if(session('uid'))
                <br>
                <div class="alert alert-success text-center">
                    {{ session('status') }}
                </div><br>
                <div class="form-group text-center">
                    <h3>Your Unique Identification Number (UID) is : <b style="color:darkred">{{ session('uid') }}</b></h3>
                    <span style="color:red"><b>Note: Please keep the UID for your reference.</b><br></span>
                </div><br>
                <a href="{{ url('home') }}" class="btn btn-info" id="bo_show_back">Back</a>
            @endif
        </div>
    </div>
@endsection