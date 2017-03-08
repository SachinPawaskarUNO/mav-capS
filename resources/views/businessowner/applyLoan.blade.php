@extends('layouts.app')

@section('content')
    <?php
    $duration = array(
    '' =>'Select',
        '1 month'=>'1 month',
        '2 months'=>'2 months',
        '3 months'=>'3 months',
        '4 months'=>'4 months',
        '5 months'=>'5 months',
        '6 months'=>'6 months',
        '7 months'=>'7 months',
        '8 months'=>'8 months',
        '9 months'=>'9 months',
        '10 months'=>'10 months',
        '11 months'=>'11 months',
        '12 months'=>'12 months',
            )?>

    <div class="container" align="left">

        <div class="row">
            <br><br><br>
            <div class="col-md-6 col-md-offset--3">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center"><h2>Apply Loan</h2></div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'loan_application', 'class' => 'form-horizontal', 'id' => 'loan_application', 'files' => true]) !!}
                        {{ csrf_field() }}

                            <div class="form-group">
                                {!! Form::label('loan_title', 'Loan Title', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field' ]) !!}
                                <div class="col-md-6">
                                    {!! Form::text('loan_title', null,['class'=>'form-control', 'id'=>'loan_title']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('loan_amount', 'Loan Amount', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('loan_amount',null,['class'=>'form-control', 'id'=>'loan_amount']) !!}
                                </div>
                            </div>
                        <div class="form-group">
                            {!! Form::label('loan_duration', 'Loan Duration', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}

                            <div class="col-md-6">
                                {!! Form::select('loan_duration',$duration,'',['class'=>'form-control', 'id'=>'loan_duration']) !!}
                            </div>
                        </div>
                            <div class="form-group">
                                {!! Form::label('loan_purpose', 'Loan Purpose', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('loan_purpose', array(''=>'Select','male' =>'Male','female' =>'Female'),'',
                                    ['class'=>'form-control', 'id'=>'bo_gender']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" >
                                        Submit
                                    </button>

                                    <button type="reset" onclick="resetform()" class="btn btn-primary" >
                                        Reset
                                    </button>
                                </div>
                            </div>
                            <div id="mandatory"> <span style="color:red">*</span>Indicates mandatory field</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
