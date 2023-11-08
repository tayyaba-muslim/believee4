<?php
 include('includes/navbar1.php');
 include('includes/config.php');
 
 if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email    = mysqli_real_escape_string($connection, $_POST['email']);
    $pass     = mysqli_real_escape_string($connection, $_POST['password']);
  
    $password = password_hash($pass, PASSWORD_BCRYPT);
  
    $email_check = "SELECT *  from `user-register` where email = '$email'";
    $result = mysqli_query($connection, $email_check); 
    if(mysqli_num_rows($result) > 0){
      echo "<script> alert('email already exist'); </script>";
    }else{
      $insert_query = "INSERT INTO `user-register` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
      $conn_insert = mysqli_query($connection, $insert_query);
      echo '<script> window.location.href="login.php" </script>';
 
    
    
    }
  
  
  
  }
 ?>
 <html>
<style>
    body{
        background-color:#2b2a2f;
        color:white;

    }
    .slid1 #home-slider #zoom1 img{
    -webkit-animation: thing 20s;
    -o-animation: thing 20s;
     animation: thing 20s;
  }
  @keyframes thing {
    from{
        transform: scale(1, 1);

    }
    to{
        transform: scale(1.9, 1.9);
    }
  }
</style>
 </html>

          <div id="main-slider" class="slid1"> <!-- Slider -->
              <div id="home-slider" class="owl-carousel owl-theme">
                  <div class="item" id="zoom1">
                      <img src="images/register.jpg" alt="slide-1" class="img-responsive">
                      <div class="slider-desc"
                          <div class="container">
                          <div class="row slider-text justify-content-center align-items-center">



</div>
                                  
                                      
                       
                      </div>
                  </div>
                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> <!-- Slider -->
      <br>
      <br>
      <br>    
          <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"class="billing-form ftco-bg-dark p-3 p-md-5">
	          	<div class="row align-items-end">
                 <div class="col-md-12">
                        <div class="form-group">
                            <label for="Username">Username</label>
                          <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                 </div>
	          	  <div class="col-md-12">
	                <div class="form-group">
	                	<label for="Email">Email</label>
	                  <input type="text" name="email" class="form-control" placeholder="Email">
	                </div>
	              </div>
                 
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="Password">Password</label>
	                    <input type="password" name="password" class="form-control" placeholder="Password">
	                </div>

                </div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
							<div class="radio">
                                <button name="register" class="btn btn-primary py-3 px-4">Register</button>
						    </div>
					</div>
                </div>

               
	          </form><!-- END -->
                     <!-- <form action="index.html">
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" required></textarea>
                           <input type="submit" value="Submit" />
                        </fieldset>
                     </form> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

         <br>
         <br>
         <br>
<?php
include('includes/footer.php')
?>