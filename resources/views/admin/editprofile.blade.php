@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Profile Information</h1>
            <hr>
            <div class="container" style="padding-top: 25px">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3><b>Edit Profile</b></h3></div>
                            <div class="panel-body">
                                {!! Form::open(['url' => 'update_adminprofile', 'class' => 'form-horizontal', 'id' => 'admin_update']) !!}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    {!! Form::label('admin_first_name', 'First Name', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field' ]) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('admin_first_name', null,['class'=>'form-control', 'id'=>'admin_first_name']) !!}<br>
                                    </div>
                                    @if ($errors->has('admin_first_name'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('admin_first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('admin_middle_name', 'Middle Name', ['class'=>'col-md-4 control-label' ]) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('admin_middle_name', null,['class'=>'form-control', 'id'=>'admin_middle_name']) !!}<br>
                                    </div>
                                    @if ($errors->has('admin_middle_name'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('admin_middle_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('admin_last_name', 'Last Name', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field' ]) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('admin_last_name', null,['class'=>'form-control', 'id'=>'admin_last_name']) !!}<br>
                                    </div>
                                    @if ($errors->has('admin_last_name'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('admin_last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('new_password', 'New Password', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('new_password', null,['class'=>'form-control', 'id'=>'new_password']) !!}<br>
                                    </div>
                                    @if ($errors->has('new_password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('confirm_password', 'Confirm Password', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field' ]) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('confirm_password', null,['class'=>'form-control', 'id'=>'confirm_password']) !!}<br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_submit" id="admin_editsubmit_button">Submit</button>
                                <!-- Modal -->
                                <div class="modal fade" id="edit_submit" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Confirm?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to submit?</p>
                                            </div>
                                            <div class="modal-footer">
                                                {!! Form::submit('Submit', ['class' => 'btn btn-success', 'id' =>'save_update']) !!}
                                                <button type="button" class="btn btn-danger" data-dismiss="modal" id="submit_confirm">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="reset" id="edit_reset" class="btn btn-info" >
                                    Cancel
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection