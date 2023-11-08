<?php
require('../includes/config.php');

$del_id = $_GET['id'];
$com_del = "DELETE from `addcat` where id = '$del_id'";
$delpro_db = mysqli_query($connection,$com_del);
if($delpro_db){
    echo "<script>alert('Are you sure to delete this category ?');</script>";
    echo '<script> window.location.href="viewcategory.php" </script>';

}
?>