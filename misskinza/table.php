<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
                <div class="container p-5">
                    <table class="table">
                        <tbody>
                           <?php
                           $number = 23 ;
                           for($i=1 ; $i<=10 ; $i++)
                           {
                            ?>
                                <tr>
                                    <td><?php echo $number?></td>
                                    <td><?php echo 'X'?></td>
                                    <td><?php echo $i?></td>
                                    <td><?php echo '='?></td>
                                    <td><?php echo $i*$number?></td>
                                </tr>
                             <?php
                           }
                           ?>
                        </tbody>
                    </table>
                </div>
  </body>
</html>