@extends('layouts.app')
@section('content')
    <div class="col-lg-12" align="center">
        <div class="panel panel-default" align="center">
            <div class="panel-heading" align="center"><h2>Manager</h2></div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="panel-body" align="center">
                <a href="{{url('review_bo_app')}}" class="btn btn-primary" id="manager_revboapp_button">Review Business Owner Applications</a>
            </div>
            <div class="panel-body" align="center">
                <a href="{{url('review_inv_app')}}" class="btn btn-primary" id="manager_revinvapp_button">Review Investor Applications</a>
            </div>
            <div class="panel-body" align="center">
                <a href="{{url('lrc')}}" class="btn btn-primary" id="manager_lrc_button">Loan Risk Classification</a>
            </div>
            <div class="panel-body" align="center">
                <a href="{{url('loan_disbursement')}}" class="btn btn-primary" id="manager_disbursement_button">Disbursement</a>
            </div>
            <div class="panel-body" align="center">
                <a href="{{url('loan_repayment')}}" class="btn btn-primary" id="manager_repayment_button">Repayment</a>
            </div>
        </div>
    </div>
@endsection

