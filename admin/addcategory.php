<?php
require('../includes/config.php');
// include('header.php');
if(isset($_POST['submit'])){
    $cat_name = $_POST['cname'];
    $cat_type = $_POST['ctype'];
    $cat_desc = $_POST['cdesc'];
    $cat_status = $_POST['status'];

    $db_cat = "INSERT INTO `addcat` (`name`, `type`, `description`, `status`) VALUES ('$cat_name', '$cat_type', '$cat_desc', '$cat_status')";
    $cat_con = mysqli_query($connection,$db_cat);

    if(!$cat_con){
        echo "<script>alert('Enter a category')</script>";
    }else{
        echo '<script> window.location.href="viewcategory.php" </script>';
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


        <!-- Sidebar Start -->
        <?php
        include('sidebar.php');
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            include('navbar.php');
            ?>
            <!-- Navbar End -->

         <!-- Add Category -->
          <div class="container-fluid">
            <!-- <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3"> -->
                        
                        <h3 class="text-primary">Add Category</h3>  
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" name="cname"class="form-control" id="floatingText" placeholder="Username">
                            <label for="cname" >Category name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="ctype" class="form-control" id="floatingInput" placeholder="Email">
                            <label for="ctype" >Category type</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="cdesc" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="cdesc" >Category description</label>
                        </div>
                        <select class="form-select" aria-label="Default select example" name="status">
                         <option selected>Open this select status</option>
                         <option value="1">Active</option>
                         <option value="2">Deactivate</option>
                
                       </select>
                        <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                              <a href="">Forgot Password</a>  
                        </div> -->
                        <br>
                        <input type="submit"  class="btn btn-primary btn-user btn-block" name="submit">                       
                        </form>
                    <!-- </div>
                </div>
            </div> -->
        </div>
       
 


            <!-- Footer Start -->
          <?php
          include('footer.php');
          ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


</body>

</html>