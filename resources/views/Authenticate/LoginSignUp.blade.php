<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alattar company</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/ui.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/responsive.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/all.min.css")}}" rel="stylesheet">
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
</head>
<body>
<section class="vh-100" style="background-color: #edf3f3;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <form type="submit" action="/login" method="POST" class="card shadow-2-strong" style="border-radius: 1rem;">
                    @csrf
                    <div class="card-body p-5 text-center">
                        <img class="col-3 "  src="{{asset("img/lo.png")}}"/>
                        <h3 class="mb-5">Sign in</h3>

                        <div class="form-outline mb-4">
                            <input name="email" type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                            <label class="form-label" for="typeEmailX-2">Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                            <label class="form-label" for="typePasswordX-2">Password</label>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-start mb-4">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="form1Example3"
                            />
                            <label class="form-check-label" for="form1Example3"> Remember password </label>
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                        <hr class="my-4">



                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body></html>
