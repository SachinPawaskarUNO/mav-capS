@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => 'add_funds', 'class' => 'form-horizontal', 'id' => 'inv_funds', 'files'=> true]) !!}
    {{ csrf_field() }}
    <!-- Add funds -->
    <div class="container" style="padding-top: 25px" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2" align="center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3><b>Add Funds</b></h3></div>
                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label('fund_amount', 'Enter the amount you wish to invest', ['class'=>'col-md-5 control-label','id'=>'mandatory-field']) !!}
                            <div class="col-sm-2" style="padding-left: 85px">
                                {!!Form::label('fund_amount','MYR',['class'=>'col-md-6 control-label']) !!}
                            </div>
                            <div class="col-lg-4">
                                {!!Form::text('fund_amount', null,['class'=>'form-control', 'id'=>'inv_add_fund', "placeholder"=> "Enter Amount"]) !!}
                            </div>
                        </div>
                        <div class="form-group" style="padding-left:522px">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control', 'id'=>'inv_add_fund_submit', 'style'=>'width:70px;']) !!}
                        </div>
                        <!-- On submit -->
                        @if (session('uid'))
                            <div class="alert alert-success">
                                <h3>Your unique identification number(UID) is:
                                    <b>{{ session('uid') }}</b></h3><br>
                                <div align="left" style="padding-left:55px"><h4>
                                        <b>CapSphere Account Details:</b><br><br>
                                        Bank Name:            xxxxxx <br>
                                        Account Name:         xxxxxx <br>
                                        Account Number:       xxxxxx <br></h4>
                                </div><br>
                                <!--Confirm Transaction Button-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm_trans">Confirm Transaction</button>
                                <!-- Modal -->
                                <div class="modal fade" id="confirm_trans" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p><h4>Are you sure you want to confirm transaction?</h4></p>
                                            </div>
                                            <div class="modal-footer">
                                            <!--{!! Form::submit('Update', ['class' => 'btn btn-primary','id' =>'update_manager_confirm'])!!}-->
                                                <button type="button" class="btn btn-default" data-dismiss="modal" id="confirm_trans_yes">Yes</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal" id="confirm_trans_no">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Cancel transaction Button-->
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
                                            <!--<a href="{{url('/home')}}" class="btn btn-primary" id="manager_update_cancel_confirm">Cancel</a></button>-->
                                                <button type="button" class="btn btn-default" data-dismiss="modal" id="cancel_trans_yes">Yes</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal" id="cancel_trans_no">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div id="mandatory" style="padding-left:50px"> <p align="left"><span style="color:red">*</span>Indicates mandatory field</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection