<?php  
$obj_adminBack=new adminBack();
$product_info=$obj_adminBack->display_product();

if(isset($_GET['prostatus'])){
    $proid=$_GET['id'];
    if($_GET['prostatus']=='delete'){
        $msg=$obj_adminBack->delete_product($proid);
    }
}

?>



<div class="card text-left">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title text-center">Manage Product</h4>
    <p class="card-text"><?php
    if(isset($msg)){
        echo $msg;
    }
    
    ?></p>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
    <?php
        while($product=mysqli_fetch_assoc($product_info)){

                                
                        
    ?>
                            <tr>
                                <td scope="row"><?php echo $product['pdt_id'];?></td>
                                <td><?php echo $product['pdt_name'];?></td>
                                <td><?php echo $product['pdt_price'];?></td>
                                <td><?php echo $product['pdt_des'];?></td>
                                <td><img style="height:40px;" src="upload/<?php echo $product['pdt_img'];?>"></td>
                                <td><?php 
                                    if($product['pdt_status']==1){
                                        echo "Published";
                                    }else{
                                        echo "Unpublished";
                                    }
                                
                                
                                ?></td>
                                <td><?php echo $product['ctg_name'];?></td>
                                <td><?php echo $product['pdt_id'];?></td>
                                <td>
                                         <a class="btn btn-primary btn btn-sm" href="edit-product.php?aprostatus=edit&&id=<?php echo $product['pdt_id'];?>">Edit</a> ||
                                        <a onclick="return confirm('Are You Sure?')" class="btn btn-info btn btn-sm " href="?prostatus=delete&&id=<?php echo $product['pdt_id'];?>">Delete</a>
                                </td>
                            </tr>
<?php } ?>
                        </tbody>
                </table>
       
  </div>
</div>