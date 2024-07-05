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

    <style>
        h1 {
            color: black;
            font-family: 'Oswald';
            font-size: 50px;
        }

        body {
            background-color: #FF903F;
            color: black;
            font-family: 'Oswald';
            font-size: 26px;
        }

        .container {
            background-color: #FFFFFF;
            text-align: center;
            padding: 3px 10px;
            border-radius: 10px;
            width: 500px;
            height: 350px;
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .choose {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px;
        }

        .signinbtn {
            background-color: #000000;
            border: none;
            color: white;
            border-radius: 20px;
            text-align: center;
            font-size: 20px;
            width: 140px;
            height: 40px;
            margin-left: 0;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
        }

        .signinbtn:hover {
            background-color: #283ada;
            color: rgb(255, 255, 255);
        }

        .welcomebtn {
            background-color: #000000;
            border: none;
            color: white;
            border-radius: 20px;
            text-align: center;
            font-size: 20px;
            width: 140px;
            height: 40px;
            margin-right: 0;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
        }

        .welcomebtn:hover {
            background-color: #283ada;
            color: rgb(255, 255, 255);
        }
    </style>

</head>

<body>

    <div class="container">
        <h1>Sign up success!</h1>
        <p>Please sign in through the button below</p>

        <!-- Tombol -->

        <div class="choose">
            <a href="{{ route('sign-in') }}" class="signinbtn" font-size= "36px">Sign in</a><br>

            <a href="{{ route('welcome') }}" class="welcomebtn" font-size= "36px">Back to front</a>
        </div>

</body>

</html>
