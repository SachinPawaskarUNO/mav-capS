@extends('layouts.app')
@section('content')
    <h1>Update Manager</h1>
    @if (count($errors) > 0)
        <div class = "alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($manager,['method' => 'PATCH','route'=>['managers.update',$manager->id]]) !!}
    <div class="form-group">
        {!! Form::label('first_name', 'First Name') !!}
        {!! Form::text('first_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('middle_name', 'Middle Name') !!}
        {!! Form::text('middle_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('last_name', 'Last Name') !!}
        {!! Form::text('last_name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <!--<div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::text('password',null,['class'=>'form-control']) !!}
    </div>
    !-->
    <div class="form-group">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
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
                            {!! Form::submit('Update', ['class' => 'btn btn-primary'])!!}
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>

        {!! Form::submit('Cancel', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}
@stop
