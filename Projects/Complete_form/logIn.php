<?php
include "form.php";
include "signUp.php";
$Email_login = $_GET['email'];
$Password_login = $_GET['password'];

 $sqllogin = "SELECT * FROM login WHERE Email = '$Email_login' AND Password = '$Password_login'";
 $Result = mysqli_query($connection,$sqllogin);
 
 if($Result){
     echo "Data Selected Successfully";
 }
 else{
     echo "Error in Selecting Data";
 }

echo " ?>
 <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Date of birth</th>
        </tr>
        <tr>
            <td><?php $Firstname?></td>
            <td><?php $Lastname?></td>
            <td><?php $Email?></td>
            <td><?php $Password?></td>
            <td><?php $Gender?></td>
            <td><?php $Dob?></td>
        </tr>
    </table>
    <?php"
    ?>