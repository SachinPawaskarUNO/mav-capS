@extends('layouts.app')
@section('content')
    <div clas="container">
        <div class="col-md-10">
            <div class="row">
                <h2 class="text-center">Add Funds</h2>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                {!! Form::open(['url' => 'add_funds', 'class' => 'form-horizontal', 'id' => 'inv_funds']) !!}
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('fund_amount') ? ' has-error' : '' }}">
                    {!! Form::label('fund_amount', 'Enter the amount you wish to invest (MYR)', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field' ]) !!}
                    <div class="col-md-4">

                        {!! Form::text('fund_amount', null,['class'=>'form-control', 'id'=>'fund_amount']) !!}

                        @if ($errors->has('fund_amount'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('fund_amount') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <span style="color:red"><b>Note: Funds once submitted cannot be edited. Investor should cancel the existing transaction to invest any new amount.</b></span>
                    </div>
                    <div class="form-group col-md-6">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control', 'id'=>'inv_add_fund_submit', 'style'=>'width:70px;']) !!}
                        <div class="col-md-10" id="mandatory"> <span style="color:red">*</span>Indicates mandatory field</div>
                    </div>
                </div>
            <!-- On submit -->
            @if (session('uid'))
            <div class="alert alert-success col-md-10">
                    <h3>Your unique identification number(UID) is:
                        <b>{{ session('uid') }}</b></h3><br>
                    <span style="color:red"><b>Note: Please Provide the UID as a note while transferring the funds to the CapShpere account.</b><br><br><br></span>
                    <div align="left" style="padding-left:55px"><h4>
                            <b>CapSphere Account Details:</b><br><br>
                            Bank Name:            xxxxxx <br>
                            Account Name:         xxxxxx <br>
                            Account Number:       xxxxxx <br></h4>
                    </div><br>
                    <!--Confirm Transaction Button-->
                    <!-- Trigger the modal with a button -->
                <a href="{{ url('home') }}"> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm_trans">Confirm Transaction</button></a>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancel_trans">Cancel Transaction</button>
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
                                        <p><h4>Are you sure you want to cancel transaction?</h4></p>
                                    </div>
                                    <div class="modal-footer">
                                    </form>
                                        {!! Form::open(['action' => ['FundController@destroy', $inv->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                        <!--{!! Form::close() !!}-->
                                        <a href="{{ url('home') }}"><button type="button" class="btn btn-default"  id="cancel_trans_no">No</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    @endif
                </div>
                <input type="hidden" name="inv_id" value="{{ $inv->id }}">
            </div>
        </div>
    </div>
@endsection
