<?php
require('../includes/config.php');
include('navbar1.php');
if(isset($_POST['submit'])){
    $ad_name = mysqli_real_escape_string($connection,$_POST['name']);
    $ad_email = mysqli_real_escape_string($connection, $_POST['email']);
    $ad_password = mysqli_real_escape_string($connection, $_POST['password']);
    $ad_phone = mysqli_real_escape_string($connection, $_POST['phone']);

    $_password = password_hash($ad_password , PASSWORD_BCRYPT);
    $email_check = "SELECT * FROM `admin_reg` WHERE email = '$ad_email'";
    $query = mysqli_query($connection,$email_check);
    if(mysqli_num_rows($query) > 0 ){
        echo "<script>alert('Enter ivalid email/password')</script>";
    }
    else{
        $email_query = "INSERT INTO `admin_reg` ( `id`,`name`, `email`, `password`, `phone`) VALUES ( NULL,'$ad_name', '$ad_email', '$_password', '$ad_phone')";
        $insert = mysqli_query($connection,$email_query);
        echo '<script> window.location.href="signin.php" </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php">
                                <h3 class="text-primary"> J's Cosmetics</h3>
                            </a>
                            <h3>Register</h3>
                        </div>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" name="name"class="form-control" id="floatingText" placeholder="Username">
                            <label for="name" >Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
                            <label for="email" >Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="password" >Password</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="phone" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="phone" >Phone</label>
                        </div>
                        <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                              <a href="">Forgot Password</a>  
                        </div> -->
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Sign Up</button>
                        <p class="text-center mb-0">Already have an Account? <a href="signin.php">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>


</body>

</html>