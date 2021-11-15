<!DOCTYPE html>
<html>
    <head>
        <Title>KawinYuk! - Dashboard</Title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url('css/kawinyuk.css')}}">
    </head>
    <body>
        <div class="topnav2" id="grad">
            <div class="topnav2grid">
                <a href="#" style="float: left; font-size: 24px; margin-top: -20px;">KawinYuk!</a>
            </div>
            <div class="topnav2grid">
                <a href="/">Home</a>
                <a href="/help">Help</a>
                <a href="/about">About Us</a>
                <a href="/contact">Contacts</a>
            </div>
            <div class="topnav2grid">
                <div class="topnav2right">
                    <a href="#signup">Sign Up</a>
                    <a href="#login" class="h-loginbtn">Login</a>
                </div>
            </div>
        </div>
        <div class="vendors-container3">
            <div class="proddesc">
                <div class="proddesc-cont">
                    <img src="user.png" alt="user" class="profileimg-container">
                </div>
                <div class="proddesc-cont">
                    <h2>Nama Produk</h2>
                    <h4>Deskripsi produk</h4>
                    <p>ini musti ditampilin dari database, echo aja isinya berdasarkan nama si produk.</p>
                    <h4>Jenis vendor : <span class="jenisproduk">Videografer/Fotografi</span></h4>
                </div>
            </div>
            <div class="vendors-grid3">
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
            </div>
            <div class="vendors-grid">
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
                <div class="vendors-card">
                </div>
            </div>
        </div>
        <div class="footer-container" id="grad">
            <div class="footergrid">
                <div class="footerlogo">
                    <h1 style="font-size: 42px;">KawinYuk!</h1>
                    <p style="margin-top: 30px;">Copyright  2021 @KawinYuk!</p>
                </div>
                <div class="footer">
                    <h4 style="margin-bottom: 40px;">FEATURES :</h4>
                    <a href="#" style="color: white; margin-right: 30px;">Help</a>
                    <a href="#" style="color: white; margin-right: 30px;">About Us</a>
                    <a href="#" style="color: white;">Contacts</a>
                </div>
                <div class="footer">
                    <h4 style="text-align: right; margin-bottom: 25px;">Follow us :</h4>
                    <p style="text-align: right;"><a href="#twitter"><img src="{{ url('assets/img/twitternormal.png') }}" alt="Twitter" style="width: 35px;"></a><a href="#google+"><img src="{{ url('assets/img/googlenormal.png') }}"  alt="Google" style="width: 35px;"></a><a href="#linkedin"><img src="{{ url('assets/img/Linkedin.png') }}" alt="Linkedin" style="width: 35px;"></a></p>
                </div>
            </div>
        </div>
    </body>
</html>