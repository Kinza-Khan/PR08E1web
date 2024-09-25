<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>conditional statement</title>
  </head>
  <body>
  
        <div class="conainer">
            <?php
            $userName = "admin";
            $userEmail = "ali@gmail.com";
            $userPass = 123 ;
            if(($userName == "admin" || $userEmail == "admin@gmail.com") && $userPass == 123  ){
                echo "login";
            }
            else{
                echo "invalid credentials";
            }
            
            ?>
        </div>
  </body>
</html>