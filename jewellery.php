<?php
 include('includes/navbar.php');
 include('includes/config.php');
 ?>


<div class="content-offers" style="background:url(images/jewelery.jpg); background-size: cover; margin-top:40px; height: 150px;">
                
                <div class="container">
                    <div class="ct-offers">
                        <!-- <div class="ct-offers-title" style="color: white; margin-left: 80px;">Cosmetics Collection</div> -->
                     
                    </div>
                </div>
            </div>
   
              
              <div class="newest" id="newest">
                  <div class="container">
                      <div class="newest-content">
                          <div class="newest-tab">
                              <!-- <ul id="myTab" class="nav nav-tabs newest" role="tablist">
                                  <li role="presentation" class="active">
                                      <a href="feature.php" id="cat-1" role="tab" data-toggle="tab" aria-controls="1" aria-expanded="true">Feature</a>
                                  </li>
                                  <li role="presentation">
                                      <a href="jewelery.php" role="tab" id="cat-2" data-toggle="tab" aria-controls="2">Jewelery</a>
                                  </li>
                                  <li role="presentation">
                                      <a href="cosmetics.php" role="tab" id="cat-3" data-toggle="tab" aria-controls="3">Cosmetics</a>
                                  </li>
                              </ul> -->
                              
                              <div id="myTabContent" class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                      <div class="row clearfix">
                                      <?php
                 



					$cosmeticsfetch = "SELECT * from `addproduct` where pcategory = '2'";
					$runquery = mysqli_query($connection, $cosmeticsfetch);
					if(mysqli_num_rows($runquery) > 0){
						while($row = mysqli_fetch_assoc($runquery)){
							
					?>
                                        
                                        <div class="col-md-4 col-lg-2 col-sm-12">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image" class="">
                                                            <div class="item"><img src="<?php echo 'images/' . $row['pimage'];?>" alt="" class="img-responsive"></div>

                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""style="font-size: 50%; margin-top: -10px;"><i class="fa fa-heart"></i></a>
                                                                    <a href=""style="font-size: 50%;"><i class="fa fa-retweet"></i></a>
                                                                    <a href=""style="font-size: 50%;"><i class="fa fa-search"></i></a>
                                                                </div>
                                                     
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"style="font-size: 60%; width: 75%; height: 30%;"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                          
														</div>
													</div>
                                              </div>
                                             
                                              <div class="product-name">
                                                  <a href=""><?php echo $row['ptitle'];?></a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span><?php echo $row['pprice'];?></span>
                                                  
                                              </div>
                                          </div>
                                          <?php
                        }
                    }
                    ?> 
                                                   
                                      </div>
                                  </div>

                                  


                                  <div role="tabpanel" class="tab-pane fade" id="2" aria-labelledby="cat-2">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <p>....</p>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div role="tabpanel" class="tab-pane fade" id="3" aria-labelledby="cat-3">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <p>....</p>
                                          </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="content-offers" style="background:url(images/slider5.jpg); background-size: cover;">
                
                  <div class="container">
                      <div class="ct-offers">
                          <div class="ct-offers-title" style="color: white; margin-left: 80px;">Stylish Jewelery</div>
                          <p style="color: white;margin-left: 80px;"></p>
                          
                      </div>
                  </div>
              </div>
              
              <div class="brands">
                  <div class="container">
                      <div class="brands-inner">
                          <div class="brand-title">
                              <span>Brands</span>
                          </div>
                          
                          <div id="slider-home"> <!-- Slider -->
                              <div id="brand-carousel" class="owl-carousel owl-theme">
                                  <div class="item">
                                      <img src="images/brand-2.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-3.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-4.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-1.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-5.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-2.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-3.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-4.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-1.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-5.png" alt="slide-1" class="img-responsive">
                                  </div>
                              </div>
                          </div> <!-- Slider -->
                          
                      </div>
                  </div>
              </div>
              
                 </div> <!-- Content -->

                
<?php
include('includes/footer.php')
?>