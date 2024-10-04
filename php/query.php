<?php
include("adminPanel/dbcon.php");
session_start();
$userNameErr = $userEmailErr = $userPasswordErr = $userConfirmPasswordErr = "" ;
$userName = $userEmail = $userPassword = $userConfirmPassword = "" ;

if(isset($_POST['userRegister'])){
    $userName = $_POST['uName'];
    $userEmail = $_POST['uEmail'];
    $userPassword = $_POST['uPassword'];
    $userConfirmPassword = $_POST['uConfirmPassword'];
    if(empty($userName)){
        $userNameErr = "Name is Required";
    }
    if(empty($userEmail)){
        $userEmailErr = "Email is Required";
    }
    else{
        $query = $pdo ->prepare("select * from users where email = :userEmail");
        $query->bindParam('userEmail',$userEmail);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        // print_r($user);
        if($user){
            $userEmailErr = "Email is already exist";
        }
    }
    if(empty($userPassword)){
        $userPasswordErr = "Password is Required";
    }
    if(empty($userConfirmPassword)){
        $userConfirmPasswordErr = "Confirm Passwor is Required";
    }
    else{
        if($userPassword != $userConfirmPassword){
             $userConfirmPasswordErr = "Password is not matched";
        }
    }
      if(empty($userNameErr) && empty($userEmailErr) && empty($userPasswordErr) && empty($userConfirmPasswordErr)){

            $query = $pdo->prepare("insert into users (name , email , password) values (:uName , :uEmail , :uPassword)");
            $query->bindParam('uName',$userName);
            $query->bindParam('uEmail',$userEmail);
            $query->bindParam('uPassword',$userPassword);
            $query->execute();
            echo "<script>alert('user added');location.assign('register.php')</script>";

        }
}


// login Work

$uEmail  = $uPass = "";
$uEmailErr  = $uPassErr = "";
if(isset($_POST['userLogin'])){
        $uEmail = $_POST['uEmail'];
        $uPass = $_POST['uPassword'];
    if(empty($uEmail)){
        $uEmailErr = "Email is Required";

    }
    if(empty($uPass)){
        $uPassErr = "Password is required";
    }

    if(empty($uEmailErr) && empty($uPassErr)){

        $query = $pdo->prepare("select * from users where email = :uEmail");
        $query->bindParam('uEmail',$uEmail);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        print_r($user);
        if($user){
                    if($user['password'] == $uPass){

                        if($user['role_id'] == 1){
                            $_SESSION['adminEmail'] = $user['email'];
                            $_SESSION['adminName'] = $user['name'];
                         echo "<script>location.assign('adminPanel/index.php')</script>"; 
                        
                        }
                        else if($user['role_id'] == 2){
                              $_SESSION['userId'] = $user['id'];
                                $_SESSION['userEmail'] = $user['email'];
                                $_SESSION['userName'] = $user['name'];
                                echo "<script>location.assign('index.php')</script>"; 
                        }
                       
                    }
                    else{
                        echo "<script>location.assign('login.php?error=invalid credentials')</script>"; 
                    }
        }
        else{
           echo "<script>location.assign('login.php?error=user not found')</script>"; 
        }
     }

}
?>