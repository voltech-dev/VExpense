<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VExpense</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('media/image/favicon.png') }}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}" type="text/css">
</head>
<style>
    .alert{
        color:crimson;
        
    }
    .img{
        background-image : url("expense1.jpg");
        min-height: 380px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>
<body class="img form-membership" >
{{-- <img src="/expense.jpg" alt="No image"> --}}

<!-- begin::preloader-->
{{-- <div class="preloader">
    <div class="preloader-icon"></div>
</div> --}}
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

    <h3>Register</h3>
    <hr>
    @if ($errors->any)
    <div class="alert ">
        {{-- <strong>Whoops!</strong> There were some problems with your input.<br>       --}}
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{$error}}</li> 
            @endforeach
        </ul>
    </div>
    
    @endif
    <!-- form -->
     <form method="POST" action="{{ url('/registrationsave') }}">
            @csrf

        <div class="form-group row">
            <label  class="col-sm-3 col-form-label col-form-label-sm">Username</label>
            <div class="col-sm-9">
                <input class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter Your Name" type="text" name="name" autocomplete="off"  required autofocus>
            </div> 
        </div>
        <div class="form-group row">
            <label  class="col-sm-3 col-form-label col-form-label-sm">Email ID</label>
            <div class="col-sm-9">
                <input class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter your Email-ID" type="email" name="email" required autocomplete="current-password">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-3 col-form-label col-form-label-sm">Password</label>
            <div class="col-sm-9">
                <input class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter your Password" type="password" name="password" required autocomplete="current-password">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-square btn-block">Register</button><br>
        {{-- <a href="{{ route('register') }}">Login </a> --}}
        
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="{{ asset('vendors/bundle.js') }}"></script>

<!-- App scripts -->
<script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>
