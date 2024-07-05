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
            var x = document.getElementById("password");
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

        h1 {
            text-align: center;
        }

        .container {
            background-color: #FFFFFF;
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

        input[type=checkbox] {

            margin: 8px;
        }

        .shw {
            font-size: 16px;
        }

        .option{
            display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 10px;
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

        .signinbtn {
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

        .signinbtn:hover {
            background-color: #1e2892;
            color: rgb(255, 255, 255);
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Sign in to your dashboard</h1>

        <form action="{{ route('sign-in.success') }}" target="_self" method="post">
            <div class="isian">
                <label for="team_name">Team name:</label><br>
                <input type="text" placeholder="Enter team name" id="team_name" name="team_name" required><br>

                <label for="password">Password:</label><br>
                <input type="password" placeholder="Enter password" id="password" name="password" required><br>

                <input type="checkbox" id="showpass" onclick="showPass()">
                <label for="showpass" class="shw">Show password</label>

            </div>
            <!-- Tombol -->

            <div class="option">
                <a href="{{route('welcome')}}" class="cancelbtn">Cancel</a>
                <button type="submit" class="signinbtn">Sign In</button>
            </div>

        </form>
    </div>

</body>

</html>
