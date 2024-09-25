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
            <div class="container p-4">
                <form action="" method="post">
                            <div class="form-group">
                              <label for="">Enter Number</label>
                              <input type="text" name="userNumber" id="" class="form-control" placeholder="" aria-describedby="helpId">
                             
                            </div>
                            <button class="btn btn-info" name="sub">Submit</button>
                </form> 
            </div>
            <div class="container">
                <table class="table">
                    <tbody>
            <?php
            if(isset($_POST['sub'])){
                $number = $_POST['userNumber'];
                for($i = 1 ; $i<=10 ; $i++){
                ?>
                            <tr>
                                <td><?php echo $number?></td>
                                <td><?php echo 'x'?></td>
                                <td><?php echo $i?></td>
                                <td><?php echo '='?></td>
                                <td><?php echo $number*$i?></td>
                            </tr>
                <?php
            }
        }
            
            ?>
            </tbody>
            </table>
            </div>
  </body>
</html>