@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => 'add_investment', 'class' => 'form-horizontal', 'id' => 'inv_add_investment', 'method' => 'POST']) !!}
    {{ csrf_field() }}
    <!-- Add funds -->
    <div class="container" >
        <div class="row">
            <h2 class="text-center">Invest Now</h2>
            <hr>
                <div class="form-group{{ $errors->has('add_investment_amount') ? ' has-error' : '' }}">
                    {!! Form::label('add_investment_amount', 'Enter the amount you wish to invest (MYR)', ['class'=>'col-md-4 control-label', 'id'=>'mandatory-field' ]) !!}
                    <div class="col-md-4">
                        {!! Form::text('add_investment_amount', null,['class'=>'form-control', 'id'=>'add_investment_amount']) !!}
                        @if ($errors->has('add_investment_amount'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('fund_amount') }}</strong>
                                </span>
                        @endif
                    </div>
                    <br><br><br>
                    <div class="form-group col-md-10">
                        <button type="button" class="btn btn-success form-control" id="inv_invest_now_submit" style="width:70px;" data-toggle="modal" data-target="#invest_now">Submit</button>
                        <div class="modal fade" id="invest_now" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Confirm?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to invest?</p>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::submit('Yes', ['class' => 'btn btn-success', 'id'=>'inv_invest_now_submit_yes']) !!}
                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="update_manager_no_confirm">No</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                        <div class="col-md-6" id="mandatory"> <span style="color:red">*</span>Indicates mandatory field</div>
                    </div>
                </div>
            <input type="hidden" name="invested_loan_id" value="{{ $loan->id }}">
        </div>
    </div>
    {!! Form::close() !!}
@endsection