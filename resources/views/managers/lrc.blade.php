@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">Loan Risk Classification</h1>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                @if (session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <h2 style="color: darkblue">Pending Loans</h2><br>
                <table class="table table-hover table-responsive" id="lrc1">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Loan Purpose</th>
                        <th>Details</th>
                        <th></th>
                        <th>Interest Rate %</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @if($loan->loan_status == '')
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td><a href="{{url('bo_application',$loan->business_owner_application_id)}}" class="btn btn-info btn-sm" id="view_details">View Details</a></td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#bo_download">Download</button>
                                    <div class="modal fade" id="bo_download" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Download Documents</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Please click on the below links to download a specific document.</p>
                                                    <a href="{{url('downloadbo',['id' => $loan->business_owner_application_id, 'filetype' => 'bo_upload_IC'])}}">Self Identification</a><br>
                                                    <a href="{{url('downloadbo',['id' => $loan->business_owner_application_id, 'filetype' => 'bo_business_license'])}}">Business License</a><br>
                                                    <a href="{{url('downloadbo',['id' => $loan->business_owner_application_id, 'filetype' => 'bo_entity_type'])}}">Business Entity Type</a><br>
                                                    <a href="{{url('downloadbo',['id' => $loan->business_owner_application_id, 'filetype' => 'bo_CTOS'])}}">CTOS Documents</a><br>
                                                    <a href="{{url('downloadbo',['id' => $loan->business_owner_application_id, 'filetype' => 'bo_audited_statements'])}}">Audited Financial Statements</a><br>
                                                    <a href="{{url('downloadbo',['id' => $loan->business_owner_application_id, 'filetype' => 'bo_operating_statements'])}}">Operating Bank Statements</a><br>
                                                    <a href="{{url('downloadbo',['id' => $loan->business_owner_application_id, 'filetype' => 'bo_tax_returns'])}}">Tax Return Forms</a>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" data-dismiss="modal" id="bo_download_ok_confirm">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <form role="form" method="POST" action="{{ url('bo_loan_approve_manager') }}">{{ csrf_field() }}
                                    <td>{{$loan->loan_interest_rate}}
                                        <div class="input-group {{ $errors->has('loan_interest_rate') ? ' has-error' : '' }}">
                                                {!! Form::text('loan_interest_rate',null,['class'=>'form-control', 'id'=>'loan_interest_rate'])!!}
                                                <span class="input-group-addon" id="percentage">%</span>
                                            </div>
                                        @if ($errors->has('loan_interest_rate'))
                                            <span class="help-block" style="color: darkred"><strong>{{ $errors->first('loan_interest_rate') }}</strong></span>
                                        @endif</td>
                                        <td>
                                            <!--Approve Button-->
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" id="loan_interest_rate_approval" data-target="#bo_interest_approve">Approve</button>
                                            <!--Model-->
                                            <div class="modal fade" id="bo_interest_approve" role="dialog">
                                                <div class="modal-dialog">
                                                    <!--Model Content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Confirmation</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to approve?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="bo_loan_manager_approve_id" value="{{ $loan->id }}">
                                                            <button type="submit" id="myloan_manager_accept" class="btn btn-danger btn-sm">Approve</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="myloan_manager_approve_no">No</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </td>
                                    <td>
                                        <!--Reject Button-->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" id="loan_interest_rate_rejection" data-target="#bo_interest_reject">Reject</button>
                                        <!--Model-->
                                        <div class="modal fade" id="bo_interest_reject" role="dialog">
                                            <div class="modal-dialog">
                                                <!--Model Content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Confirmation</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to reject?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form role="form" method="POST" action="{{ url('bo_loan_reject_manager') }}">{{ csrf_field() }}
                                                            <input type="hidden" name="loan_reject_manager" value="{{ $loan->id }}">
                                                            <button type="submit" id="myloan_manager_reject" class="btn btn-danger btn-sm">Reject</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="myloan_manager_reject_no">No</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-10 col-md-offset-1">
                <h2 style="color: darkblue">Accepted/Rejected Loans</h2><br>
                <table class="table table-hover table-responsive" id="lrc2">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Loan Purpose</th>
                        <th>Interest Rate %</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @if($loan->loan_status == 'Manager Approved' || $loan->loan_status == 'Manager Rejected' || $loan->loan_status == 'Borrower Approved' || $loan->loan_status == 'Borrower Rejected')
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td>{{$loan->loan_interest_rate == '' ? '00.00' : $loan->loan_interest_rate}} %</td>
                                <td>{{$loan->loan_status == '' ? 'Pending' : $loan->loan_status}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection