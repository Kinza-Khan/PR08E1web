
<?php
include('php/query.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>

  <div class="container p-5">
    <form action="" method="post">
        <div class="form-group">
          <label for="">Name</label>
          <input value="<?php echo $userName?>" type="text" name="uName" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userNameErr?></small>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" value="<?php echo $userEmail?>" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userEmailErr?></small>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="text" value="<?php echo $userPassword?>" name="uPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userPasswordErr?></small>
        </div>
        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="text" value="<?php echo $userConfirmPassword?>" name="uConfirmPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userConfirmPasswordErr?></small>
        </div>
        <button class="btn btn-info" name="userRegister">Register</button>
    </form>
  </div>
  </body>
</html>