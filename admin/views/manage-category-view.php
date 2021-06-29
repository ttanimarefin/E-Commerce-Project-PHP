<?php
$obj_adminBack=new adminBack();
$ctg_data=$obj_adminBack->display_category();


?>

.<div class="card text-left">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
            <h4 class="card-title">Title</h4>
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
                            <td><?php echo $ctg['ctg_status']?></td>
                            <td>
                                <a class="btn btn-primary " href="">Update</a>||
                                <a class="btn btn-info  " href="">Delete</a>
                            </td>
                        
                        </tr>
                        




           <?php
                }
            
            ?>
                
                
            </tbody>
            </table>

      
  </div>
</div>