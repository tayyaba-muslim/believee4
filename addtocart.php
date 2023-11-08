<?php
session_start();
include('includes/config.php');

$userid = $_POST['userid'];
$proid = $_POST['proid'];
$qty = $_POST['qty'];
$current_user_id = $_SESSION['userid'];
// echo $userid . $proid . $qty . $size . $current_user_id;


if($current_user_id == $userid){
	$check_cart = "SELECT * from cart where proid = '$proid' AND userid = '$userid'";
	$check_cart = mysqli_query($connection, $check_cart);
	if(mysqli_num_rows($check_cart) > 0){
        echo '<script>
        alert("Product already exist in your cart")
		</script>';
        }else{
		$cart_insert = "INSERT INTO `cart` (`userid`, `proid`, `cartqty`) VALUES ('$userid', '$proid', '$qty')";
		$query = mysqli_query($connection, $cart_insert);
		if($query){
			echo '<script>
        alert("Product successfully added")
		window.location.href="cart.php"
		</script>';
		}else{
			echo 'query failed';
		}

	}

	
}

?>