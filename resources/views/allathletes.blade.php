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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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


        body {
            background-color: #ffffff;
            color: black;
            font-family: 'Oswald';
        }

        img {
            object-fit: contain;
            background-color: #ffffff;
        }

        .container {
            padding: 5px 5px;
            margin: auto;
        }

        .atas {
            padding: 12px 12px;
            font-size: 70px;
            text-align: left;
        }

        .addbtn {
            background-color: #FF903F;
            border: none;
            color: white;
            border-radius: 20px;
            text-align: center;
            font-size: 17px;
            width: 150px;
            height: 32px;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
            float: right;
        }

        .addbtn:hover {
            background-color: #814a23;
            color: rgb(255, 255, 255);
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto;
            row-gap: 20px;
            column-gap: 20px;
        }

        .profile {
            display: grid;
            grid-template-columns: auto auto;
            background-color: #FF903F;
            color: white;
            border-radius: 10px;
            height: 180px;
            width: 550px;
            padding: 10px 10px;
        }

        .stat {
            background-color: #000000;
            color: white;
            border-radius: 10px;
            text-align: right;
            height: 150px;
            width: 380px;
            border: 2px solid #ffffff;
            padding: 12px 15px;
            margin: auto;
        }

        .data {
            display: grid;
            grid-template-columns: auto auto auto auto auto auto;
        }

        .icon {
            margin: auto;
            padding-left: 15px;
        }

        .foto {
            padding: 12px 12px;
            width: 150px;
            height: 150px;
        }


        .rounded-circle {
            margin: auto;
            display: block;
            width: 130px;
            height: 130px;
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
        <a href="{{ route('home') }}">Main Menu</a>
        <a href="{{ route('match') }}">Match Mode</a>
        <a href="{{ route('all-athlete') }}" class="active">All Athletes</a>
        <a href="{{ route('teamsetting') }}" class="split">Settings</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <!-- Isi -->
    <div class="container">

        <div class="atas">
            <p>All athletes</p>
        </div>

        <div class="tengah">
            <button type="button" href="{{ route('add-profile') }}" class="addbtn">
                <span class="material-symbols-outlined">person_add</span>
                Add profile</button>
            <br><br><br><br>
            <div class="grid-container">
                <!-- Isi for each foreach($athlete(yang sama kayak compact) as $athlete)-->

                <div class="profile">
                    <div class="stat">

                        <h1 class="nama">Achiuwa #5</h1>
                        <br>
                        <div class="data">
                            <div class="icon">
                                <span class="material-symbols-outlined" style="color: #EA3323">
                                    ecg_heart
                                    </span>
                            </div>
                            <div class="jantung">
                                <h2 class="hr">97</h2>
                            </div>

                            <div class="icon">
                                <span class="material-symbols-outlined" style="color: #48C1FE">
                                    oxygen_saturation
                                    </span>
                            </div>
                            <div class="oksigen">
                                <h2 class="oxygen">98%</h2>
                            </div>

                            <div class="icon">
                                <span class="material-symbols-outlined" style="color: #75FB4C">
                                    sprint
                                    </span>
                            </div>
                            <div class="kecepatan">
                                <h2 class="speed">18 mph</h2>
                            </div>

                        </div>

                    </div>
                    <div class="foto">

                        <a href="{{ route('athletedetail') }}">
                        <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                            class="rounded-circle" alt="Athlete picture">
                        </a>

                    </div>


                </div>

                <!-- Tes col)-->


                <!-- Tes col)-->

            </div>

        </div>

    </div>



</body>

</html>
