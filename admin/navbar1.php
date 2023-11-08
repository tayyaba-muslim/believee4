<?php
session_start();
if(isset($_SESSION['admin'])){
    header('location:index.php');
}
?>
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                
                </a>
           
                <div class="navbar-nav align-items-center ms-auto" >
                <a href="signin.php" style="color:white; margin-right: 40px;">Sign in</a>
            
              
                 <a href="register.php" style="color:white; margin-right: 40px;">Register</a>
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/jeny.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Jeny</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item"style="color:red; ">My Profile</a>
                            <a href="#" class="dropdown-item" style="color:red; ">Settings</a>
                          
                        </div>
                    </div>
                </div>
            </nav>
            