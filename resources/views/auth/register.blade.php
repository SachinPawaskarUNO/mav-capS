@extends('layouts.app')
@section('content')
    <div class="center-block" style="padding-top: 5%">
        <div class="row">
            <div class="center-block" style="width:80%;">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center"><b><h2>Registration Option </h2></b></div><br>
                    <div class="panel-body" style="padding: 2%; align: center">
                        <div align="center"><h4>Are you registering as an Investor or a Borrower?</h4></div><br><br>
                        <div class="center-block" align="center">
                                <div class="center-block">
                                    <a href="{{ url('inv_register') }}"><button type="button" class="btn btn-primary btn-lg">Investor</button></a>   Or
                                    <a href="{{ url('bor_register') }}"><button type="button" class="btn btn-primary btn-lg">Borrower</button></a>
                                {{--{!! Form::button('<i class="fa fa-user-o" aria-hidden="true"></i> Investor', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}--}}
                                   {{--Or {!! Form::button('<i class="fa fa-user-circle-o" aria-hidden="true"></i> Borrower', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}--}}
                                </div>
                        </div>
                </div>
                    <div class="panel-heading" align="center"> </div>
            </div>
        </div>
    </div>
@endsection
