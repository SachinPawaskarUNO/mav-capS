@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">Repayment Details</h1>
        </div>
    </div>
    <table class="table table-striped table-bordered table hover" align="middle">
        <tr class="bg-info">
        <tr>
            <th>Investor Name</th>
            <th>Amount Invested</th>
            <th>Amount Invested %</th>
            <th>Amount Repaid</th>
        </tr>
        <tbody>
        @foreach($loans as $loan)
            <tr>
                <td>{{$loan->loan_title}}</td>
                <td>{{$loan->loan_title}}</td>
                <td>{{$loan->loan_title}}</td>
                <td>{{$loan->loan_title}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="container">
        <div align="right">
            <a href="" class="btn btn-info" id="repayment_show_back">Approve Repayment</a>
            <a href="{{ url()->previous() }}" class="btn btn-info" id="repayment_show_back">Back</a>
        </div>
    </div>


@endsection

