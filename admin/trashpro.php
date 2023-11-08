<?php
require('../includes/config.php');

$trash_pro = $_GET['id'];
$pro_con = "UPDATE `addproduct` set status = '0' WHERE pid = '$trash_pro'";
$pro_db = mysqli_query($connection,$pro_con);
if($pro_con){
    echo '<script> window.location.href="trashprodetails.php" </script>';

}
?>