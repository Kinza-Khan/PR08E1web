


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
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Age</th>
          <th scope="col">City</th>
        </tr>
      </thead>
      <tbody>
      <?php
    $allStudents = [
    ["ali","ali@gmail.com",21],  //0
    ["aqsa","aqsa@gmail.com",22,"Karachi"], //1
    ["hassan","hassan12@gmail.com"] //2
];
foreach($allStudents as $student){
  ?>
  <tr>
<?php
        foreach($student as $value){
              ?>
                      
                            <td><?php echo $value?></td>                       
                       
              <?php
        }
        ?>
        </tr>  <?php
}?>
      </tbody>
    </table>    
  
      </body>
</html>