
<?php 
    include('partials/menu.php');
    include 'server.php';
   

?>
        
     <!-- menu content section start -->
        <div class="main-content">
            <div class="wrapper">
             <h1>Welcome</h1>
             <br><br>
             <?php 
              if(isset($_SESSION['login']))
                 {
                     echo $_SESSION['login'];
                     unset($_SESSION['login']);
                 }
             ?>
                <br><br>
            

            

            <div class="clear-fix"></div>

            </div>
        </div>
    <!-- menu content section end -->

</body>
</html>