<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png') }}">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('login/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('login/css/style.css') }}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('assets/img/delivery.png') }}" alt="sing up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Konekte</h2>
                        <form method="POST" class="register-form" id="login-form" action="/connection">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" value="{{ old('email') }}" name="email" id="your_name" placeholder="Antre imel ou"/>

                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Antre kod sekrew"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Konekte"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Konekte ak</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('Modal.AlertUpdate')

    </div>

    <!-- JS -->
    {{-- <script src="{{ asset('login/vendor/jquery/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('login/js/main.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>
