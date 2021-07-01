<?php

$obj_adminBack=new adminBack();
$ctg_info=$obj_adminBack->display_category();
if(isset($_POST['pdt_btn'])){
    $return_msg=$obj_adminBack->add_product($_POST);
}
if(isset($_FILES['pdt_image'])){
    echo"<pre>";
    print_r($_FILES);
    echo"</pre>";
}

?>





<div class="card text-left">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">Add Product</h4>
    <p class="card-text"><?php 
    if(isset($return_msg)){
        echo $return_msg;
    }
?></p>
    

    <form class="form" action="" method="POST" enctype="multipart/form-data">
    
        <div class="form-group">
            <label for="pdt_name"><b>Product Name</b></label>
            <input type="text" name="pdt_name" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="">
            
        </div>
        <div class="form-group">
            <label for="pdt_price"><b>Product Price</b></label>
            <input type="number" name="pdt_price" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="">
            
        </div>
        <div class="form-group">
            <label for="pdt_des"><b>Product Description</b></label>
            <input type="textarea" name="pdt_des" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="">
            
        </div>
        <div class="form-group">
            <label for="pdt_cat"><b>Product Category</b></label>
            <select class="form-control" name="pdt_ctg">
                <option disable selected>Select Category</option>
                <?php 
                
                    while($ctg=mysqli_fetch_assoc($ctg_info)){

                    ?>
                
                <option value="<?php echo $ctg['ctg_id'];?>"><?php echo $ctg['ctg_name']?>
               
                <?php }?>
             </select>
            
        </div>
        <div class="form-group">
            <label for="pdt_image"><b>Product Image</b></label>
            <input type="file" name="pdt_image" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="">
            
        </div>
        <div class="form-group">
        <label for="pdt_status"><b>Product Status</b></label>
            <select class="form-control" name="pdt_status">
                <option disable selected>Select Status</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
             </select>
            
        </div>
         <input type="submit" value="Add Product" name="pdt_btn"class="btn btn-primary btn-block ">
    </form>



  </div>
</div>