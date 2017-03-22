@extends('layouts.app')
@section('content')

    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">

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
                <h2 style="color: darkblue"><u>Pending Loans</u></h2>
                    <table class="table table-hover table-responsive" id="myloans_pending_table">
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
                        @foreach($bos as $bo)
                            @if($bo->loan_status == '')
                        <tr>
                            <td>{{$bo->loan_title}}</td>
                            <td>{{$bo->loan_amount}}</td>
                            <td>{{$bo->loan_duration}}</td>
                            <td>{{$bo->loan_purpose}}</td>
                            <td></td>
                            <td>
                                {!!Form::model($bo,array('route'=>['add_funds.update',$bo->id],'method'=>'PATCH'))!!}
                                {!!Form::submit('Approve', ['class' => 'btn btn-success btn-sm','id' =>'myloan_accept'])!!}
                                {!!Form::close() !!}</td><td>
                                {!!Form::model($bo,array('route'=>['add_funds.update',$bo->id],'method'=>'PATCH'))!!}
                                {!!Form::submit('Reject', ['class' => 'btn btn-danger btn-sm','id' =>'myloan_reject'])!!}
                                {!!Form::close() !!}
                            </td>
                        </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <h2 style="color: darkblue"><u>Accepted/Rejected Loans</u></h2>
                <table class="table table-hover table-responsive" id="myloans_ar_table">
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
                    @foreach($bos as $bo)
                        @if($bo->loan_status != '')
                            <tr>
                                <td>{{$bo->loan_title}}</td>
                                <td>{{$bo->loan_amount}}</td>
                                <td>{{$bo->loan_duration}}</td>
                                <td>{{$bo->loan_purpose}}</td>
                                <td></td>
                                <td>{{$bo->loan_status == '' ? 'Pending' : $bo->loan_status}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script>
            $('#myloans_pending_table').dataTable();
            $('#myloans_ar_table').dataTable();
        </script>
    </div>


@endsection