<?php
require('../includes/config.php');

$trash_cat = $_GET['id'];
$cat_con = "UPDATE `addcat` set status = '0' WHERE id = '$trash_cat'";
$con_db = mysqli_query($connection,$cat_con);
if($cat_con){
    echo '<script> window.location.href="trashcatdetails.php" </script>';

}
?>