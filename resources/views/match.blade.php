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
            padding: 10px 12px;
            font-size: 70px;
            text-align: left;
        }

        .summary {
            padding: 15px 10px;
        }

        .sumbtn {
            background-color: #FF903F;
            border: none;
            color: rgb(255, 255, 255);
            border-radius: 20px;
            text-align: center;
            font-size: 17px;
            display: inline-block;
            width: auto;
            height: 35px;
            margin: auto;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
        }

        .sumbtn:hover {
            background-color: #a95f2b;
            color: rgb(255, 255, 255);
        }

        input[type=checkbox] {
            transform: scale(1.5);
        }


        .profile {
            background-color: #FF903F;
            color: white;
            border-radius: 10px;
            height: 550px;
            width: 200px;
            padding: 10px 10px;
        }


        .profilereserve {
            background-color: #FF903F;
            color: white;
            border-radius: 10px;
            height: 580px;
            width: 200px;
            padding: 10px 10px;
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
            height: auto;
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

        .option {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px;
        }

        .rounded-circle {
            margin: auto;
            display: block;
            width: 120px;
            height: 120px;
        }

        .optimal {
            color: #88FF64;
        }

        .bad {
            color: #FF2C2C;
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
            height: 240px;
        }

        .tuker {
            padding: 10px 10px;
            margin: auto;
            text-align: center;
        }

        .container {
            padding: 5px 5px;
            margin: auto;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            column-gap: 5px;
            row-gap: 10px;
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
            margin: auto;
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

        .indikasi {
            margin: auto;
            color: #000000;
            font-size: 15px;
            padding: 15px 5px;
        }

        .ind {
            display: grid;
            grid-template-columns: auto auto;
            width: 15%;
            background-color: #000000;
            border-radius: 10px;
            color: #ffffff;
            padding: 10px;
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
        <a href="{{ route('sign-out') }}" class="split">Sign Out</a>
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

        <div class="summary">
            <!-- Tombol -->
            <button type="button" class="sumbtn" data-toggle="modal" data-target="#sumModal">
                Swap Recommendation
            </button>

            <!-- The Modal -->
            <div class="modal" id="sumModal" tabindex="-1" role="dialog" aria-labelledby="sumModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <!-- Modal body -->
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <br>
                            <h5 class="h4" id="sumModalLabel">
                                Here are the active athletes
                            </h5>
                            <h5 class="h4">
                                recommended to swap
                            </h5>
                            <br>
                            <div class="grid-con">
                                @foreach ($activeAthlete as $needswap)
                                    @if (
                                        $needswap->device->heart_rate < 83 ||
                                            $needswap->device->heart_rate > 165 ||
                                            $needswap->device->oxygen < 90 ||
                                            $needswap->device->oxygen > 100)
                                        <div class="profileswap">
                                            <div class="statswap">

                                                <h4 class="namaswap">{{ $needswap->last_name }}</h4>
                                                <h5 class="namaswap">{{ $needswap->position }}
                                                    #{{ $needswap->jersey_no }}</h5>

                                            </div>
                                            <div class="fotoswap">

                                                @if ($needswap && $needswap->atlete_pic)
                                                    <img src="{{ asset('storage/' . $needswap->atlete_pic) }}"
                                                        class="rounded-circleswap" alt="Athlete picture">
                                                @else
                                                    <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                                                        class="rounded-circleswap" alt="No picture">
                                                @endif

                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="option">

                                <button type="button" class="cancelbtn" data-dismiss="modal">Back</button>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>



        <div class="aktif">

            <div class="grid-container">
                <!-- Isi for each foreach $athlete yang isActive iya-->
                @foreach ($activeAthlete as $athlete)
                    <div class="profile">

                        <div class="labelnama">
                            <h2>{{ $athlete->last_name }}</h2>
                            <h4>{{ $athlete->position }} #{{ $athlete->jersey_no }}</h4>

                        </div>

                        <div class="foto">
                            <br>
                            @if ($athlete && $athlete->atlete_pic)
                                <a href="{{ route('athletedetail', ['athlete_id' => $athlete->athlete_id]) }}">
                                    <img src="{{ asset('storage/' . $athlete->atlete_pic) }}" class="rounded-circle"
                                        alt="Athlete picture">
                                </a>
                            @else
                                <a href="{{ route('athletedetail', ['athlete_id' => $athlete->athlete_id]) }}">
                                    <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                                        class="rounded-circle" alt="No picture">
                                </a>
                            @endif

                        </div>
                        <br><br>

                        <div class="stat">

                            @php
                                $hr = $athlete->device->heart_rate;
                                if ($hr >= 83 && $hr <= 165) {
                                    $hrval = 'optimal';
                                } else {
                                    $hrval = 'bad';
                                }
                            @endphp

                            <div class="icon">
                                <span class="material-symbols-outlined" style="color: #EA3323">
                                    ecg_heart
                                </span>
                            </div>
                            <div class="jantung">
                                @if ($athlete->device)
                                    <h2 class="{{ $hrval }}">{{ $athlete->device->heart_rate }}</h2>
                                @endif
                            </div>

                            <div class="icon">
                                <span class="material-symbols-outlined" style="color: #48C1FE">
                                    oxygen_saturation
                                </span>
                            </div>

                            @php
                                $oxy = $athlete->device->oxygen;
                                if ($oxy >= 90 && $oxy <= 100) {
                                    $oxyval = 'optimal';
                                } else {
                                    $oxyval = 'bad';
                                }
                            @endphp

                            <div class="oksigen">
                                @if ($athlete->device)
                                    <h2 class="{{ $oxyval }}">{{ $athlete->device->oxygen }}%</h2>
                                @endif
                            </div>

                            <div class="icon">
                                <span class="material-symbols-outlined" style="color: #75FB4C">
                                    sprint
                                </span>
                            </div>
                            <div class="kecepatan">
                                @if ($athlete->device)
                                    <h2 class="speed">{{ $athlete->device->speed }} mph</h2>
                                @endif
                            </div>

                        </div>


                    </div>
                @endforeach

            </div>


        </div>


        <div class="reserve">
            <h1 class="reserved">Reserved athletes</h1>
            <br><br>
            <div class="grid-container">
                <!-- Isi for each foreach $athlete yang isActive nggak-->
                @foreach ($inactiveAthlete as $inathlete)
                    <div class="profilereserve">

                        <div class="labelnama">
                            <h2>{{ $inathlete->last_name }}</h2>
                            <h4>{{ $inathlete->position }} #{{ $inathlete->jersey_no }}</h4>

                        </div>

                        <div class="foto">
                            <br>
                            @if ($inathlete && $inathlete->atlete_pic)
                                <a href="{{ route('athletedetail', ['athlete_id' => $inathlete->athlete_id]) }}">
                                    <img src="{{ asset('storage/' . $inathlete->atlete_pic) }}"
                                        class="rounded-circle" alt="Athlete picture">
                                </a>
                            @else
                                <a href="{{ route('athletedetail', ['athlete_id' => $inathlete->athlete_id]) }}">
                                    <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                                        class="rounded-circle" alt="No picture">
                                </a>
                            @endif

                        </div>
                        <br><br>

                        <div class="stat">
                            <div class="icon">
                                <span class="material-symbols-outlined" style="color: #EA3323">
                                    ecg_heart
                                </span>
                            </div>
                            @php
                                $hr = $inathlete->device->heart_rate;
                                if ($hr >= 83 && $hr <= 165) {
                                    $hrvalz = 'optimal';
                                } else {
                                    $hrvalz = 'bad';
                                }
                            @endphp
                            <div class="jantung">
                                @if ($inathlete->device)
                                    <h2 class="{{ $hrvalz }}">{{ $inathlete->device->heart_rate }}</h2>
                                @endif
                            </div>

                            <div class="icon">
                                <span class="material-symbols-outlined" style="color: #48C1FE">
                                    oxygen_saturation
                                </span>
                            </div>

                            @php
                            $oxy = $inathlete->device->oxygen;
                            if ($oxy >= 90 && $oxy <= 100) {
                                $oxyvalz = 'optimal';
                            } else {
                                $oxyvalz = 'bad';
                            }
                        @endphp

                            <div class="oksigen">
                                @if ($inathlete->device)
                                    <h2 class="{{ $oxyvalz }}">{{ $inathlete->device->oxygen }}%</h2>
                                @endif
                            </div>

                            <div class="icon">
                                <span class="material-symbols-outlined" style="color: #75FB4C">
                                    sprint
                                </span>
                            </div>
                            <div class="kecepatan">
                                @if ($inathlete->device)
                                    <h2 class="speed">{{ $inathlete->device->speed }} mph</h2>
                                @endif
                            </div>

                        </div>

                        <div class="tuker">
                            <!-- Tombol -->
                            <button type="button" class="swapbtn" data-toggle="modal"
                                data-target="#swapModal{{ $inathlete->athlete_id }}">
                                Swap to active
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="swapModal{{ $inathlete->athlete_id }}" tabindex="-1"
                                role="dialog" aria-labelledby="swapModalLabel{{ $inathlete->athlete_id }}"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                            <br>
                                            <h5 class="h4" id="swapModalLabel{{ $inathlete->athlete_id }}">
                                                Select an active athlete to swap
                                            </h5>
                                            <h5 class="h4">
                                                positions with :
                                            </h5>
                                            <br>

                                            <form class="modal-isi" action="{{ route('swap') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="inathlete_id"
                                                    value="{{ $inathlete->athlete_id }}">
                                                <div class="grid-con">
                                                    <!-- Isi for each foreach $athlete yang isActive iya-->
                                                    @foreach ($activeAthlete as $acathlete)
                                                        <div class="profileswap">
                                                            <div class="statswap">

                                                                <h4 class="namaswap">{{ $acathlete->last_name }}</h4>
                                                                <h5 class="namaswap">{{ $acathlete->position }}
                                                                    #{{ $acathlete->jersey_no }}</h5>

                                                            </div>
                                                            <div class="fotoswap">

                                                                @if ($acathlete && $acathlete->atlete_pic)
                                                                    <img src="{{ asset('storage/' . $acathlete->atlete_pic) }}"
                                                                        class="rounded-circleswap"
                                                                        alt="Athlete picture">
                                                                @else
                                                                    <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                                                                        class="rounded-circleswap" alt="No picture">
                                                                @endif

                                                            </div>
                                                            <div class="selectswap">
                                                                <input type="radio"
                                                                    id="selectswap{{ $acathlete->athlete_id }}"
                                                                    name="acathlete_id"
                                                                    value="{{ $acathlete->athlete_id }}">
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    <div class="option">

                                                        <button type="button" class="cancelbtn"
                                                            data-dismiss="modal">Cancel</button>

                                                        <button type="submit" class="swapconbtn">Swap
                                                            athletes</button>
                                                    </div>

                                                </div>



                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



        </div>

        <div class="indikasi">
            <h5>Color indication : </h5>
            <div class="ind">
                <div>
                    <p style="color: #75FB4C">Green</p>
                </div>
                <div>
                    <p> = Optimal</p>
                </div>
                <div>
                    <p style="color:#FF2C2C">Red</p>
                </div>
                <p> = Unwell</p>
                <div></div>
            </div>
        </div>

    </div>


    </div>


</body>

</html>
