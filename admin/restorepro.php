<?php
require('../includes/config.php');

$restore_pro = $_GET['id'];
$pro_restore = "UPDATE `addproduct` set status = '1' WHERE pid = '$restore_pro'";
$restore_db = mysqli_query($connection,$pro_restore);
if($restore_db){
    echo '<script> window.location.href="viewproduct.php" </script>';

}
?>