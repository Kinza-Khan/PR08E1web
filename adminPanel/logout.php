<?php
include("query.php");
unset($_SESSION['adminEmail']);
echo "<script>location.assign('../login.php')</script>";
?>