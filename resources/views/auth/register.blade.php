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

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('login/css/style.css') }}">
</head>
<body>

<div class="main">

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Enskripsyon</h2>
                <form method="POST" action="/registration" class="register-form" id="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Antre non ou" required/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Antre imel ou" required/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="kod sekre" required/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="re_pass" placeholder="konfime kod sekre" required/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Mwen dako ak <a href="#" class="term-service">kndisyon sevis yo</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Anrejistre"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{ asset('login/images/signup-image.jpg') }}" alt="sing up image"></figure>
                <a href="/connection" class="signup-image-link">Mwen gen kont deja</a>
            </div>
        </div>
    </div>
</section>



</div>

    <!-- JS -->
    {{-- <script src="{{ asset('login/vendor/jquery/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('login/js/main.js') }}"></script>
</body>
</html>