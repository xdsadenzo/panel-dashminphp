
<?php
include("components/header.php")
?>

  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12 px-3">
                        <h3>All Categories</h3>
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">category name</th>
                                        <th scope="col">category image</th>
                                        <th scope="col" colspan="2" >action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        $query = $pdo ->query("select * from categories");
                        $catRows = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach($catRows as $catValues){
                            ?>
                      





                                    <tr>
                                        <th scope="row"><?php echo $catValues['id']  ?></th>
                                        <td><?php echo $catValues['catName']?>  </td>
                                        <td><img src="<?php echo $catimagesAddress.$catValues['catImage']?>" width="80px" ></td>
                                        <td><a href="updatecategory.php?id=<?php echo $catValues['id'] ?>" class="btn btn-outline-success">Edit</a></td>
                                        <td><a href="?deleteid=<?php echo $catValues['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
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
include("components/footer.php")
?>