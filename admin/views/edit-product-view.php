<?php
$obj_adminBack=new adminBack();
$ctg_info=$obj_adminBack->display_category();
if(isset($_GET['prostatus'])){
    $id=$_GET['id'];
    if($_GET['prostatus']=='edit'){
        $pdt_info=$obj_adminBack->editupdate_product($id);
    }
}

if(isset($_POST['u_pdt_btn'])){
    $update_msg=$obj_adminBack->update_product($_POST);
}


?>
<div class="card text-left">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title text-center">Edit Product</h4>
    <p class="card-text"><?php 
    if(isset($update_msg)){
        echo $update_msg;
    }
?></p>
    

    <form class="form" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            
            <input type="hidden" name="u_pdt_id" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="<?php echo $pdt_info['pdt_id']?>">
            
        </div>
    
        <div class="form-group">
            <label for="u_pdt_name"><b>Product Name</b></label>
            <input type="text" name="u_pdt_name" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="<?php echo $pdt_info['pdt_name'];?>">
            
        </div>
        <div class="form-group">
            <label for="u_pdt_price"><b>Product Price</b></label>
            <input type="number" name="u_pdt_price" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="<?php echo $pdt_info['pdt_price'];?>">
            
        </div>
        <div class="form-group">
            <label for="u_pdt_des"><b>Product Description</b></label>
            <input type="textarea" name="u_pdt_des" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="<?php echo $pdt_info['pdt_des'];?>">
            
        </div>
        <div class="form-group">
            <label for="u_pdt_cat"><b>Product Category</b></label>
            <select class="form-control" name="u_pdt_ctg">
                <option disable selected>Select Category</option>
                <?php 
                
                    while($ctg=mysqli_fetch_assoc($ctg_info)){

                    ?>
                
                <option value="<?php echo $ctg['ctg_id'];?>"><?php echo $ctg['ctg_name']?>
               
                <?php }?>
             </select>
            
        </div>
        <div class="form-group">
            <label for="u_pdt_image"><b>Product Image</b></label>
            <input type="file" name="u_pdt_image" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="">
            
        </div>
        <div class="form-group">
        <label for="u_pdt_status"><b>Product Status</b></label>
            <select class="form-control" name="u_pdt_status">
                <option disable selected>Select Status</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
             </select>
            
        </div>
         <input type="submit" value="Update Product" name="u_pdt_btn"class="btn btn-primary btn-block ">
    </form>



  </div>
</div>