<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="theme-color" content="#f2c000">
    <title>ESPORT Smakensa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/splash.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/GamingFonts/all.css') }}">
    <link rel="Icon" type="img/png" href="{{ asset('frontend/gambar/logo esport 4.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/all.css') }}">

</head>

<body class="welcome">
    <div id="splash-overlay" class="splash"></div>
    <div id="welcome" class="z-depth-4"></div>
    <div id="overlay">
        <div id="modal">
            <h2>Info of Games :</h2>
            <br>
            <p id="rules">
                <ul>
                    <li>
                        Tournament E-SPORT SMAKENSA, adalah rangkaian Lomba dalam memperingati DIES NATALIS KE-54 SMKN 1
                        BONDOWOSO yang meliputi berbagai perlombaan dibidang bakat dan minat, yang diselenggarakan oleh
                        Osis SMKN 1 Bondowoso.
                    </li><br>
                    <li>
                        Lomba PUBG Mobile dan Mobile Legend adalah bagian dari rangkaian lomba pada kegiatan Tournament
                        E-SPORT SMAKENSA.
                    </li><br>
                    <li>
                        Peserta lomba PUBG Mobile dan Mobile Legend adalah siswa-siswi Sekolah SMKN 1 Bondowoso dan yang
                        telah ditentukan.
                    </li><br>
                </ul>
            </p>
            <br>
            <button onclick="closeModal();">Close</button>
        </div>
    </div>
    <header id="header">
        <img src="{{ asset('frontend/gambar/logo.png') }}" width="55px" height="45px">
        <a href="javascript:void(0);" class="mobile" onclick="Bars()">☰</a>
        <ul class="nav">
            <li><a href="#" onclick="Bars()">Home</a></li>
            <li><a href="#1" onclick="Bars()">Tournament</a></li>
            <li><a href="#2" onclick="Bars()">Countdown</a></li>
            <li><a href="#3" onclick="Bars()">Breaking News</a></li>
            <li><a href="#4" onclick="Bars()">Sponsor</a></li>
            <!-- <li><a href="resources/views/auth/v_login.blade.php" onclick="Bars()">{{ __('Login') }}</a></li> -->
        </ul>
    </header>
    <d iv id="floating-button">
        <a href="#" class="fas fa-angle-up"></a>
    </d>
    <div class="box">
        <div class="in-box">
            @foreach($setting as $set)
            <i class="fas fa-gamepad"></i>
            <h1 class="ttl">{{$set->judul}}</h1>
            <h2>{{$set->penyelenggara}}</h2>
            <h3>{{$set->deskripsi}}</h3>
            <p>{{$set->lomba}}</p>
            <br>
            @endforeach
            <button class="button"><a href="#scroll" style="color: #363636">Register</a></button>
            <br><br>
            <div class="footer-device">
                <div class="tag">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="tag">
                    <i class="fab fa-facebook"></i>
                    <br>
                </div>
                <div class="tag">
                    <i class="fab fa-instagram"></i>
                    <br>
                </div>
                <div class="tag">
                    <i class="fas fa-envelope"></i>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div id="1"></div>

    <div class="box-v2" id="scroll">
        <br><br>
        <div class="content-flex">
            <i class="fas fa-calendar-alt"></i>
            <br><br>
            <h2>Event Tournament</h2>
        </div>
        @foreach($event as $item)
        <br>
        <p>Pendaftaran akan dimulai pada : {{$item->tgl_daftar}}</p>
        <br><br>
        <div class="container">

            <div class="contain-box">
                <i class="fas fa-gamepad"></i>
                <h2>{{$item->title}}</h2>
                <br>
                <p>Rules Tournament :</p>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                    <p>{!!$item->rules!!}</p>    
                </div>
                </div>                            
                <div class="info">
                    <table>
                        <tr>
                            <th>Prize</th>
                            <th>Slots</th>
                            <th>Time</th>
                            <th>Date</th>
                        </tr>
                        <tr>
                            <td>{{$item->price}}</td>
                            <td>{{$item->slot}} Slot</td>
                            <td>{{$item->time}}</td>
                            <td>{{$item->date}}</td>
                        </tr>
                    </table>
                </div>
                <br><br>
                <br><br>
                <br><br><br><br>
                <button><a href="{{ $item->link }}">Register</a></button>
                <button onclick="showModal();">info </button><br>
                <img src="{{ asset('img-tournament/'.$item->image) }}" width="550px"
                height="320px">
            </div><br>
            @endforeach
            <br><br>

        </div>
        <div class="box-v3" id="2" style="color: black; background-color:#f2c000;">

            <i class="fas fa-gamepad" style="color: black;"></i>
            <br><br>
            <h1 id="tour">Tournament is Upcoming</h1>
            <br>
            <h2 style="color: black;">Tournament Esport Smakensa</h2>
            <br>
            <!--<p>Dapatkan Notif Dari kami Jika Countdown Sudah Selesai, Kami Akan Memberi Tahu anda</p>-->
            <!--<br><br>-->
            <!--<input type="email" name="email" placeholder="Masukan email anda disini">-->
            <!--<button>Subscribe</button>-->
            <br><br>
            <div class="box-count">
                <h1 class="text-count" id="demo">00:00:00</h1>
            </div>
            <br>
            <hr color="#333" width="700px" border="none">
            <br><br>
            <p>Smakensa ESPORT Tournament Gaming Copyright &copy; 2021</p>
            <br><br>
            <div style="display: flex; width: 300px;">
                <img src="{{ asset('frontend/gambar/logo.png') }}" width="90px" height="75px">
            </div>
        </div>
        <div class="box-v5" id="3">
            <i class="fas fa-news"></i>
            <h2>ESPORT News</h2>
            <br>
            <p>Berita Tentang Gamers Setiap Hari</p>
            <br>
            <p>TRENDING NOW</p>
            <br>
            <div class="container-review">
                @foreach($blog as $row)

                <div class="box-review">
                    <img src="{{ asset('img-blog/'. $row->image) }}" width="380px"
                    height="250px">
                    <br>
                    <h2>{{ $row->title }}</h2>
                    <p>{{ $row->description }}</p>
                    <p>{{ $row->date }}</p>
                </div><br>
                @endforeach
            </div>
            <br><br>
            <div style="display: flex; width: 300px;" id="4">
                <img src="{{ asset('frontend/gambar/logo.png') }}" width="90px" height="75px">
            </div><br>
        </div>
        @if($sp>0)
        <div class="box-v4">
            <br>
            <i class="fas fa-tv"></i>
            <br><br>
            <h1>Sponsored By </h1>
            <div class="container-sponsor">
                @foreach($sponsor as $row)
                <div class="sponsor">
                    <img src="{{ asset('img-sponsor/'.$row->logo) }}" width="100px"
                    height="auto">
                    <h4>{{ $row->name }}</h4>
                </div>
                @endforeach

            </div>
            <br>

            <br><br>
        </div>
        @endif
        <footer>
            <div class="container-footer">
                <div style="margin-top: 30px;">                                 
                    <p>ESPORT SMAKENSA GAMING BONDOWOSO</p>
                    <br>
                    <p>&copy; 2022 Smakensa IT Corporation</p>
                    <br>
                    <p class="terms">Term Conditions | Privacy Policy</p>
                    <br>
                </div>
                <img src="{{ asset('frontend/gambar/logo.png') }}" width="80px" height="60px">
                <img src="{{ asset('frontend/gambar/maxresdefault.jpg') }}" width="80px"
                height="60px">
            </div>

        </footer>

        {{-- script ubah jadwal --}}
        <div style="display: none">
            @foreach($all as $row)
            <p id="tanggal">{{ $row->tanggal }}</p>
            <p id="bulan">{{ $row->bulan }}</p>
            <p id="tahun">{{ $row->tahun }}</p>
            <p id="jam">{{ $row->jam }}</p>
            @endforeach
        </div>

        <div class="row">
            <div class="col text-center">
                <img src="image/salim_02.png" class="img-fluid" width="300" alt="">
            </div>
        </div>

    </body>

    </html>
    <script type="text/javascript">
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("header").style.backgroundColor = "#1a1a1a";
                document.getElementById("header").style.transition = "0.4s ease-out";
                document.getElementById("header").style.boxShadow = "0 0 5px #000";
                document.getElementById("floating-button").style.display = "block";

            } else {
                document.getElementById("header").style.backgroundColor = "transparent ";
                document.getElementById("header").style.transition = "0.4s ease-out";
                document.getElementById("floating-button").style.display = "none";
                document.getElementById("header").style.boxShadow = "none";
            }
        }

    // script ubah jadwal
    var tanggal = document.getElementById("tanggal").textContent;
    var bulan = document.getElementById("bulan").textContent;
    var tahun = document.getElementById("tahun").textContent;
    var jam = document.getElementById("jam").textContent;

    var CountDown = new Date(tanggal + "-" + bulan + "-" + tahun + " " + jam + ":25").getTime();


    var x = setInterval(function () {

        var now = new Date().getTime();
        var distanace = CountDown - now;

        var days = Math.floor(distanace / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distanace % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minute = Math.floor((distanace % (1000 * 60 * 60)) / (1000 * 60));
        var second = Math.floor((distanace % (1000 * 60)) / 1000);

        document.getElementById("demo").innerHTML = days + " hari : " + hours + " jam : " + minute +
        " menit : " + second + " detik";

        if (distanace < 0) {
            clearInterval(x);

            document.getElementById("demo").innerHTML = "Sedang Berlangsung";
            document.getElementById("tour").innerHTML = "Tournament is Started";
            document.getElementById("text1").innerHTML = "Berakhir";

        }

    }, 1000);

    function showModal() {
        document.getElementById("overlay").style.display = "block";
        document.getElementById("rules").innerHTML = "";
    }

    function closeModal() {
        document.getElementById("overlay").style.display = "none";
    }

    function Bars() {

        document.getElementsByClassName("nav")[0].classList.toggle("responsive");
        document.getElementById("header").style.backgroundColor = "#1a1a1a";
        document.getElementById("header").style.transition = "0.4s ease-out";
    }

    function btn1() {
        document.getElementById("text1").innerHTML = "Loading...";
    }

    function btn2() {
        document.getElementById("text2").innerHTML = "Loading...";
    }

</script>
<style type="text/css">
    .box-v6 h1 {
        color: #f2c000;
        font-family: sans-serif;
    }

    .in-box a {
        text-decoration: none;
    }

    .container-table {
        padding: 20px;
        box-shadow: 0 0 5px #1a1a1a;
        background: #1a1a1a;
    }

    .container-table img {
        border-radius: 90px;
        margin-left: 10px;
    }

    .container-table table {
        border-collapse: collapse;
        width: 300px;
    }

    .container-table td {
        text-align: left;
        width: 100px;
    }

    .line {
        background: #1a1a1a;
        width: 85%;
        display: flex;
        box-shadow: 0 0 5px #1a1a1a;
    }

    .line h2 {
        font-weight: normal;
        font-size: 15px;
        color: #fff;
    }

    .line .line-box {
        width: 10px;
        padding: 10px;
        background: #f2c000;
    }

    /* @media screen and (max-width: 20480px){
        .box {
            background-size: cover;
            background-attachment: fixed;
            height: 80vh;
            animation: 50s animate infinite;
        }

        .container-table td {
            text-align: left;
            width: 50px;
        }

        .box-v6 {
            background: linear-gradient(rgba(51, 51, 51, 0.9), rgba(51, 51, 51, 0.9)), ;
            background-size: cover;
            background-attachment: fixed;
            text-align: center;
            padding: 30px;
            color: grey;
            font-family: Segoe UI;

        }

        header ul {
            display: none;
            margin-right: 0px;
        }

        .box-v6 .container-table {

            display: block;
        }

        .box .in-box {
            margin-left: 0%;
            margin-top: 30%;
            text-align: center;
        }
        } */

    </style>
