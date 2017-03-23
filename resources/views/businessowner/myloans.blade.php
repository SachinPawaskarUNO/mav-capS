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
                            <th>Interest Rate</th>
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
                            <td></td>
                            <td>
                                <form role="form" method="POST" action="{{ url('bo_loan_approve') }}">{{ csrf_field() }}
                                    <input type="hidden" name="bo_loan_id" value="{{ $loan->id }}">
                                    <button type="submit" id="myloan_accept" class="btn btn-success btn-sm">Approve</button>
                                </form></td><td>
                                <form role="form" method="POST" action="{{ url('bo_loan_reject') }}">{{ csrf_field() }}
                                    <input type="hidden" name="bo_loan_id" value="{{ $loan->id }}">
                                    <button type="submit" id="myloan_reject" class="btn btn-danger btn-sm">Reject</button>
                                </form>
                            </td>
                        </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <h2 style="color: darkblue">Accepted/Rejected Loans</h2><br>
                <table class="table table-hover table-responsive" id="myloans_dt2">
                    <thead>
                        <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Loan Purpose</th>
                        <th>Interest Rate</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @if($loan->loan_status != '')
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td></td>
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