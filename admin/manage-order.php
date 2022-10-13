<?php
 include('partials/menu.php');
  include 'server.php';
?>

<div class="main-content">
            <div class="wrapper">
             <h1>Manage Order</h1>
             <br /><br />
            
             <table class="tbl-full"">
                 <tr>
                     <th>S.N</th>
                     <th>Food</th>
                     <th>Price</th>
                     <th>QTY</th>
                     <th>Order Date</th>
                     <th>Status</th>
                     <th>Customer Name</th>
                     <th>Customer Contact</th>
                     <th>Email</th>
                     <th>Address</th>
                     
                 </tr>
                 <?php 
                    $sql = "SELECT * FROM tbl_order";
                    $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
                    $sn=1;
                    if($count>0){
                        while($row = mysqli_fetch_assoc($res))
                        {
                            $id = $row['Id'];
                            $food = $row['food'];
                            $price = $row['price'];
                            $qty = $row['qty'];
                            $order_date = $row['order_date'];
                            $status = $row['status'];
                            $customer_name = $row['customer_name'];
                            $customer_contact = $row['customer_contact'];
                            $customer_email = $row['customer_email'];
                            $customer_address = $row['customer_address'];
                        }

                    }
                    else{
                        echo "order not availavle";
                    }
                 ?>
                 <tr>
                     <td><?php echo $sn++; ?></td>
                     <td>Smoke Pizza</td>
                     <td>300</td>
                     <td><?php echo $qty; ?></td>
                     <td><?php echo $order_date; ?></td>
                     <td><?php echo $status; ?></td>
                     <td><?php echo $customer_name; ?></td>
                     <td><?php echo $customer_contact; ?></td>
                     <td><?php echo $customer_email; ?></td>
                     <td><?php echo $customer_address; ?></td>

                    
                 </tr>
                
             </table>
             

            </div>
        </div>