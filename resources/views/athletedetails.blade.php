<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <!-- Notes -->
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 40
        }

        .share {
            float: left;
        }

        .setting {
            float: right;
        }

        body {
            background-color: #FF903F;
            color: #ffffff;
            font-family: 'Oswald';
        }

        .icons {
            padding: 20px 5px;
            display: flex;
            justify-content: space-between;
        }

        .atas {
            display: grid;
            grid-template-columns: auto auto;
            padding: 15px 10px;
            margin: auto;
        }

        .fotoatlet {
            padding: 10px 10px;
            margin: auto;
        }

        .rounded-circle {
            margin: auto;
            display: block;
            width: 140px;
            height: 140px;
        }

        .details {
            padding: 10px 10px;
            margin: auto;
            text-align: center;
        }

        .details-row {
            display: grid;
            grid-template-columns: auto auto;
            column-gap: 50px;
        }

        .personal {
            display: grid;
            grid-template-columns: auto auto;
            text-align: left;
            column-gap: 50px;
        }

        .deetskecil {
            font-size: 22px;
        }

        .tengah {
            display: grid;
            grid-template-columns: auto auto;
            padding: 15px 10px;
            background-color: #ffffff;
            color: #000000;
            border-radius: 10px;
            height: 390px;
            margin: auto;
        }

        .graph {
            margin: auto;
            padding: 10px 10px;
        }


        .hr {
            font-size: 80px;
            font-weight: 500;
        }

        .oxy {
            font-size: 80px;
            font-weight: 500;
        }

        .cal {
            font-size: 80px;
            font-weight: 500;
        }

        .sp {
            font-size: 80px;
            font-weight: 500;
        }

        .hrv {
            margin: auto;
            text-align: center;
        }


        .heartstat {
            display: grid;
            grid-template-columns: auto auto;
            padding: 10px 10px;
            text-align: center;
        }

        .heartstatlabel {
            text-align: center;
            display: grid;
            grid-template-columns: auto auto;
            padding: 10px 10px;
        }

        .heartstatdeet {
            padding: 10px 10px;
            display: grid;
            grid-template-columns: auto auto;
        }

        .hricon {
            padding-top: 45px;
        }

        .bawah {
            display: grid;
            grid-template-columns: auto auto;
            padding: 15px 10px;
            background-color: #000000;
            color: white;
            border-radius: 10px;
            height: 480px;
            margin: auto;
        }

        .bottomstat {
            display: grid;
            grid-template-columns: auto auto;
            padding: 10px 10px;
        }

        .addstat {
            padding: 10px 10px;
            text-align: center;
            margin: auto;
        }

        .speedstat {
            padding: 10px 10px;
            margin: auto;
            text-align: center;
        }

        .speedstatnum {
            display: grid;
            grid-template-columns: auto auto;
            padding: 10px 10px;
            column-gap: 100px;
        }

        .speedlabel {
            text-align: left;
        }

        .speedval {
            text-align: right;
        }

        img {
            object-fit: contain;
            background-color: #ffffff;
        }

        .grafik {
            width: 300px;
            height: 300px;
        }

        .topnav {
            overflow: hidden;
            background-color: #000000;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 8px 12px;
            text-decoration: none;
            font-size: 15px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
            border-radius: 5px;
        }

        .topnav .icon {
            display: none;
        }

        .topnav a.split {
            text-align: center;
            float: right;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>

</head>

<body>
    <!-- Navbar, ganti ke rute -->
    <div class="topnav" id="myTopnav">
        <a href="{{ route('home') }}">Main Menu</a>
        <a href="{{ route('match') }}">Match Mode</a>
        <a href="{{ route('all-athlete') }}">All Athletes</a>
        <a href="{{ route('teamsetting') }}" class="split">Settings</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="container">

        <div class="icons">
            <div class="share">
                <a href="#">
                    <span class="material-symbols-outlined" style="color: #ffffff">
                        share
                    </span>
                </a>
            </div>
            <div class="setting">
                <a href="{{ route('athletesetting') }}">
                    <span class="material-symbols-outlined" style="color: #ffffff">
                        settings
                    </span>
                </a>
            </div>

        </div>

        <div class="atas">

            <div class="fotoatlet">
                <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                    class="rounded-circle" alt="Athlete picture">
            </div>

            <div class="details">
                <h1>Uchiuwa #5</h1>
                <br>
                <div class="details-row">
                    <div class="personal">
                        <div>
                            <p class="deetskecil">Height : 203 cm</p>
                        </div>
                        <div>
                            <p class="deetskecil">Gender : Male</p>
                        </div>
                        <div>
                            <p class="deetskecil">Weight : 110 kg</p>
                        </div>
                        <div>
                            <p class="deetskecil">Sport : Basketball</p>
                        </div>
                        <div>
                            <p class="deetskecil">Age : 24 years old</p>
                        </div>
                        <div>
                            <p class="deetskecil">Position : Forward</p>
                        </div>
                    </div>
                    <div class="deviceid">
                        <p class="deetskecil">Device ID : 01</p>
                    </div>

                </div>

            </div>

        </div>

        <div class="tengah">
            <div class="graph">
                <!-- buat grafik -->
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDnFI-LZToT2rDaU2u7LWKfwpwfxW_aKXytA&s"
                    class="grafik" alt="Heart graphic">
            </div>

            <div class="heartstat">

                <div class="heartstatlabel">
                    <h2>Current HR</h2>
                    <br>
                    <div class="heartstatdeet">
                        <div class="hricon">
                            <span class="material-symbols-outlined" style="color: #EA3323;font-size:40px;">
                                ecg_heart
                            </span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="hr">95</p>
                            </div>
                            <div class="col">
                                <h4 style="padding-top: 50px;">bpm</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heartstatlabel">
                    <h2>Max HR</h2>
                    <br>
                    <div class="heartstatdeet">
                        <div class="hricon">
                            <span class="material-symbols-outlined" style="color: #EA3323; font-size:40px;">
                                ecg_heart
                            </span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="hr">105</p>
                            </div>
                            <div class="col">
                                <h4 style="padding-top: 50px;">bpm</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div> </div>
            <h3 class="hrv">HR Variability : 61 ms</h3>
        </div>

        <br>

        <div class="bawah">

            <div class="addstat">
                <div>
                    <h2>Oxygen saturation</h2>
                    <div class="bottomstat">
                        <div>
                            <p class="oxy">98</p>
                        </div>
                        <div>
                            <h2 style="padding-top: 50px; text-align:left;">%</h2>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <h2>Calories burned</h2>
                    <div class="bottomstat">
                        <div>
                            <p class="cal">650</p>
                        </div>
                        <div>
                            <h2 style="padding-top: 50px; text-align:left;">kcal</h2>
                        </div>
                    </div>

                </div>
            </div>

            <div class="speedstat">
                <h2>Speed</h2>
                <div class="row">
                    <div class="col">
                        <span class="material-symbols-outlined"
                            style="color: #75FB4C; padding-top: 35px; font-size:70px;">
                            sprint
                        </span>
                    </div>
                    <div class="col">
                        <p class="sp">18</p>
                    </div>
                    <div class="col">
                        <h4 style="padding-top: 50px;">mph</h4>
                    </div>
                </div>
                <div class="speedstatnum">
                    <div class="speedlabel">
                        <h3>Max speed :</h3>
                    </div>
                    <div class="speedval">
                        <h3>19 mph</h3>
                    </div>
                </div>
                <div class="speedstatnum">
                    <div class="speedlabel">
                        <h3>Distance :</h3>
                    </div>
                    <div class="speedval">
                        <h3>20 miles</h3>
                    </div>
                </div>
            </div>


        </div>

    </div>
</body>

</html>
