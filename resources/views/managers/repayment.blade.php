@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">Repayment</h1>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                <table class="table table-hover table-responsive" id="repayment_table">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Total Paid Amount</th>
                        <th>Remaining Amount</th>
                        <th>Interest Rate %</th>
                        <th>Details</th>
                        <th>Date/Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @foreach($amortizations as $amortization)
                            @php
                                $total = 0;
                                foreach($amortizations as $num=>$values){
                                $total += $values[ 'monthly_payment' ];
                                }
                            @endphp
                            @if($loan->loan_status == 'Loan Disbursed' && ($loan->id == $amortization->loan_id && $amortization->paid_status == 'Due'))
                                @foreach($repayments as $repayment)
                                    @if($loan->id == $repayment->loan_id)
                                        <tr>
                                            <td>{{$loan->loan_title}}</td>
                                            <td>MYR {{$loan->loan_amount}}</td>
                                            <td>{{$loan->loan_duration}}</td>
                                            <td>MYR {{$repayment->repayment_amount}}</td>
                                            <td>MYR {{$total - $repayment->repayment_amount}}</td>
                                            <td>{{$loan->loan_interest_rate}}%</td>
                                            <td><a href="{{url('loan_repayment_details',$loan->id)}}" id="repayment_view_details" class="btn btn-info btn-sm">View Details</a></td>
                                            <td>{{$repayment->updated_at}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div align="right">
            <a href="{{ url()->previous() }}" class="btn btn-info" id="repayment_back">Back</a>
        </div>
    </div>
@endsection