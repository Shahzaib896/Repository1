<?php
  include "form.php";
  $Firstname = $_GET['fname'];
  $Lastname = $_GET['lname'];
  $Email = $_GET['email'];
  $Password = $_GET['password'];
  $Gender = $_GET['gender'];
  $Dob = $_GET['dob'];
   $sql= "INSERT INTO `login`(`First Name`, `Last Name`, `Email`, `Password`, `Gender`, `Year of birth`) VALUES ('$Firstname','$Lastname','$Email','$Password','$Gender','$Dob')";
   
   $Result = mysqli_query($connection,$sql);
 
   if($Result){
       echo "Data Inserted Successfully";
   }
   else{
       echo "Error in Inserting Data";
   }
?>