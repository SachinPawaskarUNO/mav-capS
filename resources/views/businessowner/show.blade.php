@extends('layouts.app')

@section('content')
<div class="col-md-10 col-md-offset-1">
  <h2 class="text-center">Business Owner Application</h2>
   <table class="table table-striped table-bordered table hover">
     <tbody>
      <tr class="bg-info">
      <tr>
        <td>First Name</td>
        <td>{{$boapp->bo_first_name}}</td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td>{{$boapp->bo_last_name}}</td>
      </tr>
      <tr>
        <td>Business Owner Identifictaion Number</td>
        <td>{{$boapp-> 	bo_identification_card_number}}</td>
      </tr>
      <tr>
        <td>business Owner Date Of birth</td>
        <td>{{$boapp->bo_date_of_birth}}</td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>{{$boapp->bo_gender}}</td>
      </tr>
      <tr>
        <td>Street Address</td>
        <td>{{$boapp->bo_personal_street}}</td>
      </tr>
      <tr>
        <td>City</td>
        <td>{{$boapp->bo_personal_city}}</td>
      </tr>
      <tr>
        <td>State</td>
        <td>{{$boapp->bo_personal_state}}</td>
      </tr>
      <tr>
        <td>Zipcode</td>
        <td>{{$boapp->bo_personal_zipcode}}</td>
      </tr>
      <tr>
        <td>Country</td>
        <td>{{$boapp->bo_personal_country}}</td>
      </tr>
      <tr>
        <td>Phone Number</td>
        <td>{{$boapp->bo_personal_phonenumber}}</td>
      </tr>
      <tr>
        <td>Business Street</td>
        <td>{{$boapp->bo_business_street}}</td>
      </tr>
      <tr>
        <td>Business City</td>
        <td>{{$boapp-> bo_business_city}}</td>
      </tr>
      <tr>
        <td>Business State</td>
        <td>{{$boapp->bo_business_state}}</td>
      </tr>
      <tr>
        <td>Business Zip code</td>
        <td>{{$boapp->bo_business_zipcode}}</td>
      </tr>
      <tr>
        <td>Business County</td>
        <td>{{$boapp->bo_business_country}}</td>
      </tr>

      <tr>
        <td>Business Phone Number</td>
        <td>{{$boapp->bo_business_phonenumber}}</td>
      </tr>

      <tr>
        <td>Business Industry</td>
        <td>{{$boapp->bo_industry}}</td>
      </tr>

      <tr>
        <td> Business Owner Legal Entity</td>
        <td>{{$boapp->bo_legal_entity}}</td>
      </tr>

      <tr>
        <td>Business Owner Registration Number</td>
        <td>{{$boapp->bo_registration_number}}</td>
      </tr>
      <tr>
        <td>Business Owner Registration Year></td>
        <td>{{$boapp-> 	bo_registration_year}}</td>
      </tr>
      <tr>
        <td>Business Owner Court Judgement</td>
        <td>{{$boapp->bo_court_judgement}}</td>
      </tr>
      <tr>
        <td>Business Owner Bank Name</td>
        <td>{{$boapp->bo_bank_name}}</td>
      </tr>
      <tr>
        <td>Business Owner Bank Account</td>
        <td>{{$boapp->bo_bank_account}}</td>
      </tr>
     </tbody>
  </table>
<a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
</div>
@stop
