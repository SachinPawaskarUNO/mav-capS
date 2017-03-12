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
            <div class="col-md-5 col-md-offset--3">
                <div class="panel panel-danger">
                    <div class="panel-heading" align="center"><h2>Apply Loan</h2></div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
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

        <div class=align="center"><h2><span class="label label-primary">Loan Estimator</span></h2></div>
                <body>
                <form name="loandata">
                    <table>
                        <tr><td colspan="3"><br><b>Enter Loan Information:</b></td></tr>
                        <tr>
                            <td>Loan Amount (MYR):</td>
                            <td><input type="text" name="principal" size="12"
                                       onchange="calculate();"></td>
                        </tr>
                        <tr>
                            <td>Annual Rate of Interest (%):</td>
                            <td><input type="text" name="interest" size="12"
                                       onchange="calculate();"></td>
                        </tr>
                        <tr>
                            <td>Time (months):</td>
                            <td><input type="text" name="months" size="12"
                                       onchange="calculate();"></td>
                        </tr>
                        <tr><td colspan="3">
                                <br>
                                <input class="btn" id="compute_loan" type="submit" value="Compute" onclick="calculate();">

                        <input class="btn" type="reset" id="loan_reset">
                            </td></tr>
                        <tr><td colspan="3">
                                <br>
                                <b>Payment Information:</b>
                            </td></tr>
                        <tr>
                            <td>Your monthly payment will be:</td>
                            <td><input type="text" name="payment" size="12"></td>
                        </tr>
                        <tr>
                            <td>Your total payment will be:</td>
                            <td><input type="text" name="total" size="12"></td>
                        </tr>
                        <tr>
                            <td>Your total interest payments will be:</td>
                            <td><input type="text" name="totalinterest" size="12"></td>
                        </tr>
                    </table>
                </form>
                </body>
    </div>
    </div>
    </div>
@endsection
