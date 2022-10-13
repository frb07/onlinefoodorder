<?php 
  include('partials/menu.php');
  include 'server.php';
    
           if(isset($_POST['submit'])){
               $full_name = $_POST['full_name'];
               $username = $_POST['username'];
               $password = $_POST['password'];

               $sql = "INSERT INTO tbl_admin SET 
               full_name = '$full_name',
               username = '$username',
               password = '$password'
               ";
               
               
               $rst = mysqli_query($conn, $sql);
               if($rst==TRUE)
               {
                   $_SESSION['add'] = 'admin added successfully';
                   header('location:'.SITEURL.'admin/manage-admin.php');
               }
               else{
                 $_SESSION['add'] = 'Failled to add admin';
                 header('location:'.SITEURL.'admin/manage-admin.php');
               }
           }         
?>

        <div class="wrapper">
             <h1>Add Admin</h1>
             <form action="" method="POST">
                 <br />
                 <table class="tbl-add-admin">
                     <tr>
                         <td>Full Name</td>
                         <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                     </tr>
                     <tr>
                         <td>User name</td>
                         <td><input type="text" name="username" placeholder="Enter Your Username"></td>
                     </tr>
                     <tr>
                         <td>Password</td>
                         <td><input type="password" name="password" placeholder="Enter Your Password"></td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <input type="submit" name="submit" value="Add admin" class="btn-secondary">
                         </td>
                     </tr>
                 </table>
             </form>
        </div>
       
</body>
</html>
