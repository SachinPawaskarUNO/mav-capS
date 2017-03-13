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
    <div clas="container">
            <div class="col-md-6">
                <div class="row">
                    <h2 class="text-center">Apply Loan</h2>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(['url' => 'loan_application', 'class' => 'form-horizontal', 'id' => 'loan_application']) !!}
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('loan_title') ? ' has-error' : '' }}">
                        {!! Form::label('loan_title', 'Loan Title', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field' ]) !!}
                        <div class="col-md-6">
                            {!! Form::text('loan_title', null,['class'=>'form-control', 'id'=>'loan_title']) !!}
                            @if ($errors->has('loan_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('loan_title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('loan_amount') ? ' has-error' : '' }}">
                        {!! Form::label('loan_amount', 'Loan Amount', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}

                        <div class="col-md-6">
                            {!! Form::text('loan_amount',null,['class'=>'form-control', 'id'=>'loan_amount']) !!}
                            @if ($errors->has('loan_amount'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('loan_amount') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('loan_duration') ? ' has-error' : '' }}">
                        {!! Form::label('loan_duration', 'Loan Duration', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                        <div class="col-md-6">
                            {!! Form::select('loan_duration',$duration,'',['class'=>'form-control', 'id'=>'loan_duration']) !!}
                            @if ($errors->has('loan_duration'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('loan_duration') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('loan_purpose') ? ' has-error' : '' }}">
                        {!! Form::label('loan_purpose', 'Loan Purpose', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                        <div class="col-md-6">
                            {!! Form::select('loan_purpose', array(''=>'Select','xyz' =>'XYZ','abc' =>'ABC'),'',
                            ['class'=>'form-control', 'id'=>'loan_purpose']) !!}
                            @if ($errors->has('loan_purpose'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('loan_purpose') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
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
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <h2 class="text-center">Loan Estimator</h2>
                    <hr>
                    <form name="loandata" class="form-horizontal">
                        <h4>Loan Information</h4>
                        <div class="form-group">
                            {!! Form::label('loan_est_principal', 'Loan Amount (MYR) :', ['class'=>'col-md-4 control-label' ]) !!}
                            <div class="col-md-6">
                                <input type="text" id="loan_est_principal" name="principal" class="form-control" onchange="calculate();">
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('loan_est_interest', 'Rate of Interest (%) :', ['class'=>'col-md-4 control-label' ]) !!}
                            <div class="col-md-6">
                                <input type="text" id="loan_est_interest" name="interest" class="form-control" onchange="calculate();">
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('loan_est_years', 'Time (months) :', ['class'=>'col-md-4 control-label' ]) !!}
                            <div class="col-md-6">
                                <input type="text" id="loan_est_years" name="years" class="form-control" onchange="calculate();">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="button" value="Compute" class="btn btn-primary" onclick="calculate();">
                                <button type="reset" id="loan_est_reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                        <h4>Payment Information</h4>
                        <div class="form-group">
                            {!! Form::label('loan_est_payment', 'Monthly Payment (MYR) :', ['class'=>'col-md-4 control-label' ]) !!}
                            <div class="col-md-6">
                                <input type="text" id="loan_est_payment" name="payment" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('loan_est_total', 'Total Payment (MYR) :', ['class'=>'col-md-4 control-label' ]) !!}
                            <div class="col-md-6">
                                <input type="text" id="loan_est_total" name="total" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('loan_est_totalinterest', 'Total Inetrest Payment (MYR) :', ['class'=>'col-md-4 control-label' ]) !!}
                            <div class="col-md-6">
                                <input type="text" id="loan_est_totalinterst" name="totalinterest" class="form-control" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection