<?php
require('../includes/config.php');
$category_id = $_POST['id'];
$category_name = $_POST['cname'];
$category_type = $_POST['ctype'];
$category_desc = $_POST['cdesc'];
$category_update = "UPDATE `addcat` set name ='$category_name' ,type ='$category_type' , description = '$category_desc'
 where id = '$category_id' ";
$res = mysqli_query($connection, $category_update);
if (!$res) {
    die("Query failed");
}
header('location:viewcategory.php');
?>


