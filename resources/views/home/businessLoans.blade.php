@extends('layouts.app')
@section('content')

    <div class="container" >
        <div class="col-sm-12" >
            <h1 ><b>Business Loans</b></h1>
            <div class="container">
                <link rel ="stylesheet" src ="css/app.css">
                <div class="container">
                    <img src="{{asset('/images/borrower_amended.png')}}" class="img-responsive" alt="Investment Image1">
                    <br>
                    <br>
                    <img src="{{asset('/images/details_tab.png')}}" class="img-responsive" alt="simple application" width="1500">
                    <br>
                    <br>
                    <img src="{{asset('/images/simple_application.png')}}" class="img-responsive" alt="simple application" width="1500">

                    <div class="container center-block">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-block"><br>
                        <h4><br><b>Join the New Wave of Lending </b></h4>
                       <br><br><img src = {{asset('/images/alternativemoney.jpg')}} align="center" alt= "alternative methods of raising funds" height = "100" width = "100">

                    </div>
                </div>
            </div>
            <div class="col-sm-6" align="left">
                <div class="card">
                    <div class="card-block">
                        <br><br><br><br><h4><br><br><b>Alternative Methods of Raising Funds</b></h4>
                        <p class="card-text" style="padding:5px">There are several alternative methods for raising funds. Alternative financing activities through 'online marketplaces' are reward-based crowdfunding, equity crowdfunding, peer-to-peer consumer and business lending, invoice trading third party payment platforms.</p>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container center-block">
            <div class="row">
                <div class="col-sm-4" align="left">
                    <div class="card">
                        <div class="card-block"  >
                            <h4><b>SME Dedicated Operations</b></h4>
                            <p class="card-text" style="padding:5px">SME Lines of Credit provide dedicated bank financing – frequently for longer tenors than are generally available in the market – to support SMEs for investment, growth, export and diversification.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" align="right">
                    <div class="card">
                        <div class="card-block">
                            <img src = "{{asset('/images/sme.jpg')}}" alt = "alternative methods of raising funds" height = "100" width = "100" >
                        </div>
                    </div>
                </div>
            </div>
            <br>

                <div class="row">
                    <div class="col-sm-6" >
                        <div class="card">
                            <div class="card-block">
                                <img src = "{{asset('/images/bankrates.jpg')}}" alt="alternative methods of raising funds" height = "100" width = "100" >

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-block" >
                                <h4><b>Industry Leading Interest Rates</b></h4>
                                <p class="card-text" style="padding:5px">There are several alternative ways for raising money. These include method1, method2, method3, method4 and many more.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>

                    <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6" align="left">
                            <div class="card" >
                                <div class="card-block" >
                                    <h4><b>Quick Financing Decisions</b></h4>
                                    <p class="card-text" style="padding:5px">There are several alternative ways for raising money. <br> These include method1, method2, method3, method4 and many more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" align="right">
                            <div class="card">
                                <div class="card-block" >
                                    <img src = "{{asset('/images/quickdecisions.png')}}" alt = "alternative methods of raising funds" height = "80" width = "80">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        </div>
    </div>
    </div>
    </div>
<br>
    <br>
    <br>
    <br>
        </div></div>
@endsection
