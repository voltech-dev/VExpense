<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VDMS</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('media/image/favicon.png') }}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">
     <!--   @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

     logo 
    <div id="logo">
        <img class="logo" src="{{ asset('media/image/logo.png') }}" alt="image">
        <img class="logo-dark" src="{{ asset('media/image/logo-dark.html') }}" alt="image">
    </div>
    <!-- ./ logo -->

    <h3>Sign in</h3>
    <hr>
    <!-- form -->
     <form method="POST" action="{{ route('login') }}">
            @csrf

        <div class="form-group row">
            <label  class="col-sm-3 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-9">
                <input class="form-control form-control-sm" id="colFormLabelSm" placeholder="Email ID" type="email" name="email" :value="old('email')" required autofocus>
            </div> 
        </div>
        <div class="form-group row">
            <label  class="col-sm-3 col-form-label col-form-label-sm">Password</label>
            <div class="col-sm-9">
                <input class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter your Password" type="password" name="password" required autocomplete="current-password">
            </div>
        </div>
        <div class="form-group row d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="#">Reset password</a>
        </div>
        <button type="submit" class="btn btn-primary btn-square btn-block">Sign in</button>
        
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="{{ asset('vendors/bundle.js') }}"></script>

<!-- App scripts -->
<script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>
