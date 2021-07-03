
<?php include_once('admin/Class//adminBack.php');
$obj=new adminBack();
$ctg=$obj->p_display_category();

?>
<?php include_once('includes/head.php'); ?>

<body class="biolife-body">

    <?php include_once('includes/preloader.php'); ?>
    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-01">
        <?php include_once('includes/header_top.php'); ?>
        <?php include_once('includes/header_middle.php'); ?>
        <?php include_once('includes/header_bottom.php'); ?>




    </header>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!-- Block 01: Main slide block-->
            <div class="main-slide block-slider">
                <ul class="biolife-carousel nav-none-on-mobile" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}'>
                    <li>

                        <?php include_once('includes/slider_main.php'); ?>


                        <!-- Block 02: Grid Banners-->
                        <div class="biolife-gird-banners xs-margin-top-80px sm-margin-top-0">



                        </div>

                        <!-- Block 03: Product Tab-->
                        <div class="product-tab z-index-20 sm-margin-top-49px xs-margin-top-80px">
                            <?php include_once('includes/product_tab3.php'); ?>
                        </div>


                        <!-- Block 04: Banners-->
                        <div class="banner-block md-margin-top-61px sm-margin-bottom-89px xs-margin-top-60px">
                            <?php include_once('includes/banner4.php'); ?>

                        </div>

                        <!-- Block 05: Banner Promotion-->
                        <div class="banner-promotion xs-margin-top-0 sm-margin-top-60px xs-margin-top-100">
                            <?php include_once('includes/banner_promotion.php'); ?>
                        </div>

                        <!-- Block 06: Product Tab-->
                        <div class="product-tab z-index-20 sm-margin-top-71px xs-margin-top-80px">
                            <div class="container">
                                <?php include_once('includes/product_tab6.php'); ?>
                            </div>
                        </div>

                        <!-- Block 07: Blog posts-->
                        <div class="blog-posts sm-margin-top-49px xs-margin-top-60px">
                            <?php include_once('includes/blog_post.php'); ?>
                        </div>

                        <!-- Block 08: Advance Product-->
                        <div class="banner-block">
                            <?php include_once('includes/advance_product.php'); ?>
                        </div>

                        <!-- Block 09: Instagram-->
                        <?php include_once('includes/instagram.php'); ?>
                        <!-- Block 10: Brands-->
                        <?php include_once('includes/brand.php'); ?>

            </div>

        </div>

        <!-- FOOTER -->
        <?php include_once('includes/footer.php'); ?>
        <!-- Scroll Top Button -->
        <?php include_once('includes/scripts.php'); ?>

</body>

</html>