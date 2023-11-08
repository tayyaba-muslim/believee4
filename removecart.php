<?php
include('includes/config.php');
// DELETE all DATA from CART
if(isset($_GET['userid'])){
    $userid = $_GET['userid'];

    $result = mysqli_query($connection,"DELETE from `cart` where `user_id` = '$userid'");
    if($result){
        echo '<script>
        alert("data deleted successfully")
        window.location.href="cartdetails.php"
        </script>';
    }else{
        echo '<script>
        alert("data not deleted")
        </script>';
        
    }

}

// DELETE single product form cart


if(isset($_GET['itemid'])){
    $itemid = $_GET['itemid'];

    $result = mysqli_query($connection,"DELETE from `cart` where `cartid` = '$itemid'");
    if($result){
        echo '<script>
        alert("Item deleted successfully")
        window.location.href="cart.php"
        </script>';
    }else{
        echo '<script>
        alert("data not deleted")
        </script>';
        
    }

}









?>