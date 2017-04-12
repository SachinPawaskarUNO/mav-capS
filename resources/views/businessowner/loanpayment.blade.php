@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">Loan Payment</h1>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                @if (session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <h2 style="color: darkblue">Current Loans</h2><br>
                <table class="table table-hover table-responsive" id="loanpayment_dt1">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Monthly Amount</th>
                        <th>Remaining Amount</th>
                        <th>Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @if($loan->id == $amortization->loan_id && $amortization->paid_status == null)
                            <tr>
                                <td>{{$loan->loan_title}}</td>
                                <td>MYR {{$loan->loan_funded_amount}}</td>
                                <td>{{$loan->loan_duration}}</td>
                                <td>MYR {{$amortization->monthly_payment}}</td>
                                <td>MYR {{$amortization->amount_remaining}}</td>
                                <td><a href="{{url('bo_paynow',$amortization->id)}}" id="loanpayment_paynow" class="btn btn-success btn-sm">Pay Now</a></td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ url()->previous() }}" class="btn btn-info" id="bo_loanpayment_back">Back</a>
            </div>
        </div>
    </div>
@endsection