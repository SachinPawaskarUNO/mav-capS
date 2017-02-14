@extends('layouts.app')
@section('content')
    <link rel ="stylesheet" src ="css/app.css">
    <div class="container">
        <img src="{{asset('/images/investmentHomePicture1.png')}}" class="img-fluid" alt="Investment Image1">

        </br>
        </br>
        </br>
        <div class="container">
            <div class="col-sm-6">

            </div>
            <div class="   col-sm-6">
                <h4 class="card-title" style="color: #122b40;font-weight:bold;font-size: 1cm;">WHY INVEST?</h4>
            </div>
        </div>
        <div class="container">
        <div class="col-sm-4">
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            <img style="float:left;width: 210px ;padding: 5px" src="{{asset('/images/investNow.jpg')}}" class="img-responsive">
        </div>
        <div class="   col-sm-8">
            </br>
            <table class=" investmentTableLayout  table">
                <tr> <td> <img style="float:left;width: 85px ;padding: 5px" src="{{asset('/images/whyInvestPic1.jpg')}}" class="img-responsive"> </td>
                    <td>  </br><b>Low Capital Requirements </b></td>
                     <td> </br>Invest as little as RM 1000 per loan </td>
                </tr>
                <tr> <td> <img style="float:left;width: 90px ;padding: 5px" src="{{asset('/images/whyInvestPic2.jpg')}}" class="img-responsive"> </td>
                    <td> </br><b>Uncap Earnings </b></td>
                    <td> </br>Higher Interest Rates as compared to traditional avenues </td>
                </tr>
                <tr> <td> <img style="float:left;width: 90px ;padding: 5px" src="{{asset('/images/whyInvestPic3.jpg')}}" class="img-responsive"> </td>
                    <td> </br><b>Simple Process </b></td>
                    <td> </br>Simplifies investment process with only few clicks </td>
                </tr>
                <tr> <td> <img style="float:left;width: 90px ;padding: 5px" src="{{asset('/images/whyInvestPic4.jpg')}}" class="img-responsive"> </td>
                    <td> </br><b>SME Loans Transparency </b></td>
                    <td> </br>Greater transparency on rates for SME'S(Initially through capsphere credit framework)  </td>
                </tr>
                <tr> <td> <img style="float:left;width: 90px ;padding: 5px" src="{{asset('/images/whyInvestPic5.jpg')}}" class="img-responsive"> </td>
                    <td> </br><b>Capital Markets </b></td>
                    <td> </br>Increase the size and maturity of regional capital markets and investor sofistication </td>
                </tr>
            </table>
        </div>
    </div>
        <div class="thumbnail">
            <img style="height: 10cm"  src="{{asset('/images/investmentMadeEasy.jpg')}}" class="img-fluid" alt="Invesment Image2">
            <div class="wrapper">
                <div class="caption post-content">
                    <h3>INVESTMENT MADE IN EASY STEPS</h3>
                    <div class="media">
                        <table class="investmentTableLayout process  table">
                            <tr>
                                <td><img style="float:left;width: 90px ;padding: 5px" src="{{asset('/images/step1.jpg')}}" class="img-responsive"></td>
                                <td>  </br><b>Step 1- Register </b></td>
                                <td><img style="float:left;width: 90px ;padding: 5px" src="{{asset('/images/step2.jpg')}}" class="img-responsive"></td>
                                <td>  </br><b>Step 2- Search for SME </b></td>
                                <td><img style="float:left;width: 90px ;padding: 5px" src="{{asset('/images/step3.jpg')}}" class="img-responsive"></td>
                                <td>  </br><b>Step 3- Invest </b></td>
                                <td><img style="float:left;width: 90px ;padding: 5px" src="{{asset('/images/step4.jpg')}}" class="img-responsive"></td>
                                <td>  </br><b>Step 4- Earn Returns </b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
















                <div class="col-sm-3">
                </div>
            </div>
        </div>
@endsection