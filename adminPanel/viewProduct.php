<?php
include("query.php");
include("header.php");
?>
  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded justify-content-center mx-0">
                    <div class="col-md-12 text-center p-5">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Price</th>
                              <th scope="col">Category</th>
                              <th scope="col">Image</th>

                              <th>Action</th>
                              <th>Action</th>
                            
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                            $query = $pdo->query("SELECT products.* , categories.name as cateName FROM products INNER JOIN categories ON products.c_id = categories.id");
                            $allProducts = $query->fetchAll(PDO::FETCH_ASSOC);
                            // print_r($allCategories);
                            foreach($allProducts as $product){
                            ?>
                            <tr>
                              <th scope="row"><?php echo $product['id']?></th>
                              <td><?php echo $product['name']?></td>
                              <td><?php echo $product['des']?></td>
                              <td><?php echo $product['qty']?></td>
                              <td><?php echo $product['price']?></td>
                              <td><?php echo $product['cateName']?></td>
                              <td><img height="100px" src="img/<?php echo $product['image']?>" alt=""></td>
                              <td><a class="btn btn-info" href="editProduct.php?id=<?php echo $product['id']?>">Edit</a></td>
                              <td><a href="?remove=<?php echo $product['id']?>" class="btn btn-danger">Remove</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Blank End -->









<?php
include("footer.php");
?>