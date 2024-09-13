<?php
include('components/header.php');
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $pdo->prepare("select * from categories where id=:pid");
    $query->bindParam("pid",$id);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($data);
    // die();
// var_dump($data);
}
?>

<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12 px-3 py-5  ">
                        <h3>update Category</h3>
                        <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                    value="<?php echo $data['catName']; ?>"
                                    name="categoryName"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category Image</label>
                                    <input type="file" class="form-control" name="categoryImage"  id="exampleInputPassword1">
                                    <img src="<?php echo $catimagesAddress.$data['catImage']?>" width="80px"  alt="">
                                </div>
                               
                                <button type="update" name="updateCategory" class="btn btn-primary">update Category</button>
                            </form>
                    </div>
                </div>
            </div>
























<?php
include('components/footer.php');
?>
