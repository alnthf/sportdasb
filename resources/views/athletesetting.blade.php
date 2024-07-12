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
        body {
            background-color: #FF903F;
            font-family: 'Oswald';
        }

        h1 {
            text-align: center;
        }

        img {
            object-fit: contain;
        }

        .uploadlg {
            float: left;
            margin: auto;
            padding: 10px 30px;
        }

        .rounded-circle {
            margin: auto;
            display: block;
            width: 300px;
            height: 300px;
        }

        .isian {
            background-color: #ffffff;
            color: #000000;
            text-align: left;
            padding: 3px 10px;
            border-radius: 10px;
            width: 500px;
            height: auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: auto;
            float: right;
        }

        .deviceid {
            font-size: 20px;
            width: 95%;
            padding: 5px 5px;
            margin: 8px 8px;
            display: inline-block;
            border: 1px solid #bdbdbd;
            background-color: #E4E4E4;
            border-radius: 10px;
            box-sizing: border-box;
        }


        .grid-container {
            display: grid;
            grid-template-columns: auto auto;
        }


        label {
            font-size: 25px;
            font-weight: 400;
            padding-left: 10px;
        }

        input,
        select {
            font-size: 20px;
            width: 95%;
            padding: 5px 5px;
            margin: 8px 8px;
            display: inline-block;
            border: 1px solid #bdbdbd;
            background-color: #E4E4E4;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .option {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px;
        }


        input[type=file],
        select {
            font-size: 20px;
            width: 95%;
            padding: 5px 5px;
            margin: 8px 8px;
            display: inline-block;
            border: 1px solid #bdbdbd;
            background-color: #E4E4E4;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .shw {
            font-size: 16px;
        }

        .modal-content {
            padding: 10px 20px;
        }

        .modal-body {
            text-align: center;
        }


        .deletebtn {
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

        .deletebtn:hover {
            background-color: #a42216;
            color: rgb(255, 255, 255);
        }


        .cancelbtn {
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
            margin-left: 0;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
        }

        .cancelbtn:hover {
            background-color: #1e2892;
            color: rgb(255, 255, 255);
        }

        .deleteconbtn {
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

        .deleteconbtn:hover {
            background-color: #a42216;
            color: rgb(255, 255, 255);
        }

        .submitbtn {
            background-color: #2F41E9;
            border: none;
            color: white;
            border-radius: 20px;
            text-align: center;
            font-size: 17px;
            display: inline-block;
            width: 140px;
            height: 35px;
            margin-right: 0;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
        }

        .submitbtn:hover {
            background-color: #1e2892;
            color: rgb(255, 255, 255);
        }

        .uploadbtn {
            font-size: 20px;
            display: inline-block;
            margin: auto;
            padding: 5px 20px;
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
        <a href="{{ route('sign-out') }}" class="split">Sign Out</a>
        <a href="{{ route('teamsetting') }}" class="split">Settings</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="container">
        @if ($athlete)
            <br>
            <!-- Logo -->
            <form action="{{ route('athletesetting.changed', ['athlete_id' => $athlete->athlete_id]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="athlete_id" value="{{ $athlete->athlete_id }}">
                <div class="uploadlg">
                    <br><br><br><br>
                    <!-- ini nanti edit biar jadi placeholder upload -->
                    <script>
                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                            output.onload = function() {
                                URL.revokeObjectURL(output.src) // free memory
                            }
                        };
                    </script>
                    <img src="https://t3.ftcdn.net/jpg/05/08/88/82/360_F_508888212_50sPZWAnDEe0IdZGwd5fb1CUDEFPNJgy.jpg"
                        class="rounded-circle" alt="Athlete picture" id="output" />
                    <br>
                    <input type="file" accept="image/*" onchange="loadFile(event)" class="uploadbtn"
                        name="atlete_pic" id="atlete_pic">
                </div>
                <br>

                <div class="isian">

                    <h1>Team account</h1>

                    <div class="formisi">

                        <label for="athlete_name">Athlete name:</label><br>
                        <input type="text" value="{{ $athlete->athlete_name }}" id="athlete_name"
                            name="athlete_name"><br>

                        <div class="grid-container">
                            <div>
                                <label for="age">Age:</label><br>
                                <input type="number" value="{{ $athlete->age }}" id="age" name="age"><br>
                            </div>
                            <div>
                                <label for="gender">Gender:</label><br>
                                <select id="gender" name="gender">
                                    @foreach ($genderOptions as $gender)
                                        <option value="{{ $gender }}">{{ ucfirst($gender) }}</option>
                                    @endforeach
                                </select><br>
                            </div>
                            <div>
                                <label for="height">Height:</label><br>
                                <input type="number" value="{{ $athlete->height }}" id="height" name="height"><br>
                            </div>
                            <div>
                                <label for="weight">Weight:</label><br>
                                <input type="number" value="{{ $athlete->weight }}" id="weight" name="weight"><br>
                            </div>
                        </div>

                        <label for="sport_name">Sport name:</label><br>
                        <input type="text" value="{{ $athlete->sport_name }}" id="sport_name" name="sport_name"><br>

                        <label for="position">Position:</label><br>
                        <input type="text" value="{{ $athlete->position }}" id="position" name="position"><br>

                        <div class="grid-container">
                            <div>
                                <label for="jersey_no">Jersey no:</label><br>
                                <input type="number" value="{{ $athlete->jersey_no }}" id="jersey_no"
                                    name="jersey_no"><br>
                            </div>
                            <div>
                                <label for="device_id">Device ID:</label><br>
                                @if ($athlete->device)
                                    <p class="deviceid">
                                        {{ $athlete->device->device_id }}</p>
                                @endif
                                <br>
                            </div>
                        </div>

                        <label for="is_active">Active status:</label><br>
                        <select id="is_active" name="is_active">
                            @foreach ($isActiveOptions as $is_active)
                                <option value="{{ $is_active }}"
                                    {{ $athlete->is_active == $is_active ? 'selected' : '' }}>
                                    {{ $is_active ? 'Active' : 'Inactive' }}</option>
                            @endforeach
                        </select><br><br>

                    </div>

                    <!-- Tombol -->

                    <div class="option">
                        <button type="button" class="deletebtn" data-toggle="modal" data-target="#deleteModal">
                            Delete profile
                        </button>

                        <button type="submit" class="submitbtn">Update profile</button>
                    </div>
            </form>

            <!-- The Modal -->
            <div class="modal" id="deleteModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal body -->
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <br><br><br>
                            <form class="modal-isi"
                                action="{{ route('athletesetting.deleted', ['athlete_id' => $athlete->athlete_id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="athlete_id" value="{{ $athlete->athlete_id }}">
                                <h3>
                                    Are you sure you want to delete this athlete's profile?
                                </h3>
                                <br><br>

                                <div class="option">
                                    <button type="button" class="cancelbtn" data-dismiss="modal">No, go
                                        back</button>

                                    <button type="submit" class="deleteconbtn">Yes, delete profile</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

            @endif

    </div>


    </div>


</body>

</html>
