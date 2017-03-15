
@extends('layouts.app')

@section('content')
    <h1>Investor Application</h1>

    <div="container">
    <table class="table table-striped table -bordered table hover">
        <tbody>
        <tr class="bg-info">
        <tr>
            <td>First Name<span style="color:red"></span></td>
            <td>{{$investor->inv_first_name}}</td>
        </tr>
        <tr>
            <td>Last Name<span style="color:red"></span></td>
            <td>{{$investor->inv_last_name}}</td>
        </tr>
        <tr>
            <td>Investor Identifictaion Number<span style="color:red"></span></td>
            <td>{{$investor-> 	inv_identification_card_number}}</td>
        </tr>
        <tr>
            <td>Investor Date Of birth<span style="color:red"></span></td>
            <td>{{$investor->inv_date_of_birth}}</td>
        </tr>
        <tr>
            <td>Gender<span style="color:red"></span></td>
            <td>{{$investor->inv_gender}}</td>
        </tr>
        <tr>
            <td>Street Address<span style="color:red"></span></td>
            <td>{{$investor->inv_street}}</td>
        </tr>
        <tr>
            <td>City<span style="color:red"></span></td>
            <td>{{$investor->inv_city}}</td>
        </tr>
        <tr>
            <td>State<span style="color:red"></span></td>
            <td>{{$investor->inv_state}}</td>
        </tr>
        <tr>
            <td>Zipcode<span style="color:red"></span></td>
            <td>{{$investor->inv_zipcode}}</td>
        </tr>
        <tr>
            <td>Country<span style="color:red"></span></td>
            <td>{{$investor->inv_country}}</td>
        </tr>
        <tr>
            <td>Phone Number<span style="color:red"></span></td>
            <td>{{$investor->inv_phonenumber}}</td>
        </tr>
        <tr>
            <td>Investor Identity<span style="color:red"></span></td>
            <td>{{$investor->inv_identity}}</td>
        </tr>
        <tr>
            <td>ainvestor Agreement<span style="color:red"></span></td>
            <td>{{$investor-> 	inv_agree_terms}}</td>
        </tr>
        <tr>
            <td>Investor Income<span style="color:red"></span></td>
            <td>{{$investor-> 	 	inv_income}}</td>
        </tr>
        <tr>
            <td>Investor Net Worth<span style="color:red"></span></td>
            <td>{{$investor-> 	inv_net_worth}}</td>
        </tr>
        <tr>
            <td>Investor Estimated p2p<span style="color:red"></span></td>
            <td>{{$investor->inv_estimated_p2p}}</td>
        </tr>

        <tr>
            <td>Investor Risk Tolerance<span style="color:red"></span></td>
            <td>{{$investor->inv_risk_tolerance}}</td>
        </tr>

        <tr>
            <td>Investor Stock Market<span style="color:red"></span></td>
            <td>{{$investor->	inv_stock_market}}</td>
        </tr>

        <tr>
            <td> Investor Bonds Notes<span style="color:red"></span></td>
            <td>{{$investor->	inv_bonds_notes}}</td>
        </tr>

        <tr>
            <td>Investor Mutual Fundsr<span style="color:red"></span></td>
            <td>{{$investor->inv_mutual_funds}}</td>
        </tr>
        <tr>
            <td>Investor Sme Business<span style="color:red"></span></td>
            <td>{{$investor-> 		inv_sme_business}}</td>
        </tr>
        <tr>
            <td>Investor p2p Lending<span style="color:red"></span></td>
            <td>{{$investor->inv_p2p_lending}}</td>
        </tr>
        <tr>
            <td>Investor Created at<span style="color:red"></span></td>
            <td>{{$investor->created_at}}</td>
        </tr>

        <tr>
            <td>Investor updated at<span style="color:red"></span></td>
            <td>{{$investor->updated_at}}</td>
        </tr>


        </div>




        </tbody>
    </table>
    <a href="{{url('ia_review')}}" class="btn btn-primary">Back</a>
    </div>
@stop
