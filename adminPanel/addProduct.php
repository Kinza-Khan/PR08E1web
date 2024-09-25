<?php
include("query.php");
include("header.php");
?>

    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
                <div class=" p-5 row vh-100 bg-light rounded  justify-content-center mx-0">
                    <div class="col-md-10 p-5">
                        <h3>This is Product page</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" name="pName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="text" name="pPrice" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Description</label>
                              <input type="text" name="pDes" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Quantity</label>
                              <input type="text" name="pQty" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Image</label>
                              <input type="file" name="pImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Category</label>
                              <select name="cId" class="form-control" id="">
                                <option value="">Select Catgeory</option>
                                <?php
                                $query  = $pdo->query("Select * from categories");
                                $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($allCategories as $category){
                                ?>
                                <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                                <?php
                                }
                                ?>
                              </select>
                            </div>
                            <button class="btn btn-info mt-3" name="addProduct">Add</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->



<?php

include("footer.php");
?>