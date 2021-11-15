<!DOCTYPE html>
<html>

<head>
    <Title>KawinYuk! - Landing Page</Title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/kawinyuk.css')}}">
</head>

<body>
    <a href="{{url('css/kawinyuk.css')}}">
        <div class="topnav">
            <div class="topnavgrid">
                <a href="/" style="float: left; font-size: 24px; margin-top: -20px;">KawinYuk!</a>
            </div>
            <div class="topnavgrid">
                <a href="/">Home</a>
                <a href="/help">Help</a>
                <a href="/about">About Us</a>
                <a href="/contact">Contacts</a>
            </div>
            <div class="topnavgrid">
                <div class="topnavright">
                    <a href="/signup">Sign Up</a>
                    <a href="/login" class="h-loginbtn">Login</a>
                </div>
            </div>
        </div>
        <div class="bigtitle" id="grad">
            <div class="titlegrid">
                <div class="titledesc">
                    <h4>Hai, selamat datang!</h4>
                    <h1>BANGUN PASARAN VENDORMU JADI LEBIH LUAS</h1>
                    <div class="h-regiscontainer">
                        <p>KawinYuk! adalah solusi buat kamu semua yang ingin memperluas jaringan !!</p>
                    </div>
                    <div class="h-regiscontainer">
                        <a href="#inikemana" class="h-regisbtn" style="margin-top: 10px;">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="titlegrid">
                <img src="{{ url('assets/img/titleimg.png') }}" alt="title-image" class="titleimg">
            </div>
        </div>
        <div class="vendoropttitle">
            <div class="vendortitle">
                <hr class="landing">
            </div>
            <div class="vendortitle">
                <h2>Pilihan Vendor</h2>
            </div>
            <div class="vendortitle">
                <hr class="landing">
            </div>
        </div>
        <div class="vendoropt">
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
        </div>
        <div class="info-container">
            <div class="infogrid">
                <div class="infocard" id="grad">
                    <div class="info">
                        <div class="infos">
                            <h2>Cara mudah untuk mendapatkan Informasi Kecantikan</h2>
                            <p style="margin-top: 30px;">Temukan semua informasi di web ini secara Gratis !</p>
                        </div>
                    </div>
                    <div class="info">
                        <img src="{{ url('assets/img/info.png') }}" alt="info" class="infoimg">
                    </div>
                </div>
            </div>
        </div>
        <div class="vendors-container">
            <div class="vendortype-grid">
                <p style="text-align: left;">Videografer/Fotografer</p>
                <a href="/videografer" style="text-align: right; color: white;">Selengkapnya >></a>
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
                <a href="/catering" style="text-align: right; color: white;">Selengkapnya >></a>
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
                <a href="/dekorasi" style="text-align: right; color: white;">Selengkapnya >></a>
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
                    <p style="text-align: right;"><a href="#twitter"><img src="{{ url('assets/img/Twitter.png') }}" alt="Twitter" style="width: 35px;"></a><a href="#google+"><img src="{{ url('assets/img/Google.png') }}" alt="Google" style="width: 35px;"></a><a href="#linkedin"><img src="{{ url('assets/img/Linkedin.png') }}"" alt=" Linkedin" style="width: 35px;"></a></p>
                </div>
            </div>
        </div>
    </a>
</body>

</html>