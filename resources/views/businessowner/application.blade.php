@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <div class="container">
        <div class="row">
            <div class="process">
                <div class="process-row nav nav-tabs">
                    <div class="process-step">
                        <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-info fa-3x"></i></button>
                        <p><small>Personal<br/>Information</small></p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
                        <p><small>Business<br/>Details</small></p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-check fa-3x"></i></button>
                        <p><small>Business<br/>Financials</small></p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade active in">
                    <!-- Personal Details Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Personal Details</b></h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" id="bo_personal">
                                        <div class="form-group">
                                            {!! Form::label('bo_first_name', 'First Name', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                            {!! Form::text('bo_first_name',null,['class'=>'form-control', 'id'=>'bo_first_name']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_last_name', 'Last Name', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_last_name',null,['class'=>'form-control', 'id'=>'bo_last_name']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_identification_card_number', 'Identification Card Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_identification_card_number',null,['class'=>'form-control', 'id'=>'bo_identification_card_number']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_date_of_birth', 'Date of Birth', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_date_of_birth',null,['class'=>'form-control', 'id'=>'bo_date_of_birth']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_gender', 'Gender', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_gender', array(''=>'-- Please Select --','male' =>'Male','female' =>'Female'),'',
                                                ['class'=>'form-control', 'id'=>'bo_gender']) !!}
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Personal Details Section End -->
                    <ul class="list-unstyled list-inline pull-right">
                        <li><button type="button" class="btn btn-info next-step" id="bo_next_step1">Next<i class="fa fa-chevron-right"></i></button></li>
                    </ul>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                    <ul class="list-unstyled list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                        <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                    </ul>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Menu 5</h3>
                    <p>Some content in menu 2.</p>
                    <ul class="list-unstyled list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                        <li><button type="button" class="btn btn-success"><i class="fa fa-check"></i> Done!</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection