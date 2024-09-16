<?php
include('connection.php');
// add categories
$catimagesAddress = "img/categories/";
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

// update categories
}

if(isset($_POST['updateCategory'])){
    $id = $_POST['id'];
$catname = $_POST['categoryName'];
if(!empty($_FILES['categoryImage']['name'])){
$catimage = $_FILES['categoryImage']['name'];
$catTmpname = $_FILES['categoryImage']['tmp_name'];
$extension = pathinfo($catimage,PATHINFO_EXTENSION);
$des = 'img/categories/'.$catimage;
if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
    if(move_uploaded_file($catTmpname,$des)){
        $query = $pdo->prepare("update categories set catName=:pn, catImage=:pi where id = :pid");
        $query->bindparam("pid",$id);
        $query->bindParam("pn",$catname);
        $query->bindParam("pi",$catimage);
        $query->execute();
        echo "<script> alert('category update successfully');
       location.assign('viewcategory.php')
       </script>";
   
    }
}
}else{
    $query = $pdo->prepare("update categories set catName=:pn where id = :pid");
    $query->bindparam("pid",$id);
    $query->bindParam("pn",$catname);
       $query->execute();
    echo "<script> alert('category update successfully');
   location.assign('viewcategory.php')
   </script>";
}

}
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $query = $pdo->prepare("delete from categories where id = :pid");
    $query->bindparam("pid",$id);
    $query->execute();
    echo "<script>
    alert('Data deleted Successfully');
    location.assign('viewcategory.php');
    </script>";


}
?>