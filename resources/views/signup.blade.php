<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Notes -->

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

    <style>
        body {
            background-color: #FF903F;
            color: black;
            font-family: 'Oswald';
            font-size: 26px;
        }

        img {
            object-fit: contain;
        }

        h1 {
            text-align: center;
        }

        .container {
            background-color: #ffffff;
            text-align: left;
            padding: 3px 10px;
            border-radius: 10px;
            width: 500px;
            height: 365px;
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .formisi {
            float: left;
            width: 270px;
        }

        .uploadlg {
            float: right;
            padding: 3px 10px;
            width: 200px;
        }

        .img-circle {
            margin: 20px 30px;
            width: 120px;
            height: 120px;
        }

        label {
            font-size: 25px;
            font-family: "Oswald";
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

        .signupbtn {
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

        .signupbtn:hover {
            background-color: #1e2892;
            color: rgb(255, 255, 255);
        }

        .uploadbtn {
            font-size: 14px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Create a new account</h1>

        <form action="{{ route('sign-up.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="team_id" value="{{ $team->team_id ?? '' }}">
            <div class="formisi">

                <label for="team_name">Team name:</label><br>
                <input type="text" placeholder="Enter team name" id="team_name" name="team_name" required><br>

                <label for="team_password">Password:</label><br>
                <input type="password" placeholder="Enter password" id="team_password" name="team_password" required><br>
                <input type="checkbox" id="showpass" onclick="showPass()">
                <label for="showpass" class="shw">Show password</label>
            </div>

            <!-- Logo -->
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
                <img src="https://t3.ftcdn.net/jpg/05/08/88/82/360_F_508888212_50sPZWAnDEe0IdZGwd5fb1CUDEFPNJgy.jpg"
                    class="img-circle" alt="Team Logo" id="output"/>

                <input type="file" accept="image/*" onchange="loadFile(event)" class="uploadbtn" name="team_logo" id="team_logo">

            </div>

            <!-- Tombol -->

            <div class="option">
                <a href="{{ route('welcome') }}" class="cancelbtn">Cancel</a>

                <button type="submit" class="signupbtn">Sign Up</button>
            </div>

        </form>
    </div>

</body>

</html>
