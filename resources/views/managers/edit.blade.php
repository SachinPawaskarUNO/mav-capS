@extends('layouts.app')
@section('content')
    <h1>Update Manager</h1>
    <!--Error display header-->
    <!--@if (count($errors) > 0)
        <div class = "alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif!-->

    {!! Form::model($manager,['method' => 'PATCH','route'=>['managers.update',$manager->id]]) !!}
    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
        {!! Form::label('first_name', 'First Name') !!}
        <span style="color:red">*</span>
        {!! Form::text('first_name',null,['class'=>'form-control']) !!}
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
        {!! Form::label('middle_name', 'Middle Name') !!}
        {!! Form::text('middle_name',null,['class'=>'form-control']) !!}
        @if ($errors->has('middle_name'))
            <span class="help-block">
                <strong>{{ $errors->first('middle_name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
        {!! Form::label('last_name', 'Last Name') !!}
        <span style="color:red">*</span>
        {!! Form::text('last_name',null,['class'=>'form-control']) !!}
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'Email') !!}
        <span style="color:red">*</span>
        {!! Form::text('email',null,['class'=>'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <!--Password Display-->
    <!--<div class="form-group">
        {!! Form::label('password', 'Password') !!}
          {!! Form::text('password',null,['class'=>'form-control']) !!}
    </div>!-->

    <div class="form-group">

            <!--Update Button-->
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#manager_update">Update</button>

            <!-- Modal -->
            <div class="modal fade" id="manager_update" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Confirm?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to update?</p>
                        </div>
                        <div class="modal-footer">
                            {!! Form::submit('Update', ['class' => 'btn btn-primary','id' =>'update_manager_confirm'])!!}
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="update_manager_no_confirm">No</button>

                        </div>
                    </div>
                </div>
            </div>

           <!--Cancel Button-->
           <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#manager_update_cancel">Cancel</button>
        <!-- Modal -->
        <div class="modal fade" id="manager_update_cancel" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Confirm?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to cancel?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{url('/home')}}" class="btn btn-primary" id="manager_update_cancel_confirm">Cancel</a></button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="manager_update_no_cancel_confirm">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
@stop
