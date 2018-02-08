@extends('layouts.base')
@section('Title','TOAST')
@section('head')
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans|PT+Sans" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

@endsection
@section('body')
<body class="gradient-yellow">

<header class="no-padding">
    <div class="col-md-2">
        <img class="headerLogo" src="img/ust.png">
        <img class="headerLogo" src="img/FacultyOfEng.png">
    </div>
    <div class="col-md-10 margin-top-15">
        <div class="col-md-12"><h2 class="headerText" style="font-family: 'Encode Sans', sans-serif;"><strong>Thomasian Outcomes Assesment Tool</strong></h2></div>
        <div class="col-md-12"><h4 class="headerText">University of Santo Tomas - Faculty of Engineering</h4></div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 col-md-offset-2">
            <div class="account-wall">
                <img class="profile-img" src="img/TOAsT%20LOGO.png"
                     alt="">

                <form class="form-signin" method="POST"  action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input type="text" class="form-control" name="email" placeholder="Email" required autofocus/>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>


                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input type="password" name="password" class="form-control" placeholder="Password" required/>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <input class="btn btn-lg btn-black btn-block" type="submit" value="Sign in" />


                    <label class="padding-left-20 checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="{{ route('password.request') }}" class="pull-right need-help">Forgot Password? </a><span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p>© Industrial Engineering Dept. 2018</p>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
@endsection
