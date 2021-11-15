<!DOCTYPE html>
<html>

<head>
    <Title>KawinYuk! - Profile</Title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/kawinyuk.css')}}">
</head>

<body>
    <div class="topnav2">
        <div class="topnav2grid">
            <a href="/home" style="float: left; font-size: 24px; margin-top: -20px;">KawinYuk!</a>
        </div>
        <!-- <div class="topnav2grid">
            <a href="/home">Home</a>
            <a href="#news">Help</a>
            <a href="#about">About Us</a>
            <a href="#contact">Contacts</a>
        </div> -->
        <div class="topnav2grid">
            <div class="topnav2right">
                <a href="/profile">Hai, {{ auth()->user()->vendorName}}</a>
                <a href="/profile"><img src="{{ url('assets/img/user.png') }}" class="minipic"></a>
                <a href="/logout" class="h-loginbtn">Logout</a>
            </div>
        </div>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="h-loginbtn">Logout</button>
        </form>
    </div>
    <div class="profile-container">
        <div class="profile-grid">
            <div class="profile-card">
                <div class="profilecard-grid">
                    <div class="profilecard-content">
                        <div class="profileimg-container">
                            <img src="{{ url('assets/img/user.png') }}" alt="user" class="profileimg">
                        </div>
                        <h2>{{ auth()->user()->vendorName}}</h2>
                        <hr>
                        <a href="#logout" style="color: #BE42C9; font-size: 20px; text-decoration: none;">Log out</a>
                    </div>
                    <div class="profilecard-content" style="margin-left: 50px; width: 200%;">
                        <h2 style="margin-bottom: 30px; color: #BE42C9;">Profil</h2>
                        <p>Nama Lengkap</p>
                        <h3>{{ auth()->user()->vendorName}}</h3>
                        <!-- <p>Tanggal Lahir</p>
                        <h3>8 Desember 2000</h3> -->
                        <p>No. Handphone</p>
                        <h3>{{ auth()->user()->vendorPhone}}</h3>
                        <p>Deskripsi Vendor</p>
                        <h3>{{ auth()->user()->vendorDescription}}</h3>
                        <p>Alamat</p>
                        <h3>{{ auth()->user()->vendorAddress}}</h3>
                    </div>
                    <div class="profilecard-content" style="margin-left: 350px; width: fit-content;">
                        <div class="floatright">
                            <a href="/vendor/posts/create" class="profile-editbtn">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-container" id="grad">
        <div class="footergrid">
            <div class="footerlogo">
                <h1 style="font-size: 42px;">KawinYuk!</h1>
                <p style="margin-top: 30px;">Copyright 2021 @KawinYuk!</p>
            </div>
            <div class="footer">
                <h4 style="margin-bottom: 40px;">FEATURES :</h4>
                <a href="/help" style="color: white; margin-right: 30px;">Help</a>
                <a href="/about" style="color: white; margin-right: 30px;">About Us</a>
                <a href="/contact" style="color: white;">Contacts</a>
            </div>
            <div class="footer">
                <h4 style="text-align: right; margin-bottom: 25px;">Follow us :</h4>
                <p style="text-align: right;"><a href="#twitter"><img src="{{ url('assets/img/twitternormal.png') }}" alt="Twitter" style="width: 35px;"></a><a href="#google+"><img src="{{ url('assets/img/googlenormal.png') }}" alt="Google" style="width: 35px;"></a><a href="#linkedin"><img src="{{ url('assets/img/Linkedin.png') }}" alt="Linkedin" style="width: 35px;"></a></p>
            </div>
        </div>
    </div>
</body>

</html>