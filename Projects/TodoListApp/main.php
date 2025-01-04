<?php
 include "Connect-db.php";
 $num = 1;

 //Displaying after fetching
//  $display = mysqli_fetch_assoc($sql_fetch);
//  echo $display['Title']. $display['Description']."<br>";

//Deleting
$sql_del = mysqli_query($connection, "DELETE FROM `lists` WHERE `Id`='$num'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap');
        .Nav{
            display: flex;
            background: linear-gradient(90deg, #1d6dc8, #9013FE);
            color: white;
            justify-content: space-between;
        }
        .Nav ul{
            width: 35vw;
        }
        ul a{
            text-decoration: none;
            color: rgb(215, 214, 214);
            padding: 4%;
            width: 6vw;
        }
        a:visited{
            color: #fff;
        }
        #searchBar{
            height: 2pc;
            margin-top: 5px;
            border-radius: 5px;
            border-color: lightgray;
        }
        #Search a{
            text-decoration: none;
        }
        section{
            margin-top: 2vw;
            display: flex;
            flex-direction: column;
            width: 60vw;
            margin-left: 10vw;
        }
        section h1, #userForm, #Nav, table{
            font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
        }
        #userForm{
            height: 35vh;
        }
        #userForm input[type="text"], #userForm textarea{
            width: 40vw;
            border-radius: 5px;
            border-color: lightgray;
            margin-bottom: 1vw;
            background-color: rgb(198, 222, 230);
        }
        #userForm input[type="text"]:focus, #userForm textarea:focus{
            box-shadow: 2px 3px 5px rgb(71, 71, 231);
            border: none;
            background-color: #fff;
        }
        th{
            font-size: 1.4em;
        }
        tr{
            border: 1px solid black;
            height: 10vh;
        }
        td{
            border: 1px solid black;
        }
        table{
            width: 60pc;
            border: 2px solid black;
            border-collapse: collapse;
            margin-left: 10vw;
            margin-top: 2vw;
            overflow-y: scroll;
            text-align: center;
        }
        tr:nth-child(odd){ 
            background-color: lightblue;
        }
        tr,td{
            width: 4pc;
        }
        
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>CRUD - TODOLIST</title>
</head>
<body>
    <nav class="Nav" id="Nav">
        <ul>
            <a href="#" style="font-size: 22px; color:white;">MyNotes</a>    
            <a href="#Nav">Home</a>    
            <a href="#">About</a>    
            <a href="#">Contact</a>    
        </ul>
        <form id="Search">
            <a href="#searchBar">
                <svg xmlns="http://www.w3.org/2000/svg" class="search-icon" fill="white" viewBox="0 0 24 24" width="24px" height="24px">
                    <path d="M10 2C5.59 2 2 5.59 2 10c0 4.41 3.59 8 8 8 1.77 0 3.4-.57 4.72-1.53l5.28 5.28 1.41-1.41-5.28-5.28C17.43 13.4 18 11.77 18 10c0-4.41-3.59-8-8-8zm0 2c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6 2.69-6 6-6z" />
                </svg>
            </a>
            <input type="search" name="searchBar" placeholder="Search Here.." id="searchBar">
        </form>
    </nav>
    <?php
     if($insert){
        ?><div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 0; padding: 2px; border-radius: 0;">
        <strong>Success! Note is Inserted.</strong>
        <button style="margin: 0; padding: 4px;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div><?php
     }
    ?>
    <section>
        <h1>Add a Note</h1>
        <form id="userForm">
            <label for="title">Note Title</label><br>
            <input type="text" name="title" required><br>
            <label for="date-time">Time</label><br>
            <input type="time" name="date-time"><br>
            <label for="desc">Note Description</label><br>
            <textarea name="desc" id="desc" maxlength="300" required></textarea><br>
            <input type="submit" class="btn btn-primary" value="Add Note">
        </form>
    </section>
    <Display>
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Time</th>
                <th>Description</th>
                <th>Edit</th>
            </tr>
            <?php
           while($display = mysqli_fetch_assoc($sql_fetch)){
            ?>
            <tr id="row">
                <td><?php echo $num;?></td>
                <td><?php echo $display['Title']; ?></td>
                <td><?php echo $display['Time'];?></td>
                <td><?php echo $display['Description']; ?></td>
                <td><button name="delete" type="submit" style="margin: 0; padding: 4px;" type="button" class="btn-close" aria-label="Close"></button></td>
                <?php $num++;
           }
                ?>
            </tr>
        </table>
    </Display>
</body>
</html>