<?php
require('../includes/config.php');

$del_id = $_GET['id'];
$com_del = "DELETE from `addproduct` where pid = '$del_id'";
$delpro_db = mysqli_query($connection,$com_del);
if($delpro_db){
    echo "<script>alert('Are you sure to delete this product ?')</script>";
    echo '<script> window.location.href="viewproduct.php" </script>';

}
?>