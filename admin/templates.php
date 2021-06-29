<?php include ("includes/header.php"); ?>
 
<?php include("Class/adminBack.php");
session_start();
$adminID=$_SESSION['id'];
if($adminID==null){
    header('location:index.php');
}


?>

  <body>
  <body>
	  <div class="fixed-button">
		<a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
		</a>
	  </div>
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

      <!-- include navbar  here          -->
           <?php include_once("includes/header-nav.php");?>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    

<!-- include side-navbar  here          -->
 <?php include_once("includes/side-navbar.php");?>

 
 
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                            <div class="row">

                                                <?php
                                                    if($views){
                                                        if($views == "dashboard"){
                                                            include("views/dashboard-view.php");
                                                        }elseif($views == "add-cat"){
                                                            include("views/add-category-view.php");
                                                        }elseif($views == "manage-cat"){
                                                            include("views/manage-category-view.php");
                                                        }elseif($views == "add-product"){
                                                            include("views/add-product-view.php");
                                                        }elseif($views == "manage-product"){
                                                            include("views/manage-product-view.php");
                                                        }elseif($views == "edit-cat"){
                                                            include("views/edit_cat_view.php");
                                                        }elseif($views == "edit-product"){
                                                            include("views/edit_product_view.php");
                                                        }
                                                    }
                                                
                                                ?>

                                            </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->



<?php include "includes/footer.php"  ?>



