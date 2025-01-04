<?php
 $server  = "localhost";
 $username = "root";
 $password = "";
 $database = "form";
 $connection = mysqli_connect($server,$username,$password,$database);
 if($connection){
   ?>
   <script>
      console.log("DataBase Connected Succesfully");
   </script>
   <?php }
?>