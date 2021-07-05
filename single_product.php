<?php
include('admin/Class/adminBack.php');
$obj = new adminBack();
$ctg = $obj->p_display_category();
$ctgDatas = array();
while ($data = mysqli_fetch_assoc($ctg)) {
    $ctgDatas[] = $data;
}
if(isset($_GET['status'])){
    $catID = $_GET['id'];
    if($_GET['status']=='catView'){
        $prodata = $obj->product_by_ctg($catID);
        $pros = array();
        while($prodatas = mysqli_fetch_assoc($prodata)){
            $pros[]= $prodatas;
        }
    }
}
if(isset($_GET['status'])){
    $catID = $_GET['id'];
    if($_GET['status']=='catView'){
        $category_name = $obj->ctg_by_id($catID);
    }
}
?>

<?php include_once('includes/head.php'); ?>

<body class="biolife-body">
    <?php include_once('includes/preloader.php'); ?>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">
        <?php include_once('includes/header_top.php'); ?>
        <?php include_once('includes/header_middle.php'); ?>
        <?php include_once('includes/header_bottom.php'); ?>
    </header>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!--Hero Section-->
            <div class="hero-section hero-background">
                <h1 class="page-title">
                    <?php foreach($pros as $pro){
                        echo $pro['ctg_name'];
                    }
                    
                    
                    ?>
                </h1>
            </div>

            <!--Navigation section-->
            <div class="container">
                <nav class="biolife-nav">
                    <ul>
                        <li class="nav-item"><a href="index.php" class="permal-link">Home</a></li>
                        <li class="nav-item"><span class="current-page">
                        <?php foreach($pros as $pro){
                        echo $pro['ctg_name'];
                    }
                    
                    
                    ?>     
                        </span></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include_once('includes/footer.php'); ?>

    <!--Footer For Mobile-->
    <?php include_once('includes/mobile_footer.php'); ?>

    <?php include_once('includes/mobile_global_block.php'); ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>
    <?php include_once('includes/scripts.php'); ?>

</body>

</html>