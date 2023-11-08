<?php
require('../includes/config.php');

$restore_cat = $_GET['id'];
$restore_con = "UPDATE `addcat` set status = '1' WHERE id = '$restore_cat'";
$restore_db = mysqli_query($connection,$restore_con);
if($restore_con){
    echo '<script> window.location.href="viewcategory.php" </script>';

}
?>