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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                        {!! Form::open(['url' => 'loan_application', 'class' => 'form-horizontal', 'id' => 'loan_application']) !!}
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
                                    {!! Form::select('loan_purpose', array(''=>'Select','xyz' =>'XYZ','abc' =>'ABC'),'',
                                    ['class'=>'form-control', 'id'=>'bo_gender']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loan_submit">Submit</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="loan_submit" role="dialog">
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
                                                    {!! Form::submit('Submit', ['class' => 'btn btn-success', 'id' =>'save_loan']) !!}
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="submit_confirm">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="reset" id="loan_reset" class="btn btn-danger" >
                                        Reset
                                    </button>
                                </div>
                            </div>
                            <div id="mandatory"> <span style="color:red">*</span>Indicates mandatory field</div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading" align="center"><h2>Loan Estimator</h2></div>
            <div class="panel-body" align="center">
                <body>
                <br/>Loan Amount: MYR &nbsp;
                <input type="text" id="loan_amount" name="loan_amount">
                <br>
                <br/> Rate (R): % &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="rate" name="rate">
                <br>
                <br/> Time (t): months &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="time" name="time">
                <br>
                <br>
                <button onclick="compute_interest()">Compute Interest</button>
                <br><br><br><br>
                <p id="demo"></p>
                </body>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
