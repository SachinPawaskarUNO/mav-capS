@extends('layouts.app')
@section('content')
        <div class="container" >
            <div class="row">
                <h2 class="text-center">Disbursement</h2>
                <hr>
                <div class="alert alert-success">
                    <h5 align="center">Loan has been Disbursed and email has been sent.</h5>
                </div>
                    <div class="col-md-5 col-md-offset-3">
                        <div class="panel panel-info text-center">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <b>Account Details</b></h3>
                            </div>
                            <div class="panel-body">
                                Business Owner Name: {{$boapp->bo_first_name}}&nbsp;{{$boapp->bo_last_name}}<br>
                                Bank Name:           {{$boapp->bo_bank_name}}<br>
                                Account Number:      {{$boapp->bo_bank_account}} <br>
                                Tracking Number:     {{ $disbursement-> disbursement_uid}}<br><br>
                                <span style="color:red"><b>Note: Please keep the tracking number for reference.</b></span>
                            </div>
                        </div>
                    </div>
            </div>
            <div align="right">
                <a href="{{ url()->previous() }}" class="btn btn-info" id="disbursedetail_back">Back</a>
            </div>
    </div>
@endsection