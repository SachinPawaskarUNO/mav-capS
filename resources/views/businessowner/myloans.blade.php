@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">My Loans</h1>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                @if (session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <h2 style="color: darkblue">Pending Loans</h2><br>
                    <table class="table table-hover table-responsive" id="myloans_dt1">
                        <thead>
                            <tr>
                            <th>Loan Title</th>
                            <th>Loan Amount</th>
                            <th>Loan Duration</th>
                            <th>Loan Purpose</th>
                            <th>Interest Rate %</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($loans as $loan)
                            @if($loan->loan_status == 'Manager Approved')
                        <tr>
                            <td>{{$loan->loan_title}}</td>
                            <td>{{$loan->loan_amount}}</td>
                            <td>{{$loan->loan_duration}}</td>
                            <td>{{$loan->loan_purpose}}</td>
                            <td>{{$loan->loan_interest_rate}} %</td>
                            <td>
                                <!--Approve Button-->
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" id="bo_myloans_approval" data-target="#bo_myloans_approve">Approve</button>
                                <!--Model-->
                                <div class="modal fade" id="bo_myloans_approve" role="dialog">
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
                                                <form role="form" method="POST" action="{{ url('bo_loan_approve') }}">{{ csrf_field() }}
                                                    <input type="hidden" name="bo_loan_id" value="{{ $loan->id }}">
                                                    <button type="submit" id="myloan_accept" class="btn btn-success btn-sm">Approve</button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="myloan_approve_no">No</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                                <td>
                                <!--Reject Button-->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" id="bo_myloans_rejection" data-target="#bo_myloans_reject">Reject</button>
                                <!--Model-->
                                    <div class="modal fade" id="bo_myloans_reject" role="dialog">
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
                                                    <form role="form" method="POST" action="{{ url('bo_loan_reject') }}">{{ csrf_field() }}
                                                        <input type="hidden" name="bo_loan_id" value="{{ $loan->id }}">
                                                        <button type="submit" id="myloan_reject" class="btn btn-success btn-sm">Reject</button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="myloan_reject_no">No</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                        </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
            </div>

            <div class="col-md-10 col-md-offset-1">
                <h2 style="color: darkblue">Active Loans</h2><br>
                <table class="table table-hover table-responsive" id="myloans_dt2">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Loan Purpose</th>
                        <th>Amount Funded %</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @if($loan->loan_status == 'Borrower Approved' && $loan->loan_funded_percent >= 80)
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td>{{$loan->loan_funded_percent}} %</td>
                                <td>
                                    <!--Approve Button-->
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" id="bo_activeloans_approval" data-target="#bo_activeloans_approve">Approve</button>
                                    <!--Model-->
                                    <div class="modal fade" id="bo_activeloans_approve" role="dialog">
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
                                                    <form role="form" method="POST" action="{{ url('bo_loan_accept') }}">{{ csrf_field() }}
                                                        <input type="hidden" name="bo_loan_id" value="{{ $loan->id }}">
                                                        <button type="submit" id="activeloan_accept" class="btn btn-success btn-sm">Approve</button>
                                                        <button type="button" class="btn btn-danger btn-group-sm" data-dismiss="modal" id="aciveloan_approve_no">No</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <!--Reject Button-->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" id="bo_activeloans_rejection" data-target="#bo_activeloans_reject">Reject</button>
                                    <!--Model-->
                                    <div class="modal fade" id="bo_activeloans_reject" role="dialog">
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
                                                    <form role="form" method="POST" action="{{ url('bo_loan_reject') }}">{{ csrf_field() }}
                                                        <input type="hidden" name="bo_loan_id" value="{{ $loan->id }}">
                                                        <button type="submit" id="myloan_reject" class="btn btn-success btn-sm">Reject</button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="myloan_reject_no">No</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @elseif($loan->loan_status == 'Borrower Approved' && $loan->loan_funded_percent < 80)
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td>{{$loan->loan_funded_percent == '' ? '0' : $loan->loan_funded_percent}} %</td>
                                <td><button type="button" class="btn btn-success btn-sm" disabled>Approve</button>
                                </td>
                                <td><button type="button" class="btn btn-danger btn-sm" disabled>Reject</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-10 col-md-offset-1">
                <h2 style="color: darkblue">Accepted/Rejected Loans</h2><br>
                <table class="table table-hover table-responsive" id="myloans_dt3">
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
                        @if($loan->loan_status == 'Borrower Accepted' || $loan->loan_status == 'Borrower Rejected' || $loan->loan_status == 'Manager Rejected' || $loan->loan_status == 'Loan Disbursed')
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_funded_amount}}</td>
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