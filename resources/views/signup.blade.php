<!DOCTYPE html>
<html>
    <head>
        <Title>KawinYuk! - Sign Up</Title>
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
            <div class="regis-form">
                <div class="logregis-row">
                    <h2 class="logregisform-title">KawinYuk!</h2>
                    <h4 class="logregisform-sub">Let’s get started</h4>
                </div>
                <div class="logregis-row">
                    <form action="/api/register" method="POST">
                        @csrf
                        <div class="input-icons">
                            <i class="fa fa-user icon"></i>
                            <input class="logregis-input" type="text" name="vendorName" id="vendorName" placeholder="Username">
                        </div>
                        <div class="input-icons">
                            <i class="fa fa-envelope icon"></i>
                            <input class="logregis-input" type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="input-icons">
                            <i class="fa fa-lock icon"></i>
                            <input class="logregis-input" type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="input-icons">
                            <i class="fa fa-map-marker icon"></i>
                            <input class="logregis-input" type="text" name="vendorAddress" id="vendorAddress" placeholder="Address">
                        </div>
                        <div class="login">
                            <input type="submit" class="logregis-btn" value="Sign Up">
                        </div>
                    </form>
                </div>
                <div class="logregis-row">
                    <p style="font-size: 12px;">Already have an account? <a href="/login">Login!</a></p>
                </div>
            </div>
        </div>
    </body>
</html>