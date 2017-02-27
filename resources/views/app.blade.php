<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


</head>
<body>
<div class="container"><br>
    <div class="row">
        <div class="col-md-6"><img src="{{asset('images/logo.png')}}" class="img-fluid" alt="Capsphere" width="175" height="45">
            <br><a href="{{ action('ManagerController@index') }}"><h3>Administrator Home</h3></a>
        </div>
        <br><div class="col-md-6"><span class="pull-right"><button type="button" class="btn btn-info">Logout</button></span></div>
    </div>
</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>