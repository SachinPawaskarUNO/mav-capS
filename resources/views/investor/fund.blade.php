@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => 'add_funds', 'class' => 'form-horizontal', 'id' => 'inv_add_funds']) !!}
    {{ csrf_field() }}
    <!-- Add funds -->
    <div class="container" >
        <div class="row">
            <h2 class="text-center">Add Funds</h2>
            <hr>
            @if (session('uid'))
                <div class="form-group">
                    {!! Form::label('fund_amount', 'Enter the amount you wish to invest (MYR)', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field' ]) !!}
                    <div class="col-md-4">
                        <input type="text" id="inv_add_fund_amount" class="form-control" value="{{ session('fund_amount') }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <span style="color:red"><b>Note: Funds once submitted cannot be edited. Please cancel the existing transaction to invest any new amount.</b></span>
                    </div>
                </div>
                <hr>
                <div class="alert alert-success text-center">
                    Thank you for investing! Your request has been processed successfully.
                </div><br>
                <div class="form-group text-center">
                    <h3>Your Unique Identification Number (UID) is : <b style="color:darkred">{{ session('uid') }}</b></h3>
                    <span style="color:red"><b>Note: Please Provide the UID as a note while transferring the funds to the CapSphere account.</b><br></span>
                </div>
                <div class="col-md-5 col-md-offset-3">
                    <div class="panel panel-info text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title"> <b>CapSphere Account Details</b></h3>
                        </div>
                        <div class="panel-body">
                            Bank Name:            xxxxxx <br>
                            Account Name:         xxxxxx <br>
                            Account Number:       xxxxxx <br>
                        </div>
                    </div>
                    <!--Confirm Transaction Button-->
                    <!-- Trigger the modal with a button -->
                    <a href="{{ url('home') }}"> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#confirm_trans">Confirm Transaction</button></a>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#cancel_trans">Cancel Transaction</button>
                    <!-- Modal -->
                    <div class="modal fade" id="cancel_trans" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Confirmation</h4>
                                </div>
                                <div class="modal-body">
                                    <p><h4>Are you sure you want to cancel the transaction?</h4></p>
                                </div>
                                <div class="modal-footer">
                                </form>
                                {!! Form::open(['action' => ['FundController@destroy', $inv->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Yes', ['class'=>'btn btn-danger']) !!}
                                <!--{!! Form::close() !!}-->
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="cancel_trans_no">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="form-group{{ $errors->has('fund_amount') ? ' has-error' : '' }}">
                    {!! Form::label('fund_amount', 'Enter the amount you wish to invest (MYR)', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field' ]) !!}
                    <div class="col-md-4">
                        {!! Form::text('fund_amount', null,['class'=>'form-control', 'id'=>'fund_amount', 'onchange'=>'decimal(this)']) !!}
                        @if ($errors->has('fund_amount'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('fund_amount') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <span style="color:red"><b>Note: Funds once submitted cannot be edited. Please cancel the existing transaction to invest any new amount.</b></span>
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::submit('Submit', ['class' => 'btn btn-success form-control', 'id'=>'inv_add_fund_submit', 'style'=>'width:70px;']) !!}
                        <div class="col-md-10" id="mandatory"> <span style="color:red">*</span>Indicates mandatory field</div>
                    </div>
                </div>
            @endif
            <input type="hidden" name="inv_id" value="{{ $inv->id }}">
        </div>
    </div>
    {!! Form::close() !!}
@endsection