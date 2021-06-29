<?php 
   $obj_adminBack=new adminBack();
   $newmsg='';
   if(isset($_POST['ctg_btn'])){
       $return_msg=$obj_adminBack->add_category($_POST);
   }



   if(isset( $return_msg)){
       
       $newmsg= $return_msg;
   }
?>

<div class="card text-left">
  
  <div class="card-body">
    <h1 class="card-title text-center">Add Category</h1><br>
    <br><p class="card-text text-danger"><?php echo $newmsg?></p>


<form action="" method="POST">

        <div class="form-group">
            <label for="ctg_name"><b>Category Name</b></label>
            <input type="text" name="ctg_name" id="" class="form-control" placeholder="Name" aria-describedby="helpId">
            
        </div>
        <div class="form-group">
            <label for="ctg_des"><b>Category Description</b></label>
            <input type="text" name="ctg_des" id="" class="form-control" placeholder="Description" aria-describedby="helpId">
            
        </div>
        <div class="form-group">
            <label for="exampleInputCtg_status"><b>Category Status</b></label>
            <select class="form-control" name="ctg_status">
                <option disable selected>Select Status</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
             </select>
        <input type="submit" value="Add Category" name="ctg_btn" class="btn btn-primary  mt-2" >
        </div>
</form>

</div>
</div>