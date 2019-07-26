<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ocassio</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
     <link rel="icon" type="image/png" href="./assets/img/ocasio.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="https://track.gaconnector.com/gaconnector.js" type="text/javascript"></script>
<script type="text/javascript">gaconnector2.track("772a039da1c927afbd481859b74598d3");</script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <style type="text/css">
        .marginbrandfocus{
            margin-bottom: 5% !important;
        }
        .footer p{
            font-size: .8rem;
            }
    </style>

    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!--<a class="navbar-brand" href="#">Ocassio</a>-->
  <a class="navbar-brand" href="#"><img src="../assets/img/ocasio.png" class="img-fluid" alt="Responsive image" style="height: 50px;width:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MEN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
         
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          WOMEN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
          
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          KIDS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          HOME & LIVING
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
         
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ELECTRONICS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
         
        </div>
      </li>
  </ul>
      <span class="navbar-text">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="user_products.php">
                    <i class="now-ui-icons files_paper"></i>
                    <p> Products</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user_cart.php" onclick="scrollToDownload()">
                    <i class="now-ui-icons shopping_cart-simple"></i>
                    <p>Shopping Cart</p>
                </a>
            </li>
            <!-- <li class="nav-item ">
               <a class="nav-link " href="pages/user_login_page.php" >
                 LOGOUT
              </a>
              </li>
        -->
        <li class="nav-item">
                        <a href="logout.php" class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                            <p>Logout</p>
                        </a>
                    </li>
            <li class="nav-item">
                        <a class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>
                                <?php
                                 include('../config/dbconn.php');
                                 $query=mysqli_query($dbconn,"SELECT * FROM `users` WHERE user_id='".$_SESSION['id']."'");
                                 $row=mysqli_fetch_array($query);
                                 echo ''.$row['firstname'].'';
                                ?>
                            </p>
                        </a>
                    </li>        
     </ul>
    </span>
  </div>
</nav>
<br>
<div class="container-fluid">
    <div class="timer">
        <center><h3 class="mytimer" id="mytimer"></h3></center>
    </div>

</div>
<br>
<section class="main">
    <div class="container-fluid" >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     
      <div class="carousel-inner card">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../corousel1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../corousel2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../corousel3.jpg" alt="Third slide">
        </div>
         <div class="carousel-item">
          <img class="d-block w-100" src="../corousel4.jpg" alt="fourth slide">
        </div>
         <div class="carousel-item">
          <img class="d-block w-100" src="../corousel5.jpg" alt="fifth slide">
        </div>
       
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="#">
                 <img class="d-block w-100 card" src="../row1.jpg" >
                </a>
            </div>
            <div class="col-md-3">
                <img class="d-block w-100 card" src="../row2.jpg" >
            </div>
            <div class="col-md-3">
                <img class="d-block w-100 card" src="../row3.jpg" >
            </div>
            <div class="col-md-3">
                <img class="d-block w-100 card" src="../row4.jpg">
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <span class="text">
            <h4 class="font-weight-bold" style="color:orangered">BRANDS IN FOCUS</h4>
            <h6 class="font-weight-light" style="color:grey"> Show some brand love</h6>
        </span>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3 marginbrandfocus">
                 <img class="d-block w-100 card" src="../brandfocus1.jpg" >
            </div>
            <div class="col-md-3 marginbrandfocus">
                <img class="d-block w-100 card" src="../brandfocus2.jpg" >
            </div>
            <div class="col-md-3 marginbrandfocus">
                <img class="d-block w-100 card" src="../brandfocus3.jpg" >
            </div>
            <div class="col-md-3 marginbrandfocus">
                <img class="d-block w-100 card" src="../brandfocus4.jpg" >
            </div>
            <div class="col-md-3 marginbrandfocus">
                 <img class="d-block w-100 card" src="../brandfocus5.jpg" >
            </div>
            <div class="col-md-3 marginbrandfocus">
                 <img class="d-block w-100 card" src="../brandfocus6.jpg" >
            </div>
            <div class="col-md-3 marginbrandfocus">
                 <img class="d-block w-100 card" src="../brandfocus7.jpg" >
            </div>
            <div class="col-md-3 marginbrandfocus">
                 <img class="d-block w-100 card" src="../brandfocus8.jpg" >
            </div>
        </div>
    </div>
    
                <div class="container-fluid" id="">
                    <span class="text">
                        <h4 class="font-weight-bold" style="color:orangered">ELECTRONIC ITEMS</h4>
                        <h6 class="font-weight-light" style="color:grey"> </h6>
                    </span>
        <br>
        <br>
                        <div class="row">
                        <?php
                        $query = "SELECT * FROM products ORDER BY prod_name ASC";
                        $result = mysqli_query($dbconn,$query);
                        while($res = mysqli_fetch_array($result)) {  
                            $prod_id=$res['prod_id'];
                        
                      ?>   
                      <div class="col-md-3 col-lg-3 marginbrandfocus">
                            <div class="card">
                                <?php if($res['prod_pic1'] != ""): ?>
                                
                                <img class="d-block w-100 " src="../uploads/<?php echo $res['prod_pic2']; ?>" width="100px" height="200px" >
                                
                                <?php else: ?>
                                <img class="d-block w-100 " src="../uploads/default.png"  height="200px">
                                <?php endif; ?>
                                    
                                    <br><br>
                                    <span class="col-md-12">
                                        <h6 class="font-weight-light ">
                                            <center><?php echo $res['prod_name'];?></center>
                                        </h6>
                                        
                                    </span>
                                    
                                    <span class="col-md-12">
                                    <hr>
                                        <span class="col-md-6">
                                        
                                        <a class="btn btn-info" title="Click for more details!" href="user_product_details.php?prod_id=<?php echo $res['prod_id'];?>">
                                        <i class="now-ui-icons gestures_tap-01"></i>View</a>
                                        </span>
                                        <span class="col-md-6">
                                        <medium style="padding-left:15%;">₹<?php echo $res['prod_price']; ?></medium>
                                        </span>
                                        
                                    </span>
                                    <br>
        
                            </div>
                          
                       </div>
                                 
                    <?php }?> 

                          </ul>
                      </div>
            </div>
                      
                      
    <div class="container-fluid footer" style="background-color:#DCDCDC;">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span>
                        <p><b>ONLINE SHOPPING</b></p>
                    </span>
                    <span>
                        <p>MEN</p>
                        <p>WOMEN</p>
                        <p>KIDS</p>
                        <p>OTHERS</p>
                    </span>
                </div>
                <div class="col-md-4">
                    <span>
                        <p><b>USEFUL LINKS</b></p>

                    </span>
                    <span>
                        <p>CONTACT US</p>
                        <p> ABOUT US</p>
                        <p> FAQ</p>
                        <p>T&C</p>
                        <p>BLOG</p>
                    </span>
                 </div>
                <div class="col-md-4">
                    <span>
                        <p><b>EXTRA</b></p>
                    </span>
                    <p>COMING SOON!</p>
                </div>
            </div>
        </div>
    </div>
    
</section>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<!-- javascript timer deadline -->

<script> 
var deadline = new Date("May 5, 2019 15:37:25").getTime(); 
var x = setInterval(function() { 
var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("mytimer").innerHTML = "Sales ends in "+ days + "d "  
+ hours + "h " + minutes + "m " + seconds + "s "; 
    if (t < 0) { 
        clearInterval(x); 
        document.getElementById("mytimer").innerHTML = "EXPIRED"; 
    } 
}, 1000); 
</script> 

</body>
</html>
