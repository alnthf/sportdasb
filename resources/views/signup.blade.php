<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Notes -->

        <style>

            body {
            background-color: #FF903F;
            }

        </style>
    </head>

    <body>
	    <form action="sign-up/success" target="_self" method="post">

            <label for="team_name">Team name:</label><br>
            <input type="text" id="team_name" name="team_name"><br>

            <label for="password">Password:</label><br>
            <input type="text" id="password" name="password"><br><br>

            <input type="button">

            <input type="submit" value="Sign up">

	    </form>
    </body>

</html>
