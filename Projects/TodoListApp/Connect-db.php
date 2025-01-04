<?php
 $servername = "localhost";
 $username = "root";
 $Password = "";
 $db = "todolist";
 
 $connection = mysqli_connect($servername, $username, $Password, $db);
 if($connection){
     ?>
     <script>console.log("DataBase Connected");</script>
     <?php
 }

$insert = false;

 //Getting the values from the form
 $title = $_GET['title'];
 $desc = $_GET['desc'];
 $dt = $_GET['date-time'];

 //Insertion: Assuring that the data don't be blank
 if($title !== "" && $desc !== ""){
    $sql_insert = mysqli_query($connection, "INSERT INTO `lists`(`Title`, `Time`, `Description`) VALUES ('$title','$dt','$desc')");   
}
 else{
    return 0;
 }

 //Checking the Insertion
 if($sql_insert){
    ?>
    <script>console.log("Data inserted succesfully")</script>
    <?php
    $insert= true;
 }

 //Fetching the data
 $sql_fetch = mysqli_query($connection, "SELECT `Id`, `Title`, `Time`, `Description` FROM `lists` WHERE 1");
?>

