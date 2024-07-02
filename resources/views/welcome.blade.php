<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
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

        .choose{
            padding: 26px 10px;
        }

        .btn {
            background-color: #000000;
            border: none;
            color: white;
            border-radius: 20px;
            text-align: center;
            font-size: 20px;
            width:140px;
            height:40px;
            margin: 2px;
            opacity: 1;
            transition: 0.3s;
            cursor: pointer;
        }

        .btn:hover {
            background-color:#FF903F;
            color: rgb(0, 0, 0);
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Welcome to SportDasb</h1>
        <p>Already have an account?</p>

        <!-- Tombol -->

        <div class="choose"><a href="{{ route('sign-in') }}" class="btn" font-size= "36px">Sign in</a><br>
            <p font-size= "16px">or</p>

        <a href="{{ route('sign-up') }}" class="btn" font-size= "36px">Sign up</a></div>

    </div>

</body>

</html>
