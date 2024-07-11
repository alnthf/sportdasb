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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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

        .optimal {
            color: #88FF64;
        }

        .bad {
            color: #FF2C2C;
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

        .cal {
            font-size: 80px;
            font-weight: 500;
        }

        .sp {
            font-size: 80px;
            font-weight: 500;
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
        <a href="{{ route('home') }}" class="active">Main Menu</a>
        <a href="{{ route('match') }}">Match Mode</a>
        <a href="{{ route('all-athlete') }}">All Athletes</a>
        <a href="{{ route('sign-out') }}" class="split">Sign Out</a>
        <a href="{{ route('teamsetting') }}" class="split">Settings</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="container">
        @if ($athlete)
        <div class="icons">
            <div class="share">
                <a href="#">
                    <span class="material-symbols-outlined" style="color: #ffffff">
                        share
                    </span>
                </a>
            </div>
            <div class="setting">
                <a href="{{ route('athletesetting', ['athlete_id' => $athlete->athlete_id]) }}">
                    <span class="material-symbols-outlined" style="color: #ffffff">
                        settings
                    </span>
                </a>
            </div>

        </div>


        <div class="atas">

            <div class="fotoatlet">
                @if ($athlete && $athlete->atlete_pic)
                                <img src="{{ asset('storage/' . $athlete->atlete_pic) }}"
                                    class="rounded-circle" alt="Athlete picture">
                            @else
                                <img src="https://icons.veryicon.com/png/o/internet--web/55-common-web-icons/person-4.png"
                                    class="rounded-circle" alt="No picture">
                            @endif
            </div>

            <div class="details">
                <h1> {{ $athlete ? $athlete->athlete_name . ' #' . $athlete->jersey_no : 'No Data #--' }}</h1>
                <br>
                <div class="details-row">
                    <div class="personal">
                        <div>
                            <p class="deetskecil">Height : {{ $athlete->height }} cm</p>
                        </div>
                        <div>
                            <p class="deetskecil">Gender : {{ $athlete->gender }}</p>
                        </div>
                        <div>
                            <p class="deetskecil">Weight : {{ $athlete->weight }} kg</p>
                        </div>
                        <div>
                            <p class="deetskecil">Sport : {{ $athlete->sport_name }}</p>
                        </div>
                        <div>
                            <p class="deetskecil">Age : {{ $athlete->age }} years old</p>
                        </div>
                        <div>
                            <p class="deetskecil">Position : {{ $athlete->position }}</p>
                        </div>
                    </div>
                    <div class="deviceid">
                        <p class="deetskecil">Status : {{ $athlete->is_active ? 'Active' : 'Inactive' }}</p>
                        <p class="deetskecil">Device ID : {{ $athlete->device->device_id }}</p>
                    </div>

                </div>

            </div>

        </div>

        <div class="tengah">
            <div class="graph">

                    <canvas id="hrplot" style="width:80%;height:300px;"></canvas>
                    <script>
                        const heartRates = {!! json_encode($heartRates) !!};
                        const xValues = heartRates.map((_, index) => index + 1);

                        new Chart("hrplot", {
                          type: "line",
                          data: {
                            labels: xValues,
                            datasets: [{
                              fill: false,
                              lineTension: 0,
                              backgroundColor: "#000000",
                              borderColor: "#FF903F",
                              data: heartRates
                            }]
                          },
                          options: {
                            legend: {display: false},
                            scales: {
                              yAxes: [{ticks: {min: 70, max:150}}],
                            }
                          }
                        });
                        </script>


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
                                @php
                                        $hr = $athlete->device->heart_rate;
                                        if ($hr >= 83 && $hr <= 165) {
                                            $hrval = 'optimal';
                                        } else {
                                            $hrval = 'bad';
                                        }
                                    @endphp
                                <p class="{{ $hrval }}" style="font-size: 80px;font-weight:500;">{{ $athlete->device->heart_rate }}</p>
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
                                <p class="{{ $hrval }}" style="font-size: 80px;font-weight:500;">{{ $athlete->device->max_heart_rate }}</p>
                            </div>
                            <div class="col">
                                <h4 style="padding-top: 50px;">bpm</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div> </div>
            <h3 style="margin:auto;text-align:center;">
                HR Variability : {{ isset($athlete->device->hrv) ? $athlete->device->hrv : '66' }} ms</h3>
        </div>

        <br>

        <div class="bawah">

            <div class="addstat">
                <div>
                    <h2>Oxygen saturation</h2>
                    <div class="bottomstat">
                        <div>
                            @php
                            $oxy = $athlete->device->oxygen;
                            if ($oxy >= 90 && $oxy <= 100) {
                                $oxyval = 'optimal';
                            } else {
                                $oxyval = 'bad';
                            }
                        @endphp
                            <p class="{{ $oxyval }}" style="font-size: 80px;font-weight:500;">{{ $athlete->device->oxygen }}</p>
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
                            <p class="cal">{{ isset($athlete->device->calories) ? $athlete->device->calories : '650' }}</p>
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
                        <p class="sp">{{ $athlete->device->speed }}</p>
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
                        <h3>{{ $athlete->device->speed }} mph</h3>
                    </div>
                </div>
                <div class="speedstatnum">
                    <div class="speedlabel">
                        <h3>Distance :</h3>
                    </div>
                    <div class="speedval">
                        <h3>{{ isset($athlete->device->distance) ? $athlete->device->distance : '20' }} miles</h3>
                    </div>
                </div>
            </div>


        </div>
        @endif
    </div>
</body>

</html>
