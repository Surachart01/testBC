<?php  
    include("connect_db.php");

    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = '$id'";
    $qSql = $conn->query($sql);
    header("location:index.php");
?>