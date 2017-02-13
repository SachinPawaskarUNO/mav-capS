@extends('layouts.app')
@section('content')

    <div class="container" >
        <div class="col-sm-12" >
            <h1 ><b>Business Loans </b></h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-block">

                        <img src = {{asset('/images/borrower.png')}}  height="400" width="1050">

                        <p id="cap">
                            Grow your business,<br>
                            Funded by interested customers
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-11">
                <div class="card">
                    <div class="card-block">
    <table class="Business Loans table">
        <thead>
        <tr><th> Borrow MYR 50,000– MYR3mm <br> unsecured   </th>
            <th> |<br>| </th>
            <th>Online application. Decision <br> in 2 working days  </th>
            <th> | <br>|</th>
            <th>Flexible terms up to <br> 3 years </th>
            <th> | <br>|</th>
            <th>Dedicated help <br> desk</th>
        </tr></table>
        </thead>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">


        <div class="row">
            <div class="col-sm-8">
                <div class="card">

                    <div class="card-block" align="left" >
                        <table style ="background-color:#122b40" class ="simple application" height="50" width="1050">
            <thead>
            <tr>
                <th><b><font color="WHITE" size="05">Simple Application</font></b><br><br></th>
            </tr>
            <tr>
                <th><b><font color="WHITE" type="calibri">step 1 : 10 minutes to create a full application</font></b><br><br></th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <td><b><font color="WHITE">step 2 : 2 working days to get a decision on the investment note application</font></b><br><br></td>
            </tr>

            <td><b><font color="WHITE">step 3 : Up to 7 days to get funding</font></b><br><br></td>
            </tr>
            </tbody>
        </table>
                    </div>
                </div>
            </div>
                     </div>
                </div>
    <div class="container">

        <div class="row">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-block" >
                        <h4><br><b>Join the New Wave of Lending </b></h4>
                       <br><br><img src = {{asset( '/images/alternativemoney.jpg')}} alt = "alternative methods of raising funds" height = "100" width = "100" align="left">

                    </div>
                </div>
            </div>
            <div class="col-sm-6" align="left">
                <div class="card">
                    <div class="card-block">
                        <br><br><br><h4><br><br><b>Alternative Methods of Raising Funds</b></h4>
                        <p class="card-text" style="padding:5px">There are several alternative methods for raising funds. Alternative financing activities through 'online marketplaces' are reward-based crowdfunding, equity crowdfunding, peer-to-peer consumer and business lending, invoice trading third party payment platforms.</p>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container center-block">
            <div class="row">
                <div class="col-sm-6" align="left">
                    <div class="card">
                        <div class="card-block"  >
                            <h4><b>SME Dedicated Operations</b></h4>
                            <p class="card-text" style="padding:5px">SME Lines of Credit provide dedicated bank financing – frequently for longer tenors than are generally available in the market – to support SMEs for investment, growth, export and diversification..</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" align="center">
                    <div class="card">
                        <div class="card-block">
                            <img src = "/images/sme.jpg" alt = "alternative methods of raising funds" height = "100" width = "100" >
                        </div>
                    </div>
                </div>
            </div>
            <br>

                <div class="row">
                    <div class="col-sm-6" align="center">
                        <div class="card">
                            <div class="card-block">
                                <img src = "/images/bankrates.jpg" alt = "alternative methods of raising funds" height = "100" width = "100" >

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
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
                        <div class="col-sm-6" align="left">
                            <div class="card">
                                <div class="card-block" >
                                    <img src = "/images/quickdecisions.png" alt = "alternative methods of raising funds" height = "80" width = "80">

                                </div>
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
@endsection
