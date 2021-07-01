<?php
$obj_adminBack=new adminBack();
if(isset($_GET['action'])){
    $get_id=$_GET['id'];
    if($_GET['action']=='edit'){
        $return_data= $obj_adminBack->category_toshow($get_id);
    }
}

if(isset($_POST['update_ctg_btn'])){
    
    $return_msg=$obj_adminBack->category_toupdate($_POST);

    
}


?>
<div class="card text-left">
  
  <div class="card-body">
    <h1 class="card-title text-center">Edit Category</h1><br>
    <br><p class="card-text text-danger"><?php 
    if(isset($return_msg)){
        
    echo $return_msg;
    
}
?></p>

<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <div class="form-group">
            
            <input type="hidden" name="update_ctg_id" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="<?php echo $return_data['ctg_id']?>">
            
        </div>
        <div class="form-group">
            <label for="ctg_name"><b>Category Name</b></label>
            <input type="text" name="update_ctg_name" id="" class="form-control" placeholder="Name" aria-describedby="helpId" value="<?php echo $return_data['ctg_name']?>">
            
        </div>
        <div class="form-group">
            <label for="ctg_des"><b>Category Description</b></label>
            <input type="text" name="update_ctg_des" id="" class="form-control" placeholder="Description" aria-describedby="helpId" value="<?php echo $return_data['ctg_des']?>">
            
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputCtg_status"><b>Category Status</b></label>
            <select class="form-control" name="ctg_status">
                <option disable selected>Select Status</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
             </select> -->
        <input type="submit" value="Update Category" name="update_ctg_btn" class="btn btn-primary  mt-2" >
        
</form>

</div>
</div>