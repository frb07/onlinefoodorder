<?php 
    include('partials/menu.php');
    include 'server.php';
?>

<div class="main-content">
        <div class="wrapper">
             <h1>Add Food</h1>
             <br><br>



             <form action="" method="POST" enctype="multipart/form-data">
                 <br />
                 <table class="tbl-30">
                     <tr>
                         <td>Title</td>
                         <td><input type="text" name="title" placeholder="Title Of The Food"></td>
                     </tr>
                     <tr>
                         <td>Description: </td>
                         <td><textarea name="description" cols="30" rows="5" placeholder="Description of the food"></textarea></td>
                     </tr>
                     <tr>
                         <td>Price</td>
                         <td><input type="number" name="price" ></td>
                     </tr>

                     <tr>
                         <td>Active</td>
                         <td><input type="radio" name="active" value="Yes" >Yes</td>
                         <td><input type="radio" name="active" value="No" >No</td>
                     </tr>
                     
                     <tr>
                         <td colspan="2">
                             <input type="submit" name="submit" value="Add Food" class="btn-secondary">
                         </td>
                     </tr>
                 </table>

             </form>
             <?php 
                if(isset($_POST['submit'])){

                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $active = $_POST['active'];
                    
                    if(isset($_POST['active'])){

                        $active = $_POST['active'];
                    }
                    else {
                        $active = 'No';
                    }

                    $sql = "INSERT INTO tbl_food SET 
                           title = '$title',
                           description = '$description',
                           price = '$price',
                           active = '$active'
                           ";
                    $res = mysqli_query($conn,$sql);

                    if($res == TRUE){
                        $_SESSION['add']="Food Added successfully";
                        header('location:'.SITEURL.'admin/manage-food.php');
                    }
                    else{
                        $_SESSION['add']="Failed to added food";
                        header('location:'.SITEURL.'admin/manage-food.php');
                    }
                  


                }
             ?>
        </div>
</div>