<?php

include('includes/navbar.php');
?>
<html>
    <style>
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

    <!-- END nav -->

    <div id="main-slider" class="slid1"> <!-- Slider -->
              <div id="home-slider" class="owl-carousel owl-theme">
                  <div class="item" id="zoom1"style="height:600px">
                      <img src="images/about5.jpg" alt="slide-1" class="img-responsive" style="width:2000px">
                      <div class="slider-desc">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="slide-offers-left">
                                                        
                                    <h1 class="mb-3 mt-5 bread"style= "margin-top: 200px;"><b> Checkout</b></h1>
                                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php"style= "color: black;">Home</a></span><span style= "color: black;">/Checkout</span></p>
        
                                      </div>
                                  </div>
                              
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                  </div>

    <section class="ftco-section" style="background:black; color: white;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <br>
            <br>
            <br>
						<form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
                    <br>
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">First Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>

	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <br>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State / Country</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
                          <option value="">Pakistan</option>
		                  	<option value="">France</option>
		                    <option value="">Italy</option>
		                    <option value="">Philippines</option>
		                    <option value="">South Korea</option>
		                    <option value="">Hongkong</option>
		                    <option value="">Japan</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
                    <br>
                    <br>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
                    
		            <div class="col-md-12">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
                    <br>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
                    <br>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
                  <br>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <br>
                <br>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
						<div class="radio">
                      <p><a href="#"class="btn btn-primary py-3 px-4">Place an order</a></p>

					<br>
                    <br>
                    <br>				
                    </div>
									</div>
                </div>
	            </div>
	          </form><!-- END -->
</div>
</div>
</div>
</section>
    
  

  

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>

<?php

include('includes/footer.php');
?>