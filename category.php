
<?php 
include('admin/Class/adminBack.php');
$obj=new adminBack();
$ctg=$obj->p_display_category();
$ctgDatas=array();
while($data=mysqli_fetch_assoc($ctg)){
     $ctgDatas[]=$data;
}


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

            
            </div>

        </div>

        <!-- FOOTER -->
        <?php include_once('includes/footer.php'); ?>
        <!-- Scroll Top Button -->
        <?php include_once('includes/scripts.php'); ?>

</body>

</html>

