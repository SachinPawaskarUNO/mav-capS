@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">Browse Loans</h1>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                @if (session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <h2 style="color: darkblue">Available Loans</h2><br>
                <table class="table table-hover table-responsive" id="myloans_dt1">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Loan Purpose</th>
                        <th>Total Amount Funded</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @if($loan->loan_status == 'Borrower Approved')
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td>{{$loan->loan_funded_amount == '' ? '0' : $loan->loan_funded_amount}}</td>
                                <td>
                                    <form role="form" method="POST" action="{{ url('invest_now') }}">{{ csrf_field() }}
                                        <input type="hidden" name="bo_loan_id" value="{{ $loan->id }}">
                                        <button type="submit" id="browseloans_invest" class="btn btn-success btn-sm">Invest Now</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <h2 style="color: darkblue">My Invested Loans</h2><br>
                <table class="table table-hover table-responsive" id="myloans_dt2">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Loan Purpose</th>
                        <th>Total Amount Funded</th>
                        <th>Amount Invested</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @foreach($trustee as $t)
                       @if($loan->id == $t->loan_id)
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>{{$loan->loan_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td>{{$loan->loan_funded_amount == '' ? '0' : $loan->loan_funded_amount}}</td>
                                <td>{{$t->invested_amount}}</td>
                            </tr>
                        @endif
                    @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection