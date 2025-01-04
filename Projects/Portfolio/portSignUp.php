<?php
// include "Connect.php";

// //Getting data from the form
// $Email = $_POST['email'];
// $password = $_POST['pass'];
// $rem = $_POST['remember'];

// // echo $Email."<br>".$password."<br>".$rem;

// //inserting the query
// $sql_ins = mysqli_query($connect, "INSERT INTO `customers`(`Email`, `Password`, `Remember`) VALUES ('$Email','$password','$rem')");
//  if($sql_ins){
     ?><div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 0px;">
     <strong>Success! </strong>Account verified<img src="	https://img.freepik.com/premium-vector/approved-ic…lue-circle-shape-sparkle-star_615518-41.jpg?w=740" width="25px" style="mix-blend-mode: multiply;">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div><?php
//  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #Body{
            background: linear-gradient(to left, #00c6ff, #0072ff);
            font-family: 'Open Sans', sans-serif;
        }
        .Main{
            min-width: fit-content;
            width: 10pc;
            height: 70vh;
            margin: 8vw auto;
            display: flex;
            justify-content: space-between;
            background-color: #fff;
            box-shadow: 8px 8px 8px rgba(106, 90, 205, 0.5); /* Slate Blue */

        }
        .toggle{
            padding: 6% 5%;
            display: inherit;
            flex-direction: column;
            text-align: center;
        }
        .toggle a{
            color: black;
            text-decoration: underline;
            margin-top: 1vw;
        }
        form{
            min-width: 20pc;
            max-width: 30pc;
            padding: 20% 5%;
           
        }
        input[name="email"], input[name="pass"]{
            width: 20vw;
            margin-top: 1vw;
            border: none;
            border-bottom: 2px solid gray;
            background-color: #fff;
            padding-left: 1.75pc;
        }
        input[name="email"]{
            background-image: url('	https://cdn-icons-png.flaticon.com/512/266/266033.png');
            background-repeat: no-repeat;
            background-size: contain;
            background-position-y: -0.1pc;

        }
        input[name="pass"]{
            background-image: url('	https://cdn-icons-png.flaticon.com/512/3064/3064155.png');
            background-repeat: no-repeat;
            background-size: contain;
        }
        #see{
            width: 1.7vw;
            background-color: #fff;
            margin-left: -2vw;
            padding-bottom: 3px;
            padding-right: 5px;
            mix-blend-mode: multiply;
        }
        input[type="checkbox"]{
            width: 20px;
            padding: 0;
            margin: 0;
        }
        label[for="remember"]{
            font-size: 12px;
            margin: 20px 3px;
        }
        .rem{
            display: flex;
        }
        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
        
    </style>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body id="Body">
        <div class="Main">
            <div class="toggle">
                <img src="https://blush.design/api/download?shareUri=TOAdI9F5mo6yLPSU&c=Monochromatic_0%7E52dc82-0.2%7E60d6e1_Skin_0%7Eedb98a-0.2%7Eae5d29&w=800&h=800&fm=png" style="mix-blend-mode: multiply;" width="370vw" alt="">
                <a href="#">Stay Logged Out</a>
            </div>
            <form action="" method="post">
                <h1>Sign in</h1>
                <input type="email" name="email" id="email" placeholder="Email Address" required>
                <input type="password" name="pass" id="pass" placeholder="Password" required>
                <div class="rem">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <input type="submit" value="Log In" class="btn btn-success">
            </form>
        </div>
</body>
</html>
<script>
    

</script>