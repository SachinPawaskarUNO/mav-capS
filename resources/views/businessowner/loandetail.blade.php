@extends('layouts.app')

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <h2 class="text-center">Loan Detail</h2>
        <table class="table table-striped table-bordered table hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>ID</td>
                <td>{{$loanrisk->updated_by}}</td>
            </tr>
            <tr>
                <td>Loan Amount</td>
                <td>{{$loanrisk->loan_amount}}</td>
            </tr>
            <tr>
                <td>Loan Title</td>
                <td>{{$loanrisk->loan_title}}</td>
            </tr>
            <tr>
                <td>Loan Purpose</td>
                <td>{{$loanrisk->loan_purpose}}</td>
            </tr>
            <tr>
                <td>Loan_duration</td>
                <td>{{$loanrisk->loan_duration}}</td>
            </tr>
            <tr>
                <td>Created_by</td>
                <td>{{$loanrisk->created_by}}</td>
            </tr>
            <tr>
                <td>Updated by</td>
                <td>{{$loanrisk->updated_by}}</td>
            </tr>

            </tbody>
        </table>
        <a href="{{url('lrc')}}" class="btn btn-info">Back</a>
    </div>
@stop
