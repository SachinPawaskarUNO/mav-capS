@extends('layouts.app')
@section('content')
    <h1>Create New Manager</h1><br>
    {!! Form::open(['url' => 'managers']) !!}
    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
        {!! Form::label('first_name', 'First Name') !!}
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
        {!! Form::text('last_name',null,['class'=>'form-control']) !!}
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', ' Email') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        {!! Form::label('password_confirmation', 'Confirm Password') !!}
        {!! Form::password('password_confirmation',['class'=>'form-control']) !!}

    </div>

        <div class="form-group">

            <!--Create Button-->
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#manager_create">Create</button>

            <!-- Modal -->
            <div class="modal fade" id="manager_create" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Confirm?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to create?</p>
                        </div>
                        <div class="modal-footer">
                            {!! Form::submit('Create', ['class' => 'btn btn-primary', 'id' =>'save_manager']) !!}
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="manager_no_create_confirm">No</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Cancel Button--!>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#manager_create_cancel">Cancel</button>

            <!-- Modal -->
            <div class="modal fade" id="manager_create_cancel" role="dialog">
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
                            <a href="{{url('/home')}}" class="btn btn-primary" id="create_manager_cancel_confirm">Cancel</a></button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="create_manager_no_cancel_confirm">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {!! Form::close() !!}
@stop
