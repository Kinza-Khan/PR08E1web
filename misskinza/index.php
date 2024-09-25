<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php
$userName = "ali";
$userAge = 21;
echo $userName . "<br>" . $userAge ;
echo "<h1>".$userName."</h1>";
?>

<?php
$empName = "Huzaifa";
$empEmail = "huzaifa@gmail.com";
$color = "red";
?>
<h1 style="color: <?php echo $color?>;"><?php echo $empName?></h1>
<h2><?php echo $empEmail?></h2>
</body>
</html>