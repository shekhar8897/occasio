<?php
include('config/dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        *{
            color:black;
        }
    </style>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Electrics</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <!--<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
         $(document).ready(function(){        
   $('#exampleModal').modal('show');
    }); 
    </script>
</head>

<body class="index-page sidebar-collapse">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

                <input type=hidden name="oid" value="00D0o000001R7Zw">
                <input type=hidden name="retURL" value="https://spacex8.herokuapp.com">

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="first_name" maxlength="40" name="first_name" size="20" style="border-color:black; " >
                        <label class="mdl-textfield__label" for="first_name">First Name</label>
                  </div>
<br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="last_name" maxlength="40" name="last_name" size="20" style="border-color:black;" >
                        <label class="mdl-textfield__label" for="last_name">Last Name</label>
                  </div >
<br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email" id="email" maxlength="40" name="email" size="20" style="border-color:black;" >
                        <label class="mdl-textfield__label" for="email">Email</label>
                  </div>
<br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" id="mobile" maxlength="40" name="mobile" size="20" type="number" style="border-color:black;">    
                    <label class="mdl-textfield__label" for="mobile">Mobile</label>
                </div>
<br>
<br>
<br>    <center>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" >
                 SUBMIT
                </button></center>
<br>

            </form>
      </div>
      <
    </div>
  </div>
</div>
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a href="../Electricks-shop/index.php" class="navbar-brand" rel="tooltip" title="Designed and Coded by Serve(8) Web Solutions, Inc." data-placement="bottom" target="">
                     <img src="./assets/img/ocasio.png" alt="Circle Image" class="img-responsive rounded-circle" style="width:10%;float:left;">
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    <span class="navbar-toggler-bar bar4"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="pages/user_login_page.php" class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Login</p>
                        </a>
        
                    </li>
                    <li class="nav-item">
                        <a href="pages/user_signup.php" class="nav-link" onclick="scrollToDownload()">
                            <i class="now-ui-icons education_paper"></i>
                            <p>Sign up</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="pages/products.php">
                            <i class="now-ui-icons files_paper"></i>
                            <p> Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>Shopping Cart</p>
                        </a>
                    </li>
                 
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" >
            <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/slide.jpg');">
            
                <div class="container">
                    <div class="content-center brand">
                        <br><br>
                        <h3>Raspberry Pi, Arduino, Sensors, Modules, and Electronic components.</h3>
                    </div>

                </div>

            </div>

        </div>
        <br>
        <!-- Trigger the modal with a button -->
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                    <br>
                    <div class="col-md-12">
                        <h2 class="title">Products</h2>
                        <div class="typography-line">
                            <p>
                            “The reason it seems that price is all your customers care about is that you haven’t given them anything else to care about.”-Seth Godin, American author, entrepreneur, marketer, and public speaker.
                            </p>
                        </div>
                        <br>

                        
                        <center>
                        <label><b>Search Product: &nbsp</b></label>       
                                <form method="POST" action="index_search.php" >
                                    <input type="image" title="Search" src="assets/img/search.png" alt="Search" />
                                    <input type="text" name="search" class="search-query" placeholder="Enter product name">
                                </form>
                        </center>
                    </div>
                    <br><hr color="orange">

  <div class="tab-pane  active" id="">
    <ul class="thumbnails">
    <?php
    $query = "SELECT * FROM products ORDER BY prod_name ASC";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
        $prod_id=$res['prod_id'];
    
?>   
    <div class="row-sm-3">
        <div class="thumbnail">
            <?php if($res['prod_pic1'] != ""): ?>
            <img src="uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="200px">
            <?php else: ?>
            <img src="uploads/default.png" width="300px" height="200px">
            <?php endif; ?>
        <div class="caption">
          <h5><b><?php echo $res['prod_name'];?></b></h5>
          <h6><a class="btn btn-success btn-round" title="Click for more details!" href="pages/product_details.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a><medium class="pull-right">Php<?php echo $res['prod_price']; ?></medium></h6>
        </div>

        </div>
      <hr color="orange">
      </div>
             
<?php }?> 

      </ul>
  </div>
        


    </div>     
</div>
        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="" target="_blank">
                              Ocassio
                            </a>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </div>
            </div>
        </footer>
    </div>

<!--   Core JS Files   -->
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>
    <script src="./assets/js/bootstrap-tooltip.js"></script> 
    <script src="./assets/js/bootstrap-modal.js"></script>
</body>
</html>