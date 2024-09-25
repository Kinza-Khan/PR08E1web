<?php
include("dbcon.php");
session_start();
$cNameErr = $cDesErr = $cImageNameErr = "" ;
$cName = $cDes = $cImageName = "" ;
if(isset($_POST['addCategory'])){
    $cName = $_POST['cName'];
    $cDes = $_POST['cDes'];
    $cImageName = $_FILES['cImage']['name'];
    $cImageTmpName = $_FILES['cImage']['tmp_name'];
    $destination = "img/".$cImageName ;
    if(empty($cName)){
        $cNameErr = "category name is required";
    }
    if(empty($cDes)){
        $cDesErr = "category description is required";
    }
    $arrayFormat = ["jpeg" , "png" , "jpg" , "webp" ,"jfif"] ;
    $fileExtension = pathinfo($cImageName,PATHINFO_EXTENSION);
    if(!in_array($fileExtension,$arrayFormat)){
                $cImageNameErr = "invalid format";
    }
    if(empty($cNameErr) && empty($cDesErr) && empty($cImageNameErr)){
        if(move_uploaded_file($cImageTmpName,$destination)){
            $query = $pdo->prepare("insert into categories (name , des, image) values (:cName , :cDes , :cImage)");
            $query->bindParam('cName',$cName);
            $query->bindParam('cDes',$cDes);
            $query->bindParam('cImage',$cImageName);
            $query->execute();
            echo "<script>alert('category added successfully');
            location.assign('addCategory.php');
            </script>";
        }
    }
}


// update Category
if(isset($_POST['updateCategory'])){
        $categoryId = $_GET['id'];
        $cName = $_POST['cName'];
        $cDes = $_POST['cDes'];
        $query = $pdo->prepare("update categories set name = :cName , des = :cDes where id = :cId ");

        if(!empty(($_FILES['cImage']['name'])) ){
            $cImageName = $_FILES['cImage']['name'];
            $cImageTmpName = $_FILES['cImage']['tmp_name'];
            $destination = "img/".$cImageName;
            $extension = pathinfo($cImageName,PATHINFO_EXTENSION);
            $extensionArray = ["jpeg","jpg","png","webp","jfif"] ;
            if(in_array($extension,$extensionArray)){

                 if(move_uploaded_file($cImageTmpName,$destination)){
                    $query = $pdo->prepare("update categories set name = :cName , des = :cDes , image = :cImage where id = :cId") ;
                    $query->bindParam('cImage',$cImageName);
                 }
            }
            else{
                echo "<script>alert('invalid');</script>";
            }
          
            
        }
        $query->bindParam('cId',$categoryId);
        $query->bindParam('cName',$cName);
        $query->bindParam('cDes',$cDes);
        $query->execute();
        echo "<script>alert('updated');location.assign('addCategory.php')</script>";


      }

        // remove category 
        if(isset($_GET['remove'])){
                $id = $_GET['remove'];
                $query = $pdo->prepare("delete  from categories where id = :cId");
                $query->bindParam('cId',$id);
                $query->execute();
                echo "<script>alert('deleted');location.assign('viewCategory.php')</script>";

        }
        // product
        if(isset($_POST['addProduct'])){
            $pName = $_POST['pName'];
            $pDes = $_POST['pDes'];
            $pPrice = $_POST['pPrice'];
            $pQty = $_POST['pQty'];
            $cId = $_POST['cId'];
            $pImageName = $_FILES['pImage']['name'];
            $pImageTmpName = $_FILES['pImage']['tmp_name'];
            $extension = pathinfo($pImageName,PATHINFO_EXTENSION);
            $destination = "img/".$pImageName;
            $extensionArray = ["jpg" ,"jpeg" , "png" , "webp"];
            if(in_array($extension , $extensionArray)){
                    if(move_uploaded_file($pImageTmpName,$destination)){
                            $query = $pdo->prepare("insert into products (name,price, des , qty , image ,c_id) values (:name, :price , :des , :qty , :image , :cId)");
                            $query ->bindParam('name',$pName);
                            $query ->bindParam('price',$pPrice);
                            $query ->bindParam('des',$pDes);
                            $query ->bindParam('qty',$pQty);
                            $query ->bindParam('image',$pImageName);
                            $query ->bindParam('cId',$cId);
                            $query->execute();
                            echo "<script>alert('product added');location.assign('addProduct.php')</script>";

                    }
            }

        }




        // update Product
        if(isset($_POST['updateProduct'])){
            $productId = $_GET['id'];
            $pName = $_POST['pName'];
            $pDes = $_POST['pDes'];
            $pPrice = $_POST['pPrice'];
            $pQty = $_POST['pQty'];
            $cId = $_POST['cId'];
            $query = $pdo->prepare("update products set name = :pName , des = :pDes , price = :pPrice , qty = :pQty , c_id = :cId where id = :pId ");   
            if(!empty(($_FILES['pImage']['name'])) ){
                $pImageName = $_FILES['pImage']['name'];
                $pImageTmpName = $_FILES['pImage']['tmp_name'];
                $destination = "img/".$pImageName;
                $extension = pathinfo($pImageName,PATHINFO_EXTENSION);
                $extensionArray = ["jpeg","jpg","png","webp","jfif"] ;
                if(in_array($extension,$extensionArray)){   
                     if(move_uploaded_file($pImageTmpName,$destination)){
                        $query = $pdo->prepare("update products set name = :pName , des = :pDes , price = :pPrice , qty = :pQty , c_id = :cId ,image = :pImage  where id = :pId") ;
                        $query->bindParam('pImage',$pImageName);
                     }
                }
                else{
                    echo "<script>alert('invalid');</script>";
                }                        
            }
            $query->bindParam('pId',$productId);
            $query->bindParam('pName',$pName);
            $query->bindParam('pDes',$pDes);
            $query->bindParam('pPrice',$pPrice);
            $query->bindParam('pQty',$pQty);
            $query->bindParam('cId',$cId);
            $query->execute();
            echo "<script>alert('updated');location.assign('viewProduct.php')</script>";
    
    
          }
?>