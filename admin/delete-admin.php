<?php 
    include 'server.php';
     $id = $_GET['id'];

     $sql = "DELETE FROM tbl_admin where id=$id";

     $res = mysqli_query($conn,$sql);

     if($rst==TRUE)
       {
          $_SESSION['delete'] = 'Failled to delete admin';
          header('location:'.SITEURL.'admin/manage-admin.php');
       }
         else{
                 $_SESSION['delete'] = 'admin delete successfully';
                 header('location:'.SITEURL.'admin/manage-admin.php');
             }

?>