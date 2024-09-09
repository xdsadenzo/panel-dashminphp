<?php
include('connection.php');
// categories
if(isset($_POST['addCategory'])){
$catname = $_POST['categoryName'];
$catimage = $_FILES['categoryImage']['name'];
$catTmpname = $_FILES['categoryImage']['tmp_name'];
$extension = pathinfo($catimage,PATHINFO_EXTENSION);
$des = 'img/categories/'.$catimage;
if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
    if(move_uploaded_file($catTmpname,$des)){
        $query = $pdo->prepare("insert into categories (catName,catImage) values(:pn,:pi)");
        $query->bindParam("pn",$catname);
        $query->bindParam("pi",$catimage);
        $query->execute();
        echo "<script> alert('category add successfully') </script>";
    }
}


}
?>