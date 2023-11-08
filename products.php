<?php
 include('includes/navbar.php');
 include('includes/config.php');


 ?>
                  <div class="content-offers" style="background:url(images/products.jpg); background-size: cover; margin-top:40px; height: 150px;">
                
                <div class="container">
                    <div class="ct-offers">
                        <div class="ct-offers-title" style="color: white; margin-left: 80px;">Our Products</div>
                     
                    </div>
                </div>
            </div>
              
              <div class="newest" id="newest">
                  <div class="container">
                      <div class="newest-content">
                          <div class="newest-tab">
                              <ul id="myTab" class="nav nav-tabs newest" role="tablist">
                                  <li role="presentation" class="active">
                                      <a href="feature.php" id="cat-1" role="tab" data-toggle="tab" aria-controls="1" aria-expanded="true">Feature</a>
                                  </li>
                                  <li role="presentation">
                                      <a href="jewelery.php" role="tab" id="cat-2" data-toggle="tab" aria-controls="2">Jewelery</a>
                                  </li>
                                  <li role="presentation">
                                      <a href="cosmetics.php" role="tab" id="cat-3" data-toggle="tab" aria-controls="3">Cosmetics</a>
                                  </li>
                              </ul>
                              <form class="d-flex" role="search" style="margin-bottom:30px;padding:20px">
                                <input class="form-control me-2 " id="input"  style="padding:25px" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" id="inputbtn" type="submit">Search</button>
                            </form>
                            
                              
                              
                              <div id="myTabContent" class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                      <div class="row clearfix" id="result">
                                      <?php

                                    $productsfetch = "SELECT * from addproduct";
                                    $runquery = mysqli_query($connection, $productsfetch);
                                    if(mysqli_num_rows($runquery) > 0){
                                        while($row = mysqli_fetch_assoc($runquery)){
                                            
                                    ?>
                                          <div class="col-md-4 col-lg-2 col-sm-12">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image" class="">
                                                            <input type="hidden" id="proid" value="<?php echo $row['pid']?>">
                                                            <input type="hidden" id="userid" value="<?php echo  $userid = $_SESSION['userid']?>">
                                                            <div class="item"><img src="<?php echo 'images/' . $row['pimage'];?>" alt="" class="img-responsive" name="product-image"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href="" style="font-size: 50%; margin-top: -10px;"><i class="fa fa-heart"></i></a>
                                                                    <a href=""style="font-size: 50%;"><i class="fa fa-retweet"></i></a>
                                                                    <a href=""style="font-size: 50%;"><i class="fa fa-search"></i></a>
                                                                </div>
                                                               
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            
                                                            <input type="submit" value="add to cart" class="btn btn-to-cart" id="addtocart" name="add_to_cart" style="font-size: 60%; width: 75%; height: 30%;"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div>
														</div>
													</div>
                                              </div>
                                              
                                              <div class="product-name" name="product-title">
                                                  <a href=""><?php echo $row['ptitle'];?></a>
                                              </div>
                                              <div class="form-group">
                                                <input type="number" class="form-control form-control-user" id="qty"
                                                    placeholder="Quantity" name="quan" required>
                                                </div>
                                              <div class="star-1"></div>
                                              <div class="product-price" name="product-price">
                                                  <span><?php echo $row['pprice'];?></span>
                                              </div>
                                          </div>
                                    <?php
                                                }
                                            }
                                            ?>
                       
                                      </div>
                                  </div>
                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

                                  <script>
                                    $(document).ready(function () {
                                        let input = $('#input');
                                        let result = $('#result');
                                        
                                        input.on('keyup', function (e) {
                                            e.preventDefault(); // Prevent the default form submission
                                            $.ajax({
                                                url: 'search.php',
                                                type: 'POST',
                                                data: {
                                                    input: input.val()
                                                },
                                                success: function (data) {
                                                    console.log(data);
                                                    // Update the result or perform other actions as needed
                                                }
                                            });
                                        });
                                            // add to cart
                                        let addtocart = $('#addtocart') 
                                        let proid = $('#proid').val();
                                        let userid = $('#userid').val();
                                        let title = $('#title').text();
                                        let price = $('#price').text();
                                        let qty = $('#qty');
                                        // let alertdiv = $('#alert');
                                        // let format = $('#format:checked').val();
                                        
                                        addtocart.on('click', function(){
                                        $.ajax({
                                            url: 'addtocart.php',
                                            type: 'POST',
                                            data: {
                                            proid: proid,
                                            userid: userid,
                                            title: title,
                                            price: price,
                                            qty: qty.val(),
                                            },
                                            success: function(data){
                                            document.write(data)
                                            }
                                        });
                                        });  




                                    });
                                    </script>
                                  
                                  
                                  
                                  
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="content-offers" style="background:url(images/slider5.jpg); background-size: cover;">
                
                  <div class="container">
                      <div class="ct-offers">
                          <div class="ct-offers-title" style="color: white; margin-left: 80px;">Stylish Jewelery</div>
                          <p style="color: white;margin-left: 80px;">The generated Lorem Ipsum is therefore always free from repetition, injected humour</p>
                          <a href="" class="btn btn-blue"  style="margin-left: 80px;">Discover more Product</a>
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
