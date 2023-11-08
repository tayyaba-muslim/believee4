<?php
require('../includes/config.php');
// include('header.php');

$fetch_cat = "SELECT * FROM `addcat` WHERE status = '0'";
$cat_query = mysqli_query($connection,$fetch_cat);
if(mysqli_num_rows($cat_query) > 0 ){
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


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                      <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h3 class="mb-4 text-primary">View Trash Categories</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered text-white">
                                    <thead>
                                        <tr>
                                            <th scope="col">Categories_ID</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Category Type</th>
                                            <th scope="col">Category Description</th>
                                            <th scope="col">Category Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                     while($show = mysqli_fetch_assoc($cat_query)){
                                     ?>

                                        <tr>
                                            <td><?php echo $show['id'];?></td>
                                            <td><?php echo $show['name'];?></td>
                                            <td><?php echo $show['type'];?></td>
                                            <td><?php echo $show['description'];?></td>
                                            <?php
                                            if($show['status'] == 0){
                                            ?>
                                            <td><?php echo "De-Active" ?></td>
                                            <?php
                                            }
                                            ?>
                                            <td><a href="restorecat.php?id=<?php echo $show['id'];?>" class="btn btn-warning">Restore</a> 
                                                <a href="deletecat.php?id=<?php echo $show['id'];?>" class="btn btn-primary ">Delete</a></td>
                                            <!-- <td>Member</td> -->
                                        </tr>
                                        
                                        <?php
                                        }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>