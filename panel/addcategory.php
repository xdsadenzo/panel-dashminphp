
<?php
include('components/header.php');
include('PHP/query.php')
?>

  <!-- category Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12 px-3 py-5  ">
                        <h3>Add Category</h3>
                        <form method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                    name="categoryName"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category Image</label>
                                    <input type="file" class="form-control" name="categoryImage" id="exampleInputPassword1">
                                </div>
                               
                                <button type="submit" name="addCategory" class="btn btn-primary">Add Category</button>
                            </form>
                    </div>
                </div>
            </div>
            <!-- category End -->


<?php
include('components/footer.php');
?>