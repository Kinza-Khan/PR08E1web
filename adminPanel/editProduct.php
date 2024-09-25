<?php
include("query.php");
include("header.php");
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $pdo->prepare("SELECT products.* , categories.name as cateName , categories.id as catId FROM products INNER JOIN categories ON products.c_id = categories.id where products.id = :pId");
    $query->bindParam('pId',$id);
    $query->execute();
    $product = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($product);

}

?>
    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
                <div class=" p-5 row vh-100 bg-light rounded  justify-content-center mx-0">
                    <div class="col-md-10 p-5">
                        <h3>This is Product page</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input value="<?php echo  $product['name']?>" type="text" name="pName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Price</label>
                              <input value="<?php echo  $product['price']?>"  type="text" name="pPrice" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Description</label>
                              <input type="text" value="<?php echo  $product['des']?>"  name="pDes" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Quantity</label>
                              <input value="<?php echo  $product['qty']?>"  type="text" name="pQty" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Image</label>
                              <input type="file" name="pImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <img height="100px" src="img/<?php echo $product['image']?>" alt="">
                            </div>
                            <div class="form-group">
                              <label for="">Category</label>
                              <select name="cId" class="form-control" id="">
                                <option value="<?php echo $product['catId']?>"><?php echo $product['cateName']?></option>
                                <?php
                                $query  = $pdo->prepare("Select * from categories where name != :cName");
                                $query->bindParam('cName',$product['cateName']);
                                $query->execute();
                                $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($allCategories as $category){
                                ?>
                                <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                                <?php
                                }
                                ?>
                              </select>
                            </div>
                            <button class="btn btn-info mt-3" name="updateProduct">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->



<?php

include("footer.php");
?>