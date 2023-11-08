<?php
require('../includes/config.php');
// include('header.php');

$pro_fetch = $_GET['id'];
$pro_id = "SELECT * FROM `addproduct` WHERE pid = '$pro_fetch'";
$con_db = mysqli_query($connection,$pro_id);

if(!$con_db){
    die ('Not update');
}
 if(mysqli_num_rows($con_db) > 0){
    while($up_db = mysqli_fetch_assoc($con_db)){
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
                        
                        <h3 class="text-primary">Update Product</h3>  
                        <form action="updprodetails.php" method="post" enctype= "multipart/form-data">

                        <div class="form-floating mb-3">
                            <input type="text" name="pid" class="form-control" id="floatingText" placeholder="Prouct ID" value="<?php echo $up_db['pid'];?>">
                            <label for="pid">Products IDs</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="ptitle" class="form-control" id="floatingText" placeholder="Prouct Title" value="<?php echo $up_db['ptitle'];?>">
                            <label for="ptitle" >Product title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="pdesc" class="form-control" id="floatingInput" placeholder="Product Discription" value="<?php echo $up_db['pdescription'];?>">
                            <label for="pdesc" >Product description</label>
                        </div>
                        <div class="form-floating mb-3">
                  <!-- <label for="Category"> Category </label> -->
                  <br>
                <?php
                $products = "SELECT * from `addcat`";
                $result1 = mysqli_query($connection, $products);
                if(mysqli_num_rows($result1) > 0) {
                  ?>
                <select class="form-select col-md-12" name="pcat" aria-label="Default select example">
                    <h3 selected>Select Category</h3>
                    <?php
                    while($row = mysqli_fetch_assoc($result1)){
                    ?>
                    <option value="<?php echo $row['id']?>"><?php echo  $row['name']?></option>
                    <?php
                    }  
                    }                
                    ?>
                </select>
                </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="pprice" class="form-control" id="floatingPrice" placeholder="Product price" value="<?php echo $up_db['pprice'];?>">
                            <label for="cdesc">Product price</label>
                        </div>

                        <style>
                            .addFile 
                          {
                             padding: 20px;
                             height: 120px;
                             border: 2px solid red;
                             border-radius: 20PX;
                             display: flex;
                             align-items: center;
                             justify-content: center;
                         }
                        </style>
                        <div class=" mb-4 py-5">
                            <label for="imgFile">

                                <div class="addFile">
                                    Upload A Product Image
                                </div>
                            </label>
                        <input type="file" style="display: none;" name="pimage" class="form-control" id="imgFile" placeholder="Product Image" value="<?php echo $up_db['pimage'];?>">
                        </div>
                        
                        <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                              <a href="">Forgot Password</a>  
                        </div> -->
                        <br>
                        <input type="submit"  class="btn btn-primary btn-user btn-block"  value="Update Product"name="submit">                       
                        </form>
                    <!-- </div>
                </div>
            </div> -->
        </div>
       <?php
    }
       }
       ?>
 


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