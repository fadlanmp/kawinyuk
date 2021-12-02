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
                <a href="/home">Home</a>
                <a href="/help">Help</a>
                <a href="/about">About Us</a>
                <a href="/contact">Contacts</a>
            </div>
            <div class="topnav2grid">
                <div class="topnav2right">
                    <a href="#">Selamat Datang Kembali Admin</a>
                    <a href="#profile"><img src="{{ url('assets/img/user.png') }}" class="minipic"></a>
                    <!-- <a href="#landingpage" class="h-loginbtn">Logout</a> -->
                </div>
                <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="h-loginbtn">Logout</button>
            </form>
            </div>
        </div>
        <div class="profile-container">
            <div class="profile-grid">
                <div class="profile-card">
                    <div class="profilecard-grid2">
                        <div class="profilecard-content">
                            <div class="profileimg-container">
                                <img src="{{ url('assets/img/user.png') }}" alt="user" class="profileimg">
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
                                @foreach ($service as $service)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$service->serviceName}}</td>
                                    <td>{{$service->serviceType}}</td>
                                    <td>
                                        <a href="#edit" class="editbutton" style="text-decoration: none">edit</a>
                                        <form action="{{ url('/services/' .$service->id) }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="deletebutton" onclick="return confirm('Yakin mau mengahpus service ini?')">delete</button>
                                        </form>
                                        <!-- <a href="{{ url('delete-service',$service->id)}}" class="deletebutton" style="text-decoration: none">delete</a> -->
                                    </td>
                                </tr>
                                @endforeach
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