<?php
include("query.php");
include("header.php");
?>

        <?php
        if(isset($_GET['id'])){
                $categoryId = $_GET['id'];  
                $query = $pdo->prepare("select * from categories where id = :cId");
                $query->bindParam('cId', $categoryId);
                $query->execute();
                $category = $query->fetch(PDO::FETCH_ASSOC);
                // print_r($category);


        }
        
        ?>
  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 p-5 bg-light rounded  justify-content-center mx-0">
                    <div class="col-md-10">
                        <h3>This is Category Page</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input value="<?php echo $category['name']?>" type="text" name="cName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-danger"><?php echo $cNameErr?></small>
                            </div>
                            <div class="form-group">
                              <label for="">Description</label>
                              <input value="<?php echo $category['des']?>" type="text" name="cDes" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-danger"><?php echo $cDesErr?></small>
                            </div>
                            <div class="form-group">
                              <label for="">Image</label>
                              <input type="file" name="cImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-danger"><?php echo $cImageNameErr?></small>
                              <img height="100px" src="img/<?php echo $category['image']?>" alt="">
                            </div>
                            <button class="btn btn-primary mt-3" name="updateCategory">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->







<?php

include("footer.php");
?>