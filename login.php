<?php
include("php/query.php");
include("components/header.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>


    <div class="container p-5">
      <div class="col-md-7 mt-5">
      <form action="" method="post">
        <div class="form-group ">
          <label for="">Email</label>
          <input value="<?php echo $uEmail ?>" type="text" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $uEmailErr ?></small>
        </div>
        <div class="form-group ">
          <label for="">Password</label>
          <input value="<?php echo $uPass?>" type="text" name="uPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $uPassErr ?></small>
        </div>
        <button name="userLogin" class="btn btn-info">Login</button>
        </form>
        </div>
    </div>
  </body>
</html>

<?php
include("components/footer.php");
?>