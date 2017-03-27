
@extends('layouts.app')

@section('content')
<div class="col-md-10 col-md-offset-1">
        <h2 class="text-center">Investor Application</h2>
    <table class="table table-striped table -bordered table hover">
        <tbody>
        <tr class="bg-info">
        <tr>
            <td>First Name</td>
            <td>{{$invapp->inv_first_name}}</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>{{$invapp->inv_last_name}}</td>
        </tr>
        <tr>
            <td>Investor Identifictaion Number</td>
            <td>{{$invapp->inv_identification_card_number}}</td>
        </tr>
        <tr>
            <td>Investor Date Of birth</td>
            <td>{{$invapp->inv_date_of_birth}}</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>{{$invapp->inv_gender}}</td>
        </tr>
        <tr>
            <td>Street Address</td>
            <td>{{$invapp->inv_street}}</td>
        </tr>
        <tr>
            <td>City</td>
            <td>{{$invapp->inv_city}}</td>
        </tr>
        <tr>
            <td>State</td>
            <td>{{$invapp->inv_state}}</td>
        </tr>
        <tr>
            <td>Zipcode</td>
            <td>{{$invapp->inv_zipcode}}</td>
        </tr>
        <tr>
            <td>Country</td>
            <td>{{$invapp->inv_country}}</td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>{{$invapp->inv_phonenumber}}</td>
        </tr>
        <tr>
            <td>Investor Identity</td>
            <td>{{$invapp->inv_identity}}</td>
        </tr>
        <tr>
            <td>ainvestor Agreement</td>
            <td>{{$invapp->inv_agree_terms}}</td>
        </tr>
        <tr>
            <td>Investor Income</td>
            <td>{{$invapp->inv_income}}</td>
        </tr>
        <tr>
            <td>Investor Net Worth</td>
            <td>{{$invapp->inv_net_worth}}</td>
        </tr>
        <tr>
            <td>Investor Estimated p2p</td>
            <td>{{$invapp->inv_estimated_p2p}}</td>
        </tr>

        <tr>
            <td>Investor Risk Tolerance</td>
            <td>{{$invapp->inv_risk_tolerance}}</td>
        </tr>

        <tr>
            <td>Investor Stock Market</td>
            <td>{{$invapp->inv_stock_market}}</td>
        </tr>

        <tr>
            <td> Investor Bonds Notes</td>
            <td>{{$invapp->inv_bonds_notes}}</td>
        </tr>

        <tr>
            <td>Investor Mutual Funds</td>
            <td>{{$invapp->inv_mutual_funds}}</td>
        </tr>
        <tr>
            <td>Investor SME Business</td>
            <td>{{$invapp->inv_sme_business}}</td>
        </tr>
        <tr>
            <td>Investor p2p Lending</td>
            <td>{{$invapp->inv_p2p_lending}}</td>
        </tr>
        </tbody>
    </table>
    <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
</div>
@stop
