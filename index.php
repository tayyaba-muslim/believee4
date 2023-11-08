 <?php
 include('includes/navbar.php');
 include('includes/config.php');


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

#container1 img{

 border: 5px solid white;
 
 transition: all 0.2s ease-in;
}
#container1 img:hover{
    transform: scale(1.5) rotate(5deg);
    box-shadow: 0px 0px 20px black;
}

</style>

 </html>
          <div id="main-slider" class="slid1"  style= "background-color:black; color:white;"> <!-- Slider -->
              <div id="home-slider" class="owl-carousel owl-theme">
                  <div class="item" id="zoom1">
                      <img src="images/beauty2.jpg" alt="slide-1" class="img-responsive">
                      <div class="slider-desc">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="slide-offers-left">
                                          <div class="slide-offers-title"><span>SALE</span><br/>50% OFF</div>
                                          <p>New & Fvhresh collection<br/>arraival in jenny's store</p>
                                          <a href="" class="btn btn-blue">Shop now</a>
                                      </div>
                                  </div>
                              
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/beauty2.jpg"alt="slide-2" class="img-responsive">
                      <div class="slider-desc">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="slide-offers-left">
                                          <div class="slide-offers-title"><span>50% Price cut</span><br/>for online order</div>
                                          <p>New & Fvhresh collection<br/>arraival in jenny's store</p>
                                          <a href="" class="btn btn-blue">Shop now</a>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                       
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> <!-- Slider -->
          
          <div id="content"style= "background-color:black; color:white;"> <!-- Content -->
              <div class="container" id="container1">
                  <div class="home-content">
                      <div class="cat-offers">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="cat-sec-1">
                                      <img src="images/card7.jpg" class="img-responsive" alt="">
                                      <div class="cat-desc">
                                          <div class="cat-inner">
                                              <div class="cat-title"><span style="color: white;">Bangles</span></div>
                                              <a href="" class="btn btn-border"style="color: white;">Buy Now</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="cat-sec-2">
                                      <img src="images/card5.jpg" class="img-responsive" alt="">
                                       <div class="cat-desc">
                                           <div class="cat-inner">
                                              <div class="cat-title"style="color: white; margin-top: -40px;">Makeup<span style="color: white;">Kit</span></div>
                                              <a href="" class="btn btn-border"style="color: white;">Buy Now</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="cat-sec-3">
                                      <img src="images/card6.jpg" class="img-responsive" alt="" >
                                       <div class="cat-desc">
                                           <div class="cat-inner">
                                              <div class="cat-title"style="color: white;">Neckless</div>
                                              <a href="" class="btn btn-border" style="color: white;">shop Now</a>
                                           </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
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
                              
                              
                              <div id="myTabContent" class="tab-content">
                              
                                  <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                      <div class="row clearfix" id="result">
                              
                                      
                                    
                       
                                      </div>
                                  </div>
                                  
                                  
                                  
                                  
                              </div>
                              <br>
                              <br>
                    
                          </div>
                      </div>
                    
                  </div>
                 
              </div>
              
             
              <div class="content-offers" style="background:url(images/slider7.jpg); background-size: cover;">
                
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
              
              
              <div class="rec-blog">
                  <div class="container" id="container1">
                      <div class="rec-blog-inner">
                          <div class="blog-title">
                              <span>The Blog</span>
                          </div>
                          <div class="row">
                              <div class="col-md-4 blog-ct">
                                  <a href=""><img src="images/card1.jpg" alt="" class="img-responsive"></a>
                                  <div class="blog-ct-title">
                                      <a href=""style= "background-color:black; color:white;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque !</a>
                                      <span>May 11,2014</span>
                                  </div>
                              </div>
                              <div class="col-md-4 blog-ct">
                                  <a href=""><img src="images/card4.webp" alt="" class="img-responsive"></a>
                                  <div class="blog-ct-title">
                                      <a href=""style= "background-color:black; color:white;">Voluptatem accusantium doloremque</a>
                                      <span>May 11,2014</span>
                                  </div>
                              </div>
                              <div class="col-md-4 blog-ct">
                                  <a href=""><img src="images/card2.webp" alt="" class="img-responsive"></a>
                                  <div class="blog-ct-title">
                                      <a href=""style= "background-color:black; color:white;">Voluptatem accusantium doloremque</a>
                                      <span>May 11,2014</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div> <!-- Content -->
<?php
include('includes/footer.php')
?>





</script>
