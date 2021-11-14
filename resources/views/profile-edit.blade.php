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
                <div class="profileeditcard-grid">
                    <div class="profilecard-content">
                        <div class="profileimg-container">
                            <img src="{{ url('assets/img/user.png') }}" alt="user" class="profileimg">
                        </div>
                        <h2>Username</h2>
                        <hr>
                        <a href="#logout" style="color: #BE42C9; font-size: 20px; text-decoration: none;">Log out</a>
                    </div>
                    <div class="profilecard-content" style="margin-left: 50px;">
                        <form action="#routeprofile" method="post" class="profileform">
                            @method('put')
                            @csrf
                            <h2 style="margin-bottom: 30px; color: #BE42C9;">Profile</h2>
                            <p>Nama Lengkap</p>
                            <input type="text" class="profileinput">
                            <p>Tanggal Lahir</p>
                            <select class="profileinput" placeholder="Tanggal">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select class="profileinput" placeholder="Bulan">
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                            <select class="tahun" placeholder="Tahun">
                                <!--Ini ga ngerti ngeloopnya gmn-->
                                <option value="Tahun">Tahun</option>
                            </select>
                            <p>Nomor Handphone</p>
                            <input type="text" class="profileinput">
                            <p>Vendor</p>
                            <input type="text" class="profileinput">
                            <p>Alamat</p>
                            <input type="text" class="profileinput">
                            <div class="formbtn">
                                <a href="#profile" class="batal">Batal</a>
                                <input type="submit" value="simpan" class="simpanprofile">
                            </div>
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