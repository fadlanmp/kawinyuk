<!DOCTYPE html>
<html>
    <head>
        <Title>KawinYuk! - Dashboard</Title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url('css/kawinyuk.css')}}">
    </head>
    <body>
        <div class="topnav">
            <div class="topnavgrid">
                <a href="#" style="float: left; font-size: 24px; margin-top: -20px;">KawinYuk!</a>
            </div>
            <div class="topnavgrid">
                <a href="#home">Home</a>
                <a href="#news">Help</a>
                <a href="#about">About Us</a>
                <a href="#contact">Contacts</a>
            </div>
            <div class="topnav2grid">
                <div class="topnav2right">
                    <a href="/profile">Hai, Username</a>
                    <a href="/profile"><img src="{{ url('assets/img/user.png') }}" class="minipic"></a>
                    <a href="/" class="h-loginbtn">Logout</a>
                </div>
            </div>
        </div>
        <div class="bigtitle" id="grad">
            <div class="titlegrid">
                <div class="titledesc">
                    <h1>Upload Vendormu Sekarang</h1>
                    <div class="h-regiscontainer">
                        <p>Dapatkan kemudahan untuk memperkenalkan vendormu secara luas dengan meng-upload produk vendormu disini. Cara mudah untuk menaikkan penjualan vendormu, cukup upload produk secara gratis. Costumer akan datang untung menghubungimu</p>
                    </div>
                </div>
            </div>
            <div class="vendoropt" id="grad">
                <div class="vendoroptcard-small" id="grad">
                    <div class="vendoroptcard-body">
                        <img src="{{ url('assets/img/camera.png') }}" alt="camera" class="vendoroptimg">
                    </div>
                    <div class="vendoroptcard-body">
                        <h4>Videografer/<br>Fotografer</h4>
                    </div>
                </div>
                <div class="vendoroptcard" id="grad">
                    <div class="vendoroptcard-body">
                        <img src="{{ url('assets/img/catering.png') }}" alt="catering" class="vendoroptimg-big">
                    </div>
                    <div class="vendoroptcard-body">
                        <h4>Catering</h4>
                    </div>
                </div>
                <div class="vendoroptcard-small" id="grad">
                    <div class="vendoroptcard-body">
                        <img src="{{ url('assets/img/Flower.png') }}" alt="Flower" class="vendoroptimg">
                    </div>
                    <div class="vendoroptcard-body" style="margin-top: 0px;">
                        <h4>Dekorasi/<br>Pernikahan</h4>
                    </div>
                </div>
                <div class="upproduk"></div>
                <div class="upproduk">
                    <a href="#upproduk" class="upproduk-btn" style="margin-top: 10px;">Upload Produk Vendormu</a>
                </div>
                <div class="upproduk"></div>
            </div>
        </div>
        <div class="vendors-container">
            <div class="vendortype-grid">
                <p style="text-align: left;">Videografer/Fotografer</p>
                <a href="#halamanvideografer" style="text-align: right; color: white;">Selengkapnya >></a>
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
            <div class="vendortype-grid">
                <p style="text-align: left;">Catering</p>
                <a href="#halamancatering" style="text-align: right; color: white;">Selengkapnya >></a>
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
            <div class="vendortype-grid">
                <p style="text-align: left;">Pernikahan</p>
                <a href="#halamandekor" style="text-align: right; color: white;">Selengkapnya >></a>
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
                    <p style="text-align: right;"><a href="#twitter"><img src="{{ url('assets/img/Twitter.png') }}" alt="Twitter" style="width: 35px;"></a><a href="#google+"><img src="{{ url('assets/img/Google.png') }}" alt="Google" style="width: 35px;"></a><a href="#linkedin"><img src="{{ url('assets/img/Linkedin.png') }}"" alt="Linkedin" style="width: 35px;"></a></p>
                </div>
            </div>
        </div>
    </body>
</html>