<!DOCTYPE html>
<html>
    <head>
        <Title>KawinYuk! - My Post</Title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url('css/kawinyuk.css')}}">
    </head>
    <body>
        <div class="topnav2">
            <div class="topnav2grid">
                <a href="#" style="float: left; font-size: 24px; margin-top: -20px;">KawinYuk!</a>
            </div>
            <div class="topnav2grid">
                <a href="#home">Home</a>
                <a href="#news">Help</a>
                <a href="#about">About Us</a>
                <a href="#contact">Contacts</a>
            </div>
            <div class="topnav2grid">
                <div class="topnav2right">
                    <a href="#">Hai, Username</a>
                    <a href="#profile"><img src="user.png" class="minipic"></a>
                    <a href="#landingpage" class="h-loginbtn">Logout</a>
                </div>
            </div>
        </div>
        <div class="profile-container">
            <div class="profile-grid">
                <div class="profile-card">
                    <div class="profilecard-grid2">
                        <div class="profilecard-content">
                            <div class="profileimg-container">
                                <img src="user.png" alt="user" class="profileimg">
                            </div>
                            <h2>Edit Profil</h2>
                            <hr>
                            <a href="#logout" style="color: rgb(92, 92, 92); font-size: 20px; text-decoration: none;">My Dashboard</a><br>
                            <a href="#logout" style="color: #BE42C9; font-size: 20px; text-decoration: none;">Log out</a>
                        </div>
                        <div class="profilecard-content" style="margin-left: 50px;">
                            <h2 style="margin-bottom: 30px; color: #BE42C9;">My Post</h2>
                            <table id="posttable">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th>Pilihan Vendor</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Produk Pertama</td>
                                    <td>Videografer/Fotografer</td>
                                    <td><a href="#edit" class="editbutton" style="text-decoration: none">edit</a>
                                        <a href="#delete" class="deletebutton" style="text-decoration: none">delete</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Produk Kedua</td>
                                    <td>Catering</td>
                                    <td><a href="#edit" class="editbutton" style="text-decoration: none">edit</a>
                                        <a href="#delete" class="deletebutton" style="text-decoration: none">delete</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Produk Ketiga</td>
                                    <td>Dekorasi/Pernikahan</td>
                                    <td><a href="#edit" class="editbutton" style="text-decoration: none">edit</a>
                                        <a href="#delete" class="deletebutton" style="text-decoration: none">delete</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Produk Baru Diupload</td>
                                    <td>Videografer/Fotografer</td>
                                    <td><a href="#edit" class="editbutton" style="text-decoration: none">edit</a>
                                        <a href="#delete" class="deletebutton" style="text-decoration: none">delete</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
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
                    <p style="text-align: right;"><a href="#twitter"><img src="Twitter.png" alt="Twitter" style="width: 35px;"></a><a href="#google+"><img src="Google.png" alt="Google" style="width: 35px;"></a><a href="#linkedin"><img src="Linkedin.png" alt="Linkedin" style="width: 35px;"></a></p>
                </div>
            </div>
        </div>
    </body>
</html>