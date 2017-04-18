@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center">Withdraw Funds</h2>
            <hr>
            {!! Form::open(['url' => 'inv_withdrawfunds', 'class' => 'form-horizontal', 'id' => 'inv_withdrawfunds', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('withdraw_amount') ? ' has-error' : '' }}">
                {!! Form::label('withdraw_amount', 'Please enter the amount you wish to withdraw (MYR): ', ['class'=>'col-md-6 control-label', 'id'=>'withdraw_amount','style'=>'text-align:right' ]) !!}
                <div class="col-md-2">
                    {!! Form::text('withdraw_amount', null,['class'=>'form-control', 'id'=>'withdraw_amount']) !!}
                    @if ($errors->has('withdraw_amount'))
                        <span class="help-block">
                            <strong>{{ $errors->first('withdraw_amount') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('invested_amount', 'Total Amount Invested: ', ['class'=>'col-md-6 control-label', 'id'=>'withdraw_amount','style'=>'text-align:right' ]) !!}
                <div class="col-md-2">
                    {!! Form::label('invested_amount', 'MYR ', ['class'=>'control-label', 'id'=>'invested_amount','style'=>'text-align:right', 'value' ]) !!}
                    <b>{{$sum}}</b>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('withdraw_avail_amount', 'Total Amount Available to Withdraw: ', ['class'=>'col-md-6 control-label', 'id'=>'withdraw_amount','style'=>'text-align:right' ]) !!}
                <div class="col-md-2">
                    {!! Form::label('withdraw_avail_amount', 'MYR ', ['class'=>'control-label', 'id'=>'withdraw_avail_amount','style'=>'text-align:right' ]) !!}
                    <b>{{$fundtotal->funds_total}}</b>
                    <input type="hidden" name="available_fund" id="available_fund" value="{{$fundtotal->funds_total}}"/>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="button" class="btn btn-success form-control" id="withdraw_funds_submit" style="width:70px;" data-toggle="modal" data-target="#withdraw_now">Submit</button>
                <div class="modal fade" id="withdraw_now" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to withdraw?</p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::submit('Yes', ['class' => 'btn btn-success', 'id'=>'bo_pay_now_submit_yes']) !!}
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="bo_pay_no_confirm">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="withdraw_inv_id" id="withdraw_inv_id" value="{{$invapp->id}}"/>
            {!! Form::close() !!}
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
                </div>
                <a href="{{ url('/home') }}" class="btn btn-info" id="withdraw_back">Back</a>
            @endif
        </div>
    </div>
@endsection