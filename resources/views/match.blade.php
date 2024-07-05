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

                   font-family: 'Oswald';
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

       </body>
</html>
