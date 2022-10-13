<?php 
    include('partials/menu.php');
    include 'server.php';
?>
     <!-- menu content section start -->
        <div class="main-content">
            <div class="wrapper">
             <h1>Manage Admin</h1>
             <br />

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
                <br><br>

             <a href="add-admin.php" class="btn-primary">Add Admin</a>
             <br /><br />
             <table class="tbl-full"">
                 <tr>
                     <th>S.N</th>
                     <th>Full Name</th>
                     <th>User name</th>
                     <th>Action</th>
                 </tr>

                    <?php 
                      $sql = "SELECT * FROM tbl_admin";
                      $res = mysqli_query($conn,$sql);

                      if($res == TRUE){
                        $count = mysqli_num_rows($res);
                        $sn=1;
                        if($count>0){
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $id =$row['Id'];
                                $full_name = $row['full_name'];
                                $username = $row['username'];
                                ?>

                            <tr>
                                <td><?php echo $sn++;?></td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td>
                                   
                                 <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-delete">Delete Admin</a>
                                </td>
                            </tr>


                                <?php 
                            }
                        }
                      }
                    ?>

             </table>

            </div>
        </div>
    <!-- menu content section end -->

   
</body>
</html>