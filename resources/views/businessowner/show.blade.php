@extends('app')
@section('content')
    <h1>Business Owner Application </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>First Name<span style="color:red">*</span></td>
                <td>{{$businessowner->bo_first_name}}</td>
            </tr>
            
            <div id="mandatory text-right"> <span style="color:red">*</span>Indicates mandatory field.</div>

            </tbody>
        </table>
    </div>

@stop
