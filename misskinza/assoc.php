<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container p-5">
                    <?php
                    $students = ["std1"=>"Asad","std2"=>"Aqsa","std3"=>"Huzaifa"] ;
                        print_r($students);
                      echo  $students['std1'];

                    ?>
                    <h1>Foreach</h1>
                    <ul>
                    <?php
                    foreach($students as $key => $std){
                            // echo $std . "<br>";
                            ?>
                                    <li><?php  echo  $key . " : " . $std?></li>
                            <?php
                    }
                    ?>
                    </ul>
        </div>
  </body>
</html>