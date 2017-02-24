@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <div class="container">
        <div class="row">
            <div class="process">
                <div class="process-row nav nav-tabs">
                    <div class="process-step">
                        <button type="button" class="btn btn-info btn-circle" data-toggle="tab1" href="#menu1"><i class="fa fa-info fa-3x"></i></button>
                        <p><small>Personal<br/>Information</small></p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-default btn-circle" data-toggle="tab2" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
                        <p><small>Business<br/>Details</small></p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-default btn-circle" data-toggle="tab3" href="#menu3"><i class="fa fa-check fa-3x"></i></button>
                        <p><small>Business<br/>Financials</small></p>
                    </div>
                </div>
            </div>
            <form class="form-horizontal" id="bo_application">
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade active in">
                    <!-- Personal Details Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Personal Details</b></h3></div>
                                    <div class="panel-body">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Personal Details Section End -->
                    <!-- Contact Information Section Start -->
                    <div class="container" style="padding-top: 25px" id="step2">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Contact Information</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_street', 'Street Address', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_street',null,['class'=>'form-control', 'id'=>'bo_personal_street']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_city', 'City', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_city',null,['class'=>'form-control', 'id'=>'bo_personal_city']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_state', 'State', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_state',null,['class'=>'form-control', 'id'=>'bo_personal_state']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_zipcode', 'Zip Code', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_zipcode',null,['class'=>'form-control', 'id'=>'bo_personal_zipcode']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_country', 'Country', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_personal_country', array(''=>'-- Please Select --','male' =>'Male','female' =>'Female'),'',
                                                ['class'=>'form-control', 'id'=>'bo_personal_country']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_phonenumber', 'Phone Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_phonenumber',null,['class'=>'form-control', 'id'=>'bo_personal_phonenumber']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Information Section End -->
                    <!-- Self Identification Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Owner Self Identification</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_upload_IC', 'Upload IC', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::button('Browse',['class'=>'btn btn-primary', 'id'=>'bo_upload_IC']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Self Identification Section End -->
                    <ul class="list-unstyled list-inline pull-right">
                        <li><button type="button" class="btn btn-info next-step" id="bo_next_step1">Next<i class="fa fa-chevron-right"></i></button></li>
                    </ul>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <!-- Business Operating Address Start -->
                    <div class="container" style="padding: 0">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Operating Address</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_business_street', 'Street Address', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_street',null,['class'=>'form-control', 'id'=>'bo_business_street']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_city', 'City', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_city',null,['class'=>'form-control', 'id'=>'bo_business_city']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_state', 'State', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_state',null,['class'=>'form-control', 'id'=>'bo_business_state']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_zipcode', 'Zip Code', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_zipcode',null,['class'=>'form-control', 'id'=>'bo_business_zipcode']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_country', 'Country', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_business_country', array(''=>'-- Please Select --','male' =>'Male','female' =>'Female'),'',
                                                ['class'=>'form-control', 'id'=>'bo_business_country']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_phonenumber', 'Phone Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_phonenumber',null,['class'=>'form-control', 'id'=>'bo_business_phonenumber']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Operating Address End -->
                    <!-- Business Background Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Background</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_industry', 'Industry', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_industry', array(''=>'-- Please Select --','male' =>'Male','female' =>'Female'),'',
                                                ['class'=>'form-control', 'id'=>'bo_industry']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_type', 'Type', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_type', array(''=>'-- Please Select --','male' =>'Male','female' =>'Female'),'',
                                                ['class'=>'form-control', 'id'=>'bo_type']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_legal_entity', 'Legal Entity', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_legal_entity', array(''=>'-- Please Select --','male' =>'Male','female' =>'Female'),'',
                                                ['class'=>'form-control', 'id'=>'bo_legal_entity']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_registration_number', 'Registration Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_registration_number',null,['class'=>'form-control', 'id'=>'bo_registration_number']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_registration_year', 'Date of Birth', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_registration_year',null,['class'=>'form-control', 'id'=>'bo_registration_year']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_court_judgement', 'Court Judgement (describe)', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_court_judgement', array(''=>'-- Please Select --','male' =>'Male','female' =>'Female'),'',
                                                ['class'=>'form-control', 'id'=>'bo_court_judgement']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Background End -->
                    <!-- Business Documents Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Documents</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_business_license', 'Business License', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::button('Browse',['class'=>'btn btn-primary', 'id'=>'bo_business_license']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_entity_type', 'Business Entity Type', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::button('Browse',['class'=>'btn btn-primary', 'id'=>'bo_entity_type']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_CTOS', 'CTOS Documents', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::button('Browse',['class'=>'btn btn-primary', 'id'=>'bo_CTOS']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Documents End -->
                    <ul class="list-unstyled list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step" id="bo_prev_step2"><i class="fa fa-chevron-left"></i> Back</button></li>
                        <li><button type="button" class="btn btn-info next-step" id="bo_next_step2">Next <i class="fa fa-chevron-right"></i></button></li>
                    </ul>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <!-- Business Financial Account Start -->
                    <div class="container" style="padding: 0">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Financial Account</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_bank_name', 'Bank Name', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_bank_name',null,['class'=>'form-control', 'id'=>'bo_bank_name']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_bank_account', 'Bank Account Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_bank_account',null,['class'=>'form-control', 'id'=>'bo_bank_account']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Financial Account End -->
                    <!-- Business Financial Documents Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Financial Documents</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_audited_statements', 'Audited Financial Statements', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::button('Browse',['class'=>'btn btn-primary', 'id'=>'bo_audited_statements']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_operating_statements', 'Operating Bank Statements', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::button('Browse',['class'=>'btn btn-primary', 'id'=>'bo_operating_statements']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_tax_returns', 'Tax Return Forms', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::button('Browse',['class'=>'btn btn-primary', 'id'=>'bo_tax_returns']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Financial Documents End -->
                    <!-- Business Terms and Conditions Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Terms and Conditions</b></h3></div>
                                    <div class="panel-body">
                                        <h4>Please review the terms and conditions as a business on our platform</h4>
                                        <div class="form-group">
                                            <div class="col-md-1" style="text-align: center">
                                            {{ Form::checkbox('bo_agree_terms',1,null,['id'=>'bo_agree_terms']) }}
                                            </div>
                                            {!! Form::label('bo_agree_terms', 'I agree with Capshere Terms & Conditions') !!}
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-1" style="text-align: center">
                                                {{ Form::checkbox('bo_agree_fees',1,null,['id'=>'bo_agree_fees']) }}
                                            </div>
                                            {!! Form::label('bo_agree_fees', 'I agree with Capshere Platform Fees') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Terms and Conditions End -->
                    <ul class="list-unstyled list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step" id="bo_prev_step3"><i class="fa fa-chevron-left"></i> Back</button></li>
                        <li><button type="button" class="btn btn-success next-step" id="bo_next_step3"><i class="fa fa-check"></i>Submit</button></li>
                    </ul>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection