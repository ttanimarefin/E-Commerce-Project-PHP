<?php
$obj_adminBack=new adminBack();
$ctg_data=$obj_adminBack->display_category();
?>
<?php
if(isset($_GET['status'])){
    $get_id=$_GET['id'];
    if($_GET['status']=='publish'){
          $obj_adminBack->publish_category($get_id); 
    }elseif($_GET['status']=='unpublish'){
        $obj_adminBack->unpublish_category($get_id);
     }elseif($_GET['action']=='delete'){
        $obj_adminBack->unpublish_category($get_id);
     }
     
    }else{
        echo"Not find data";
    }   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div class="card">
  
        <div class="card-body">
            <h4 class="card-title text-center ">Manage Category</h4>
            <p class="card-text">Body</p>  
                    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Ctg Id</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                while($ctg=mysqli_fetch_assoc($ctg_data)){
                            ?>
                                        <tr>
                                            <th scope="row"><?php echo $ctg['ctg_id']?></th>
                                            <td><?php echo $ctg['ctg_name']?></td>
                                            <td><?php echo $ctg['ctg_des']?></td>
                                            <td>
                                            <?php 
                                                if($ctg['ctg_status']==0){
                                                    echo "Unpublished";
                                                    ?>
                                                            <a class="btn btn-sm btn-danger" href="?status=publish&&id=<?php echo $ctg['ctg_id']?>">Make Published</a>         


                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo "Published";
                                                    ?>
                                                            <a class="btn btn-sm btn-danger" href="?status=unpublish&&id=<?php echo $ctg['ctg_id']?>">Make Unpublished</a>         


                                                    <?php
                                                }
                                            
                                            
                                            ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn btn-sm" href="edit-cat.php?action=edit&&id=<?php echo $ctg['ctg_id']?>">Edit</a>||
                                                <a onclick="return confirm('Are You Sure?')" class="btn btn-info btn btn-sm " href="?action=delete&&id=<?php echo $ctg['ctg_id']?>">Delete</a>
                                            </td>
                                        
                                        </tr>
                                        




                        <?php
                                }
                            
                        ?>
                                
                                
                        </tbody>
                    </table>

       
        </div>
    </div>
 </body>

 </html> 
