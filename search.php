<?php

include('includes/config.php');
print_r($_POST);

if(isset($_POST['input'])){
    $userinput = $_POST['input'];
    $result = mysqli_query($connection, "SELECT * from addproduct where `ptitle` LIKE '%$userinput%'");
    if($result){
        $fetch = "SELECT * from `addproduct`";
        $runquery = mysqli_query($connection, $fetch);
        if(mysqli_num_rows($runquery) > 0){
            while($row = mysqli_fetch_assoc($runquery)){
        echo ' <div class="col-md-4 col-lg-2 col-sm-12">
        <div class="product-fade">
              <div class="product-fade-wrap">
                  <div id="product-image" class="">
                      <div class="item"><img src="'.'images/' . $row['pimage'].'" alt="" class="img-responsive"></div>
                  </div>
                  <div class="product-fade-ct">
                      <div class="product-fade-control">
                          <div class="to-left">
                              <a href="" style="font-size: 50%; margin-top: -10px;"><i class="fa fa-heart"></i></a>
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
            <a href="">'.$row['ptitle'].'</a>
        </div>
        <div class="star-1"></div>
        <div class="product-price">
            <span>'.$row['pprice'].'</span>
        </div>
    </div>';
}
}
    }
}


?>