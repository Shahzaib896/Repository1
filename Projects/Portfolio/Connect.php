<?php
$host = "localhost";
$username = "root";
$Password = "";
$db = "portfolio";

$connect = mysqli_connect($host, $username, $Password, $db);
if($connect){
    ?>
    <script>console.log("Database Connected")</script>
    <?php
}
?>