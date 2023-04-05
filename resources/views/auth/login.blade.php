<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory System</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->

        <section class="sign-in">
            <h2 class="login-title" style="text-align: center"></h2>


            <style>
                .h1 {
                display: block;
                font-size: 70px;
                text-align: center;
                font-weight: 600;
                
                
                                }
                    

                </style>
              
            <div class="container">
               
                <div class="signin-content">
                   
                    <div class="signin-image">
                        <figure><img class="logo" src="{{ asset('frontend') }}/images/DICT_Logo.png" alt="sing up image"></figure>

                        <style>
                        .login-title{
                            text-align: center;
                            letter-spacing: 1em; 
                            color: rgb(82, 82, 145);

                            
                        }
                         
                        </style>
                    <br>
                    <br>    
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    

                
                    </div>

                    <div class="signin-form">
                        <br>
                        <br>
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                        @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required="" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required=""/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                
                            </div>
                          
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                
                            </div>
                            <div><a href="{{ route('register') }}" class="signup-image-link">Create an account</a></div>
                        </form>
                        <div class="social-login">
                            
                           
                            <ul class="socials">
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('frontend') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
</body>
</html>