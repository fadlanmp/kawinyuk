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
            <a href="#" style="float: left; font-size: 24px; margin-top: -20px;">KawinYuk!</a>
        </div>
        <div class="topnav2grid">
            <a href="/">Home</a>
            <a href="#news">Help</a>
            <a href="#about">About Us</a>
            <a href="#contact">Contacts</a>
        </div>
        <div class="topnav2grid">
            <div class="topnav2right">
                <a href="#">Hai, Username</a>
                <a href="/profile"><img src="{{ url('assets/img/user.png') }}" class="minipic"></a>
                <a href="/" class="h-loginbtn">Logout</a>
            </div>
        </div>
    </div>
    <div class="profileedit-container">
        <div class="profileedit-grid">
            <div class="profile-card">
                <div class="profilecard-content" style="margin-left: 50px;">
                    <form action="/services" method="POST" class="profileform">
                        @csrf
                        <h2 style="margin-bottom: 30px; color: #BE42C9;">Add a product</h2>
                        <p>Nama Produk</p>
                        <input type="text" class="profileinput" name="serviceName">
                        <p>Deskripsi Produk</p>
                        <input type="text" class="profileinput" name="serviceDescription">
                        <p>Pilihan Vendor</p>
                        <select class="profileinput" placeholder="Bulan" name="serviceType">
                            <option value="Videografer">Videografer</option>
                            <option value="Catering">Catering</option>
                            <option value="Dekorasi">Dekorasi</option>
                        </select>
                        <p>Pilihan Vendor</p>
                        <form action="/action_page.php">
                            <input type="file" id="myFile" name="servicePortfolio">
                            <input type="submit">
                        </form>
                    </form>
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
                <a href="#" style="color: white; margin-right: 30px;">Help</a>
                <a href="#" style="color: white; margin-right: 30px;">About Us</a>
                <a href="#" style="color: white;">Contacts</a>
            </div>
            <div class="footer">
                <h4 style="text-align: right; margin-bottom: 25px;">Follow us :</h4>
                <p style="text-align: right;"><a href="#twitter"><img src="{{ url('assets/img/twitternormal.png') }}" alt="Twitter" style="width: 35px;"></a><a href="#google+"><img src="{{ url('assets/img/googlenormal.png') }}" alt="Google" style="width: 35px;"></a><a href="#linkedin"><img src="{{ url('assets/img/Linkedin.png') }}" alt="Linkedin" style="width: 35px;"></a></p>
            </div>
        </div>
    </div>
</body>

</html>