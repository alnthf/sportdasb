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
     <script>
        function showPass() {
            var x = document.getElementById("team_password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
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
            height: 360px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: auto;
            float: right;
        }

        label {
            font-size: 25px;
            font-weight: 400;
            padding-left: 10px;
        }

        input[type=text],
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

        input[type=password],
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

        .option {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px;
        }

        input[type=checkbox] {
            margin: 8px;
        }

        .shw {
            font-size: 16px;
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

        .updatebtn {
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

        .updatepbtn:hover {
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
            background-color: #FF903F;
            color: rgb(0, 0, 0);
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
        <br><br><br><br><br>
        <!-- Logo -->
        <form action="{{ route('teamsetting.changed') }}" target="_self" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="team_id" value="{{ $team->team_id ?? '' }}">
            <div class="uploadlg">
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
                <img src="{{ asset('storage/' . $team->team_logo) }}" class="rounded-circle" alt="Team Logo"
                    id="output" />
                <br>
                <input type="file" accept="image/*" onchange="loadFile(event)" class="uploadbtn" name="team_logo"
                    id="team_logo">

            </div>
            <br>

            <div class="isian">

                <h1>Team account</h1>
                <div class="formisi">

                    <label for="team_name">Team name:</label><br>
                    <input type="text" value="{{ $team->team_name }}" id="team_name" name="team_name"><br>

                    <label for="team_password">Password:</label><br>
                    <input type="password" value="{{ $team->team_password }}" id="team_password"
                        name="team_password"><br>
                    <input type="checkbox" id="showpass" onclick="showPass()">
                    <label for="showpass" class="shw">Show password</label>
                </div>

                <!-- Tombol -->

                <div class="option">
                    <a href="{{ route('home') }}" class="cancelbtn">Cancel</a>

                    <button type="submit" class="updatebtn">Update account</button>
                </div>

        </form>
    </div>
    </div>

</body>

</html>
