<?php
include('includes/navbar1.php');
include('includes/config.php');

if(isset($_POST['Login'])){
    $user_email = $_POST['Login_email'];
    $user_pass = $_POST['Login_pass'];
    
        $login_query = "SELECT * from `user-register` where email = '$user_email' ";
        $get_from_db = mysqli_query($connection, $login_query); 
        if(mysqli_num_rows($get_from_db) > 0){
          $row = mysqli_fetch_assoc($get_from_db);
          $db_pass = $row['password'];
          $pass_decode = password_verify($user_pass, $db_pass);
          $_SESSION["userid"] = $row['id'];
          $_SESSION["useremail"] = $row['email'];
          $_SESSION["username"] = $row['username'];
          echo '<script> window.location.href="index.php" </script>';
        }else{
          echo "<script> alert('Invalid Username/password'); </script>";
      
        }
      
                 
      }
  ?>
  <html>
<style>
    body{
        background-color:black;
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
                      <img src="images/login.jpg" alt="slide-1" class="img-responsive">
                      
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
              </div>
          </div> <!-- Slider -->
<!-- why section -->
<br>
<br>
<br>
<section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="Email">Email</label>
	                  <input type="text" name="Login_email" class="form-control" placeholder="Email">
	                </div>
	              </div>
                 
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="Password">Password</label>
	                    <input type="password" name="Login_pass" class="form-control" placeholder="Password">
	                </div>

                </div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
							<div class="radio">
                                <button name="Login" class="btn btn-primary py-4 px-9">Login</button>
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
      <br>
      <br>
      <br>
      <!-- end why section -->
      <?php
include('includes/footer.php')
?>