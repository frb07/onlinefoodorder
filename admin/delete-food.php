<?php 
    include 'server.php';
     $id = $_GET['id'];

     $sql = "DELETE FROM tbl_food where id=$id";

     $res = mysqli_query($conn,$sql);

     if($rst==TRUE)
       {
          $_SESSION['delete'] = 'Failled to delete Food';
          header('location:'.SITEURL.'admin/manage-food.php');
       }
         else{
                 $_SESSION['delete'] = 'Food delete successfully';
                 header('location:'.SITEURL.'admin/manage-food.php');
             }

?>