<?php  
    include("connect_db.php");

    $name = $_POST['name'];
    $code = $_POST['code'];


    $image = $_FILES['image'];
    $file_exp=strtolower(pathinfo($img['name'],PATHINFO_EXTENSION));
    $nameImage = time();
    $fullname = $nameImage.".".$file_exp;
    $path = 'image/'.$fullname;
    move_uploaded_file($image['tmp'],$path);
    

    $sql = "INSERT INTO users (name,Code,mage) VALUES ('$name','$code','$nameImage')";
    $qSql = $conn->query($sql);
    header("location:index.php");
?>