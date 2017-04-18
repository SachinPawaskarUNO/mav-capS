@extends('layouts.app')
@section('content')
    {!! Form::open(['url' => 'repayment', 'class' => 'form-horizontal', 'id' => 'repayment', 'method' => 'POST']) !!}
    {{ csrf_field() }}
   <div class="container">
       <div class="row">
           <h1 class="text-center">Repayment Details</h1>
           <hr>
           <h4 style="color: darkblue">Investor Repayment Details for loan {{$loan->loan_title}} and loan amount MYR {{$loan->loan_amount}}</h4><br>
           <table class="table table-hover table-responsive" id="lrc1">
               <thead>
               <tr>
                   <th>Investor Name</th>
                   <th>Amount Invested</th>
                   <th>Amount Invested %</th>
                   <th>Amount Repaid</th>
               </tr>
               </thead>
               <tbody>
                @foreach($investments as $investment)
                    @foreach($investors as $investor)
                            @if($investment->loan_id == $loan->id && $investment->investor_application_id == $investor->id)
                                @php
                                $loanamount = $loan->loan_amount;
                                $repaidamount = $repayment->repayment_amount - $repayment->total_amnt_paid;
                                $investedamount = $investment->invested_amount;
                                $invested = $investedamount/$loanamount;
                                $investedpercentage = round((float)$invested * 100 );
                                $amount = ($investedpercentage/100) * $repaidamount;
                                @endphp
                               <tr>
                                   <td>{{$investor->inv_first_name}} {{$investor->inv_last_name}}</td>
                                   <td>MYR {{$investedamount}}</td>
                                   <td>{{$investedpercentage}} %</td>
                                   <td>MYR {{$amount}}</td>
                               </tr>
                            @endif
                        @endforeach
                    @endforeach
               </tbody>
           </table>
       </div>
   </div>
   <br>
    <div class="container">
        <div align="center">
            <button type="button" class="btn btn-success form-control" id="repayment_approve_submit" style="width:200px;" data-toggle="modal" data-target="#repayment_approve">Approve Repayment</button>
            <div class="modal fade" id="repayment_approve" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Confirm?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to disburse the repayment?</p>
                        </div>
                        <div class="modal-footer">
                            {!! Form::submit('Approve', ['class' => 'btn btn-success', 'id'=>'repayment_approve_submit_yes']) !!}
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="repayment_approve_no_confirm">No</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
        <input type="hidden" name="repayment_id" value="{{ $repayment->id }}">
        <input type="hidden" name="repaid_amount" value="{{ $repaidamount}}">
    </div>
   {!! Form::close() !!}
@endsection

