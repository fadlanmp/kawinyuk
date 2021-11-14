<!DOCTYPE html>
<html>

<head>
    <Title>KawinYuk! - Login</Title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/kawinyuk.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="logregis-grid">
        <div class="logregisimg-container" id="grad">
            <h1 class="logregis-title">KawinYuk!</h1>
            <img src="{{ url('assets/img/titleimg.png') }}" alt="logo" class="logregisimg">
        </div>
        <div class="logregis-form">
            <div class="logregis-row">
                <h2 class="logregisform-title">KawinYuk!</h2>
                <h4 class="logregisform-sub">Let’s get started</h4>
            </div>
            <div class="logregis-row">
                <form action="/login" method="POST">
                    @csrf
                    <div class="input-icons">
                        <i class="fa fa-user icon"></i>
                        <input class="logregis-input" type="email" name="email" id="email" placeholder="Email" autofocus required>
                    </div>
                    <div class="input-icons">
                        <i class="fa fa-lock icon"></i>
                        <input class="logregis-input" type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="login">
                        <input type="submit" class="logregis-btn" value="Login">
                    </div>
                </form>
            </div>
            <div class="logregis-row">
                <p style="font-size: 12px;">Don't have an account? <a href="/signup">Sign up!</a></p>
            </div>
            <div class="logregis-row">
                <div class="or">
                    <div class="ortitle">
                        <hr>
                    </div>
                    <div class="ortitle">
                        <p>or</p>
                    </div>
                    <div class="ortitle">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="logregis-row">
                <div class="socmedgrid">
                    <div class="socmed-card">
                        <a class="socmed-img" href="#keauthfb"><img src="{{ url('assets/img/fb.png') }}" alt="fb" style="width: 100%;"></a>
                    </div>
                    <div class="socmed-card">
                        <a class="socmed-img" href="#keauthgoogle"><img src="{{ url('assets/img/googlenormal.png') }}" alt="googlenormal" style="width: 100%;"></a>
                    </div>
                    <div class="socmed-card">
                        <a class="socmed-img" href="#keauthtwitter"><img src="{{ url('assets/img/twitternormal.png') }}" alt="twitternormal" style="width: 100%;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>