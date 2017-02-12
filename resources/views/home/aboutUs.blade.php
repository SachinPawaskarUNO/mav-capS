@extends('layouts.app')
@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href="css/app.css">

    </head>
    <body>
   <div class = "aboutimg" >
       <img src="images/logo.png" alt="image" height="200" width="800" style=" margin:0 auto;" >
       </div>
    <div class="aboutdown"></div>
<div class ="abouttext">
    <p>
        <h2>What We Do?</h2>
    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
    totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt,
    explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur
    magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia
    quo voluptas nulla pariatur?
    </p>
</div>


    <div class="aboutform" id="News Letter Sign Up" >
        {{ csrf_field() }}
        <p><b>News Letter Sign Up</b></p>

        <br>

    First Name: <input type="text" STYLE="height:30px" id="First Name">
        <br>
        <br>
    Last Name: <input type ="text" STYLE="height:30px" id="Last Name">
        <br>
        <br>
    email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type ="text" STYLE="height:30px"id="Email">
        <br>
        <br>
        <form class="form-inline">
            <label class="mr-sm-2" for="inlineFormCustomSelect" id="User Type">User Type</label>
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                <option selected>Choose...</option>
                <option value="1">Business Owner</option>
                <option value="2">Investor</option>
            </select>
        <br>
        <br>
    <button>Submit</button>

    </div>
</div>
</body>
@endsection