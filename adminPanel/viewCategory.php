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
                              <th scope="col">Image</th>
                              <th>Action</th>
                              <th>Action</th>
                            
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                            $query = $pdo->query("select * from categories");
                            $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                            // print_r($allCategories);
                            foreach($allCategories as $category){
                            ?>
                            <tr>
                              <th scope="row"><?php echo $category['id']?></th>
                              <td><?php echo $category['name']?></td>
                              <td><?php echo $category['des']?></td>
                              <td><img height="100px" src="img/<?php echo $category['image']?>" alt=""></td>
                              <td><a class="btn btn-info" href="editCategory.php?id=<?php echo $category['id']?>">Edit</a></td>
                              <td><a href="?remove=<?php echo $category['id']?>" class="btn btn-danger">Remove</a></td>
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