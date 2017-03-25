@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row">
            <h1 class="text-center">Loan Risk Classification</h1>
            <hr>
            <div class="col-md-10 col-md-offset-1">
                @if (session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif

                <h2 style="color: darkblue">Pending Applications</h2>
                <table class="table table-hover table-responsive" id="lrc1">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Loan Purpose</th>
                        <th>Loan Details</th>
                        <th>Downlaod Details</th>
                        <th >Interest Rate %</th>

                        <th>Action</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loanrisks as $loanrisk)
                        @if($loanrisk->loan_status == '')
                            <tr>
                                <th scope="row">{{$loanrisk->loan_title}} </th>
                                {{--<td><a href="{{url('bo_application',$loanrisk->id)}}" class="btn btn-info btn-sm">View Details</a></td>--}}
                                <td>{{$loanrisk->loan_amount}}</td>
                                <td>{{$loanrisk->loan_duration}}</td>
                                <td>{{$loanrisk->loan_purpose}}</td>
                                <td><a href="{{url('loandetail',$loanrisk->id)}}" class="btn btn-info btn-sm">View Details</a></td>
                                <td>   <button type="button" class="btn btn-success btn-sm" >Download</button></td>
                                <form role="form" method="POST" action="{{ url('bo_loan_approve_manager') }}">{{ csrf_field() }}
                                <td><div class="col-md-6">
                                        {!! Form::text('loan_interest_rate',null,['class'=>'form-control', 'id'=>'loan_interest_rate'])!!}
                                        @if ($errors->has('loan_interest_rate'))
                                            <span class="help-block">
                                    <strong>{{ $errors->first('loan_interest_rate') }}</strong>
                                            </span>
                                        @endif
                                    </div></td>



                                <td>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ACCEPT">Accept</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="ACCEPT" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Confirmation</h4>
                                                </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to accept?</p>
                                                    </div>
                                                <div class="modal-footer">

                                                        <input type="hidden" name="bo_loan_manager_approve_id" value="{{  $loanrisk->id }}">
                                                        <button type="submit" id="myloan_manager_approve1" class="btn btn-primary btn-sm">Yes</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="myloan_managerreject_no">No</button>
                                                    </form>
                                                </div>
                                                </div>

                                        </div>
                                    </div>
                                </td>
                                <td>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#REJECT">Reject</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="REJECT" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to reject?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form role="form" method="POST" action="{{ url('bo_loan_reject_manager') }}">{{ csrf_field() }}
                                                        <input type="hidden" name="loan_reject_manager" value="{{  $loanrisk->id }}">
                                                        <button type="submit" id="myloan_manager_reject" class="btn btn-primary btn-sm">Yes</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="myloan_managerreject_no">No</button>
                                                    </form> </div>
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
                <h2 style="color: darkblue">Accepted/Rejected Applications</h2>
                <table class="table table-hover table-responsive" id="lrc2">
                    <thead>
                    <tr>
                        <th>Loan Title</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Loan Purpose</th>
                        <th>Loan Details</th>
                        <th>Download Details</th>
                        <th>Interest Rate %</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loanrisks as $loanrisk)
                        @if($loanrisk->loan_status !== '')
                            <tr>
                                <td>{{$loanrisk->loan_title}} </td>
                                <td>{{$loanrisk->loan_amount}}</td>
                                <td>{{$loanrisk->loan_duration}}</td>
                                <td>{{$loanrisk->loan_purpose}}</td>
                                <td><a href="{{url('loandetail',$loanrisk->id)}}" class="btn btn-info btn-sm">View Details</a></td>
                                <td> <button type="button" class="btn btn-primary btn-sm">Download</button></td>

                                <td>{{$loanrisk->loan_interest_rate}}</td>

                                <td>{{$loanrisk->loan_status == '' ? 'Pending' : $loanrisk->loan_status}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

    </div>
    </div>
@endsection