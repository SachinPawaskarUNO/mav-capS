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
                <table class="table table-hover table-responsive" id="browseloans1">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Loan Purpose</th>
                        <th>Total Amount Funded</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @if($loan->loan_status == 'Borrower Approved')
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>MYR {{$loan->loan_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td>MYR {{$loan->loan_funded_amount == '' ? '0' : $loan->loan_funded_amount}}</td>
                                <td><a href="{{url('invest_now',['id' => $loan->id])}}"><button id="browseloans_invest" class="btn btn-success btn-sm">Invest Now</button></a></td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <h2 style="color: darkblue">My Invested Loans</h2><br>
                <table class="table table-hover table-responsive" id="browseloans2">
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
                        @foreach($trustees as $trustee)
                       @if($loan->id == $trustee->loan_id)
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>MYR {{$loan->loan_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>{{$loan->loan_purpose}}</td>
                                <td>MYR {{$loan->loan_funded_amount == '' ? '0' : $loan->loan_funded_amount}}</td>
                                <td>MYR {{$trustee->invested_amount}}</td>
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