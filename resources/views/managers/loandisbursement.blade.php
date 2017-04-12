@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">Disbursement</h1>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                <h2 style="color: darkblue">Pending Loans</h2><br>
                <table class="table table-hover table-responsive" id="disburse_pending_table">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Purpose</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Amount Funded %</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @if($loan->loan_status == 'Borrower Accepted')
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td>{{$loan->loan_funded_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_funded_percent}}%</td>
                                <td>
                                    <!--Disburse Button-->
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" id="disburse_button" data-target="#manager_disburse">Disburse</button>
                                    <!--Model-->
                                    <div class="modal fade" id="manager_disburse" role="dialog">
                                        <div class="modal-dialog">
                                            <!--Model Content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to disburse?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form role="form" method="POST" action="{{ url('manager_disburse') }}">{{ csrf_field() }}
                                                        <input type="hidden" name="manager_disburse_id" value="{{ $loan->id }}">
                                                        <button type="submit" id="disburse_yes" class="btn btn-success btn-sm">Yes</button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="disburse_no">No</button>
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
                <h2 style="color: darkblue">Disbursed Loans</h2><br>
                <table class="table table-hover table-responsive" id="disbursed_table">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Purpose</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @if($loan->loan_status == 'Loan Disbursed')
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td>{{$loan->loan_funded_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_status}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div align="right">
            <a href="{{ url()->previous() }}" class="btn btn-info" id="disburse_back">Back</a>
        </div>
    </div>
@endsection