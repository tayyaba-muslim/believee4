<?php
require('../includes/config.php');
if(isset($_POST['submit'])){
    $product_id = $_POST['pid'];
    $product_title = $_POST['ptitle'];
    $product_desc = $_POST['pdesc'];
    $product_price = $_POST['pprice'];
    $product_image = $_FILES['pimage']['name'];
    $img_tmpname = $_FILES['pimage']['tmp_name'];
    $img_size = $_FILES['pimage']['size'];

    $update_product = "UPDATE `addproduct` set ptitle = '$product_title' , pdescription = '$product_desc' , pprice = '$product_price' , pimage = '$product_image' WHERE pid = '$product_id'";
    move_uploaded_file($img_tmpname , '../images' . $product_image);
    $pro_upd = mysqli_query($connection,$update_product);
    
    if(!$pro_upd){
        echo "<script> alert('Product already exist'); </script>";
    } 
     else{
            echo "<script> alert('Product successfully uploaded'); </script>";
            echo '<script> window.location.href="viewproduct.php" </script>';


        }
        
    
     
    
}
?>