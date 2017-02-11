@extends('layouts.app')
@section('content')
    <div class="container">
        <img src="{{asset('/images/homePage.png')}}" class="img-fluid" alt="Home Page Image">
        <p id="text">
            SME Financing made simple,<br>
            while diversifying investor returns
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-block">
                      <h1 class="card-title">Financing</h1>
                        <img style="float:left;width: 50%;padding: 5px" src="{{asset('/images/financing.png')}}" alt="Financing Image">
                        <p class="card-text">CapSphere Services enables SMEs to raise capital to fund business expansion and operational activities in an efficient, transparent and consumer-friendly manner.
                            We work with qualified SMEs to enhance their fundraising capabilities, with the goal of improving the maturity and effectiveness of capital market participants. Our operations are
                            digitally-enabled with no branch infrastructure and the use of cutting-edge technology allows us to optimise costs and deliver better value to our clients.</p>
                    </div>
                    <img style="float:left;width: 100%;padding: 5px" src="{{asset('/images/awschart.png')}}" alt="AWS Chart Image">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-block">
                        <h1 class="card-title">World Class Security to protect your data</h1>
                        <img style="width: 110%" src="{{asset('/images/aws.png')}}" alt="AWS Image">
                        <p class="card-text" style="padding:5px;font-size: 24px;"><b>We invest to protect your data</b> and our platform comes with these benefits:</p>
                        <ul class="list-group list-group-flush" style="font-size: 20px">
                            <li class="list-group-item">Infrastructure Security</li>
                            <li class="list-group-item">DDos Mitigation</li>
                            <li class="list-group-item">Data Encryption</li>
                            <li class="list-group-item">Multi-Factor Authentication</li>
                            <li class="list-group-item">24/7 Data Monitoring and Protection</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 style="text-align: center">What our customers say about us</h1>
        <div class="row">
            <div class="col-lg-4" style="padding:0">
                <blockquote class="card-blockquote" style="padding:0">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <footer>Someone famous</footer>
                </blockquote>
            </div>
            <div class="col-lg-4" style="padding:0">
                <blockquote class="card-blockquote" style="padding:0">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <footer>Someone famous</footer>
                </blockquote>
            </div>
            <div class="col-lg-4" style="padding:0">
                <blockquote class="card-blockquote" style="padding:0">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <footer>Someone famous</footer>
                </blockquote>
            </div>
        </div>
        </div>
    </div>

@endsection