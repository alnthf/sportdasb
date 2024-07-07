<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
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

        function selectSwap() {
            //masukin buat pilih id atlet aktif
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
            color: #000000;
            font-family: 'Oswald';
        }

        img {
            object-fit: contain;
            background-color: #ffffff;
        }

        .atas {
            padding: 12px 12px;
            font-size: 70px;
            text-align: left;
        }

        input[type=checkbox] {
            transform: scale(1.5);
        }


        .profile {
            background-color: #FF903F;
            color: white;
            border-radius: 10px;
            height: 520px;
            width: 180px;
            padding: 10px 10px;
        }


        .profilereserve {
            background-color: #FF903F;
            color: white;
            border-radius: 10px;
            height: 550px;
            width: 180px;
            padding: 10px 10px;
        }

        .aktif {
            padding: 10px 12px;
        }

        .reserve {
            padding: 10px 12px;
        }

        .reserved {
            text-align: right;
        }

        .labelnama {
            background-color: #000000;
            color: rgb(255, 255, 255);
            border: 2px solid #ffffff;
            border-radius: 10px;
            padding: 5px 5px;
            text-align: center;
        }

        .foto {
            margin: auto;
            display: block;
            width: 130px;
            height: 130px;
        }

        .icon {
            padding: 10px 5px;
        }

        .rounded-circle {
            margin: auto;
            display: block;
            width: 120px;
            height: 120px;
        }

        .stat {
            background-color: #000000;
            color: rgb(255, 255, 255);
            border: 2px solid #ffffff;
            border-radius: 10px;
            padding: 10px 10px;
            display: grid;
            grid-template-columns: auto auto;
            row-gap: 20px;
        }

        .tuker {
            padding: 10px 10px;
        }

        .container {
            padding: 5px 5px;
            margin: auto;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            row-gap: 5px;
        }

        .grid-con {
            display: grid;
            grid-template-columns: auto;
            row-gap: 10px;
        }

        .h4 {
            color: #000000;
            text-align: center;
        }

        .profileswap {
            display: grid;
            grid-template-columns: auto auto auto;
            background-color: #FF903F;
            color: white;
            border-radius: 10px;
            height: 100px;
            width: 350px;
            padding: 4px 4px;
            margin: auto;
        }

        .namaswap {
            text-align: center;
        }

        .statswap {
            background-color: #000000;
            color: white;
            border-radius: 10px;
            text-align: right;
            height: 90px;
            width: 200px;
            border: 2px solid #ffffff;
            padding: 12px 15px;
            margin: auto;
        }

        .fotoswap {
            padding: 8px 10px;
            width: 90px;
            height: 90px;
        }

        .rounded-circleswap {
            margin: auto;
            display: block;
            width: 80px;
            height: 80px;
            border-radius: 100%;
        }


        .swapbtn {
            background-color: #ffffff;
            border: none;
            color: rgb(0, 0, 0);
            border-radius: 20px;
            text-align: center;
            font-size: 17px;
            display: inline-block;
            width: 140px;
            height: 35px;
            padding-top: 5px;
            margin-left: 0;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
        }

        .swapbtn:hover {
            background-color: #000000;
            color: rgb(255, 255, 255);
        }

        .swapconbtn {
            background-color: #2F41E9;
            border: none;
            color: white;
            border-radius: 20px;
            text-align: center;
            font-size: 17px;
            display: inline-block;
            width: 140px;
            height: 35px;
            padding-top: 5px;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
            float: right;
        }

        .swapconbtn:hover {
            background-color: #1e2892;
            color: rgb(255, 255, 255);
        }

        .cancelbtn {
            background-color: #EA3323;
            border: none;
            color: white;
            border-radius: 20px;
            text-align: center;
            font-size: 17px;
            display: inline-block;
            width: 140px;
            height: 35px;
            padding-top: 5px;
            margin-left: 0;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
        }

        .cancelbtn:hover {
            background-color: #a42216;
            color: rgb(255, 255, 255);
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
        <a href="{{ route('match') }}" class="active">Match Mode</a>
        <a href="{{ route('all-athlete') }}">All Athletes</a>
        <a href="{{ route('teamsetting') }}" class="split">Settings</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <!-- Isi -->
    <div class="container">

        <div class="atas">
            <p>Match Statistics</p>
        </div>

        <div class="aktif">

            <div class="grid-container">
                <!-- Isi for each foreach $athlete yang isActive iya-->

                <div class="profile">

                    <div class="labelnama">
                        <h2>Achiuwa</h2>
                        <h4>Forward #5</h4>

                    </div>

                    <div class="foto">
                        <br>
                        <a href="{{ route('athletedetail') }}">
                            <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                                class="rounded-circle" alt="Athlete picture">
                        </a>
                    </div>
                    <br><br>

                    <div class="stat">
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

                <!-- Tes col)-->

                <!-- Tes col)-->

            </div>


        </div>


        <div class="reserve">
            <h1 class="reserved">Reserved athletes</h1>
            <br><br>
            <div class="grid-container">
                <!-- Isi for each foreach $athlete yang isActive nggak-->

                <div class="profilereserve">

                    <div class="labelnama">
                        <h2>Achiuwa</h2>
                        <h4>Forward #5</h4>

                    </div>

                    <div class="foto">
                        <br>
                        <a href="{{ route('athletedetail') }}">
                            <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                                class="rounded-circle" alt="Athlete picture">
                        </a>
                    </div>
                    <br><br>

                    <div class="stat">
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

                    <div class="tuker">
                        <!-- Tombol -->
                        <button type="button" class="swapbtn" data-toggle="modal" data-target="#swapModal">
                            Delete profile
                        </button>

                        <!-- The Modal -->
                        <div class="modal" id="swapModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <br>
                                        <form class="modal-isi" action="{{ route('swap') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="athlete_id" value="{{ $athlete->id ?? '' }}">
                                            <h5 class="h4">
                                                Select an active athlete to swap
                                            </h5>
                                            <h5 class="h4">
                                                positions with :
                                            </h5>
                                            <br>

                                            <div class="grid-con">
                                                <!-- Isi for each foreach $athlete yang isActive iya-->

                                                <div class="profileswap">
                                                    <div class="statswap">

                                                        <h4 class="namaswap">Achiuwa</h4>
                                                        <h5 class="namaswap">Forward #5</h5>

                                                    </div>
                                                    <div class="fotoswap">

                                                        <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                                                            class="rounded-circleswap" alt="Athlete picture">

                                                    </div>
                                                    <div class="selectswap">
                                                        <input type="checkbox" id="selectswap"
                                                            onclick="selectSwap()">
                                                    </div>

                                                </div>


                                                <!-- batas suci-->
                                                <!-- Tes col)-->

                                                <!-- Tes col)-->
                                            </div>

                                            <div class="option">
                                                <br>
                                                <button type="button" class="cancelbtn"
                                                    data-dismiss="modal">Cancel</button>

                                                <button type="submit" class="swapconbtn">Swap athletes</button>
                                            </div>
                                        </form>

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Tes col)-->


                <!-- Tes col)-->

            </div>


        </div>


    </div>


</body>

</html>
