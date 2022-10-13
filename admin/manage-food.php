<?php include('partials/menu.php'); 
  include 'server.php';


?>


<div class="main-content">
            <div class="wrapper">
             <h1>Manage Food</h1>
             <br /><br />
             <?php 
                if(isset($_SESSION['add']))
                 {
                     echo $_SESSION['add'];
                     unset($_SESSION['add']);
                 }
                if(isset($_SESSION['delete']))
                 {
                     echo $_SESSION['delete'];
                     unset($_SESSION['delete']);
                 }
             ?>
             <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>
             <br /><br />
             <table class="tbl-full">
                 <tr>
                     <th>S.N</th>
                     <th>Title</th>
                     <th>Price</th>
                     <th>Active</th>
                 </tr>

                 <?php 
                      $sql = "SELECT * FROM tbl_food";
                      $res = mysqli_query($conn,$sql);
                      $count = mysqli_num_rows($res);
                      $sn = 1;

                      if ($count>0) {
                          while($row=mysqli_fetch_assoc($res)){
                            $id = $row['Id'];
                            $title = $row['title'];
                            $price = $row['price'];
                            $active = $row['active'];
                            ?>

                         <tr>
                            <th><?php echo $sn++;?></th>
                            <th><?php echo $title;?></th>
                            <th><?php echo $price;?></th>
                            <th><?php echo $active;?></th>
                            <td>
                                   
                                 <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>" class="btn-delete">Delete Food</a>
                                </td>
                         </tr>

                            <?php

                          }
                      }
                ?>

             </table>
             

            </div>
        </div>