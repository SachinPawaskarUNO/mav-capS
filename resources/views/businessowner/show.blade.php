@extends('layouts.app')

@section('content')
<h1>Business Owner Application</h1>

 <div="container">
 <table class="table table-striped table -bordered table hover">
   <tbody>
<tr class="bg-info">
  <tr>
    <td>First Name<span style="color:red"></span></td>
    <td>{{$businessowner->bo_first_name}}</td>
  </tr>
  <tr>
    <td>Last Name<span style="color:red"></span></td>
    <td>{{$businessowner->bo_last_name}}</td>
  </tr>
  <tr>
    <td>Business Owner Identifictaion Number<span style="color:red"></span></td>
    <td>{{$businessowner-> 	bo_identification_card_number}}</td>
  </tr>
  <tr>
    <td>business Owner Date Of birth<span style="color:red"></span></td>
    <td>{{$businessowner->bo_date_of_birth}}</td>
  </tr>
  <tr>
    <td>Gender<span style="color:red"></span></td>
    <td>{{$businessowner->bo_gender}}</td>
  </tr>
  <tr>
    <td>Street Address<span style="color:red"></span></td>
    <td>{{$businessowner->bo_personal_street}}</td>
  </tr>
  <tr>
    <td>City<span style="color:red"></span></td>
    <td>{{$businessowner->bo_personal_city}}</td>
  </tr>
  <tr>
    <td>State<span style="color:red"></span></td>
    <td>{{$businessowner->bo_personal_state}}</td>
  </tr>
  <tr>
    <td>Zipcode<span style="color:red"></span></td>
    <td>{{$businessowner->bo_personal_zipcode}}</td>
  </tr>
  <tr>
    <td>Country<span style="color:red"></span></td>
    <td>{{$businessowner->bo_personal_country}}</td>
  </tr>
  <tr>
    <td>Phone Number<span style="color:red"></span></td>
    <td>{{$businessowner->bo_personal_phonenumber}}</td>
  </tr>
  <tr>
    <td>Business Street<span style="color:red"></span></td>
    <td>{{$businessowner->bo_business_street}}</td>
  </tr>
  <tr>
    <td>Business City<span style="color:red"></span></td>
    <td>{{$businessowner-> 	bo_business_city}}</td>
  </tr>
  <tr>
    <td>Business State<span style="color:red"></span></td>
    <td>{{$businessowner-> 	 	bo_business_state}}</td>
  </tr>
  <tr>
    <td>Business Zip code<span style="color:red"></span></td>
    <td>{{$businessowner-> 	bo_business_zipcode}}</td>
  </tr>
  <tr>
    <td>Business County<span style="color:red"></span></td>
    <td>{{$businessowner->bo_business_country}}</td>
  </tr>

  <tr>
    <td>Business Phone Number<span style="color:red"></span></td>
    <td>{{$businessowner->bo_business_phonenumber}}</td>
  </tr>

  <tr>
    <td>Business Industry<span style="color:red"></span></td>
    <td>{{$businessowner->bo_industry}}</td>
  </tr>

  <tr>
    <td> Business Owner Legal Entity<span style="color:red"></span></td>
    <td>{{$businessowner->bo_legal_entity}}</td>
  </tr>

  <tr>
    <td>Business Owner Registration Number<span style="color:red"></span></td>
    <td>{{$businessowner->bo_registration_number}}</td>
  </tr>
  <tr>
    <td>Business Owner Registration Year<span style="color:red"></span></td>
    <td>{{$businessowner-> 	bo_registration_year}}</td>
  </tr>
  <tr>
    <td>Business Owner Court Judgement<span style="color:red"></span></td>
    <td>{{$businessowner->bo_court_judgement}}</td>
  </tr>
  <tr>
    <td>Business Owner Bank Name<span style="color:red"></span></td>
    <td>{{$businessowner->bo_bank_name}}</td>
  </tr>

  <tr>
    <td>Business Owner Bank Account<span style="color:red"></span></td>
    <td>{{$businessowner->bo_bank_account}}</td>
  </tr>
  <tr>
    <td>Business Owner Agree Terms<span style="color:red"></span></td>
    <td>{{$businessowner->bo_agree_terms}}</td>
  </tr>
  <tr>
      <td>Business Owner Agree Fees<span style="color:red"></span></td>
    <td>{{$businessowner->bo_agree_fees}}</td>
  </tr>

</div>




   </tbody>
</table>
<a href="{{url('bo_review')}}" class="btn btn-primary">Back</a>
</div>
@stop
