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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Notes -->
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

    <style>
        body {
            background-color: #ffffff;
            color: black;
            font-family: 'Oswald';
        }


        .container {
            text-align: center;
            padding: 5px 5px;
            margin: auto;
        }

        .atas {
            padding: 12px 12px;
        }

        .conamatim {
            font-size: 110px;
            color: #FF903F;
            float: left;
            width: 70%;

        }

        .cologotim {
            width: 30%;
            padding: 20px 10px;
            float: right;
            display: block;
        }

        .logotim {
            width: 200px;
            height: 200px;
        }

        .tengah {
            display: grid;
            background-color: #000000;
            padding: 10px 10px;
            border-radius: 10px;
            width: 95%;
            margin: auto;
        }

        .topplayer {
            background-color: #FF903F;
            color: #ffffff;
            padding: 10px 10px;
            margin: 5px;
            border-radius: 10px;
            font-size: 22px;

        }

        .fototop {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            padding: 10px;
            column-gap: 50px;
        }

        .menutim {
            display: grid;
            grid-template-columns: auto auto auto;
            column-gap: 30px;
            color: #ffffff;
            margin: auto;
            padding: 10px;
        }

        img {
            object-fit: contain;
        }

        .rounded-circle {
            width: 100px;
            height: 100px;
            margin: auto;
            background-color: #ddd;
        }

        .card {
            padding: 10px 10px;
            width: 300px;
            border-radius: 10px;
            background-color: #FF903F;
            color: white;
            margin: auto;
        }

        .labelmenu {
            border-radius: 5px;
            background-color: #000000;
            border: 1px solid #ffffff;
            margin: auto;
            text-align: center;
            padding: 5px 10px;
        }

        .menulogo {
            background-color: #ffffff;
            width: 160px;
            height: 160px;
            border-radius: 100%;
            margin: auto;
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

        .topnav a.active {
            background-color: #FF903F;
            color: rgb(0, 0, 0);
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
        <a href="{{ route('home') }}" class="active">Main Menu</a>
        <a href="{{ route('match') }}">Match Mode</a>
        <a href="{{ route('all-athlete') }}">All Athletes</a>
        <a href="{{ route('teamsetting') }}" class="split">Settings</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <!-- Isi -->
    <div class="container">

        <div class="atas">
            <h1>Welcome back,</h1>

            <div class="conamatim">
                <!-- <p> $ team_name </p> -->
                <p>Team Name</p>
            </div>

            <div class="cologotim">
                <img src="https://t3.ftcdn.net/jpg/05/08/88/82/360_F_508888212_50sPZWAnDEe0IdZGwd5fb1CUDEFPNJgy.jpg"
                    class="logotim" alt="Team Logo">
            </div>
        </div>

        <br><br>

        <div class="tengah">

            <div class="topplayer">
                <p style="text-align: left">Here are your current top players :</p>
                <div class="fototop">
                    <!-- isi foto jejer player aktif -->
                    <div>
                        <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                            class="rounded-circle" alt="Team Logo">
                    </div>
                    <div>
                        <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                            class="rounded-circle" alt="Team Logo">
                    </div>
                    <div>
                        <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                            class="rounded-circle" alt="Team Logo">
                    </div>
                    <div>
                        <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                            class="rounded-circle" alt="Team Logo">
                    </div>
                    <div>
                        <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                            class="rounded-circle" alt="Team Logo">
                    </div>
                </div>

            </div>

            <div class="menutim">
                <!-- isi tombol menu tim pake card function -->
                <div class="card">
                    <div class="labelmenu">
                        <h2>Match Mode</h2>
                    </div>
                    <br>
                    <img src="https://cdn.icon-icons.com/icons2/510/PNG/512/stats-bars_icon-icons.com_49979.png"
                        class="menulogo" alt="Match menu">
                    <a href="#match" class="btn stretched-link"></a>
                </div>

                <div class="card">
                    <div class="labelmenu">
                        <h2>All Athletes</h2>

                    </div>
                    <br>
                    <img src="https://png.pngtree.com/png-vector/20191009/ourmid/pngtree-group-icon-png-image_1796653.jpg"
                        class="menulogo" alt="All athletes list">
                    <a href="#allathletes" class="btn stretched-link"></a>
                </div>

                <div class="card">
                    <div class="labelmenu">
                        <h2>Settings</h2>

                    </div>
                    <br>
                    <img src="https://cdn.icon-icons.com/icons2/2941/PNG/512/setting_settings_icon_183789.png"
                        class="menulogo" alt="Settings">
                    <a href="{{ route('teamsetting') }}" class="btn stretched-link"></a>
                </div>
            </div>

        </div>

    </div>

</body>


</html>
