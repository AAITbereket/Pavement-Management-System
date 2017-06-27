<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PMS-AACR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="homepage__/materialize/css/materialize.css" rel="stylesheet" type="text/css"/>

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
        <link href="homepage__/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="homepage__/css/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="homepage__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="homepage__/css/uniform.default.css" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="homepage__/css/login.css" rel="stylesheet" type="text/css">
        <!-- BEGIN THEME STYLES -->
        <link href="homepage__/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="homepage__/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="homepage__/css/layout.css" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="homepage__/css/grey.css" rel="stylesheet" type="text/css"/>
        <link href="homepage__/css/custom.css" rel="stylesheet" type="text/css"/>

        <!-- Styles -->
        <style>
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .form-group input {
                font-size: 15px;
            }

        </style>

    </head>
    <body style="background-color: #c0c6c2;">
        {{--<div class="row">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@if (Auth::check())--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ url('/login') }}">Login</a>--}}
                        {{--<a href="{{ url('/register') }}">Register</a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--@endif--}}

        {{--</div>--}}
        <br/><br/><br/>
         <div class="container" >

             <div class="card" style="height: 74px; padding: 1px 20px 0px 35px; background-color: #F1F3FA;">
                 <h1 class="title" style="color:#4db3a5;">  Addis Ababa City Roads Pavement Management System </h1>
             </div>



            <div class="row">
                <div class="col-md-8" >

                    <br/><br/>
                    <div class="carousel carousel-slider center" data-indicators="true">
                        <div class="carousel-fixed-item" style="text-align: left; padding-left: 40px;">
                            <h2 class="white-text" style="background-color: #0006; font-weight: 500;"> Ensuring better pavement management system </h2>
                        </div>
                        <div class="carousel-item white-text" href="#one!" style="background-image: url(/Login__/img/bg1.JPG); background-size: cover;">
                            {{--<h2>First Panel</h2>--}}
                            {{--<p class="white-text">This is your first panel</p>--}}
                        </div>
                        <div class="carousel-item white-text" href="#two!" style="background-image: url(/Login__/img/ring_Road_2.JPG); background-size: cover;">
                            {{--<h2>Second Panel</h2>--}}
                            {{--<p class="white-text">This is your second panel</p>--}}
                        </div>
                        <div class="carousel-item white-text" href="#three!" style="background-image: url(/Login__/img/ring_Road_3.JPG); background-size: cover;">
                            {{--<h2>Third Panel</h2>--}}
                            {{--<p class="white-text">This is your third panel</p>--}}
                        </div>
                    </div>

                </div>

                <div class="col-md-3 login">

                    {{--<br/>--}}
                    <div class="content col-md-12">
                        <!-- BEGIN LOGIN FORM -->
                        <form class="login-form" method="post" id="signin"  action="{{ url('/login') }}" >
                            {{ csrf_field() }}
                            <h3 class="form-title">Sign In</h3>
                            <div class="form-group">
                                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                <label class="control-label visible-ie8 visible-ie9"> Email </label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong style="color:#ff8e83;">{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Password</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success uppercase">Login</button>
                                <a id="register" style="float: right;"> <h4>register</h4> </a>
                            </div>
                        </form>

                        <form class="login-form " action="{{ url('/register') }}" method="post" id="signup">
                            {{csrf_field()}}
                            <h3 class="form-title"> Sign Up </h3>
                            <div class="form-group">
                                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                <label class="control-label visible-ie8 visible-ie9">Username</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="name"/>
                            </div>
                            <div class="form-group">
                                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                <label class="control-label visible-ie8 visible-ie9">email</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="email" name="email"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Password</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Confirm Password</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirm Password" name="password_confirmation"/>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success uppercase">Sign Up</button>
                                <a id="sign_in" style="float: right;" onclick=" $('#signup').hide(); $('#signin').show(); "> <h4>Sign In</h4> </a>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

         </div>
    </body>

    <script src="homepage__/js/jquery.min.js" type="text/javascript"></script>
    <script src="homepage__/materialize/js/materialize.js"></script>

<script>
    $('.carousel.carousel-slider').carousel({fullWidth: true});

    $(document).ready(function(){
        $('#signup').hide();

        $('#register').click(function(){
            $('#signin').hide();
            $('#signup').show();
        });
        $('#sign_in').click(function(){
            $('#signup').hide();
            $('#signin').show();
        });

        $('.carousel').carousel({dist:0});
        window.setInterval(function(){$('.carousel').carousel('next')},4000)
    });
</script>

</html>
