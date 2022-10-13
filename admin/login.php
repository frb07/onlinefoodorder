
<?php
    include 'server.php';
   
    if(isset($_POST['submit']))
    {
        if(empty(trim($_POST["username"]))){
            $username_error = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
        }

        if(empty(trim($_POST["password"]))){
            $password_error = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tbl_admin WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $num_row = mysqli_num_rows($result);
        $data = mysqli_fetch_array($result);

        if($num_row ==1)
        {
            $_SESSION['login']='Login Successfully';
            $_SESSION['user'] = $username;
            header('location:'.SITEURL.'admin/');
        }
        else{
            $_SESSION['login']='Login Failed, Please Try Again Letter';
            header('location:'.SITEURL.'admin/login.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Food Order System</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        body{
            background-color: rgb(194, 183, 202)
        }
    </style>
    
</head>
<body>
    <div class="login" style="border: hidden;">
        <h1 class="text-center">Login</h1>
        <br>

        <?php 
            if(isset($_SESSION['login']))
                 {
                     echo $_SESSION['login'];
                     unset($_SESSION['login']);
                 }
         ?>
        
            <form action="" method="POST" class="text-center">
                Username:<br>
                <input type="text" name="username" placeholder="Enter Your User Name"><br><br>
                Password:<br>
                <input type="password" name="password" placeholder="Enter Your Password"><br><br>
                <input type="submit" name="submit" value="Login" class="btn-primary">
            </form>
        
    </div>
     
    <a href="<?php echo SITEURL;?>" class="btn btn-primary">Back</a>
    
</body>
</html>