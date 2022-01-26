<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alattar company</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/ui.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/responsive.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/all.min.css")}}" rel="stylesheet">
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
</head>

<!------ Include the above in your HEAD tag ---------->
<body>
<section class="vh-100" style="background-color: #edf3f3;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
    <form type="submit" action="/user/register" method="POST" class="card shadow-2-strong rounded-2">
        @csrf
        <div class="card-body p-5 text-center">
        <img class="col-2 "  src="{{asset("img/lo.png")}}"/>

        <h2>Registration Form</h2>
        </div>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" name="name" placeholder="Full Name" class="form-control" autofocus>
                <span class="help-block">Last Name and First Name, eg : Mahmoud Hamed </span>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" placeholder="example@something.com" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">

        <label for="password" class="col-sm-3 control-label">Password confirm </label>

            <div class="col-sm-9">
                <input type="password" name="password_confirm" placeholder="Password" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Gender</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="female">Female
                        </label>
                    </div>
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="male">Male
                        </label>
                    </div>
                    <div class="col-sm-4">

                    </div>
                </div>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I accept <a href="#">terms</a>
                    </label>
                </div>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form> <!-- /form -->
            </div> <!-- ./container --></div></div></section>
</body>
</html>
