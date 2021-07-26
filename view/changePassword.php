<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
include('../control/passwordValidation.php');
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
    <script src="../javaScript/passwordValidation.js"></script>
    <style>

    p{
        color:red;
    }

    input:focus {
  background-color: yellow;
}

.show {display: block;}
body {
 background-image: url("2.jpg");
 background-color: #cccccc;
}

    
    </style>
    </head>
    <body>
    <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="header">
<h1  align='center'>ABC.COM</h1>


<header>
<?php include 'header\header1.php';?>
</header>

</div>

            <center><fieldset width=50%>
            <br> <br>
            <form action=" " method="post"> 
            <table style='width:50%' border='1'>
            <tr> <h4> Change Password </h4>
            <tr>
            <td><label for="password"><b>Password : </b></label></td>
            <td><input type="password" placeholder="Password" id="password" name="password" onkeyup="validatePassword()" >
            <p id="passError"><?php //echo $passError; ?></td>
            </tr>

            <tr>
            <td><label for="Cpassword"><b>Confirm Password : </b> </label></td>
            <td><input type="password" placeholder="Confirm password" id="Cpassword" name="Cpassword" onkeyup="validateCpassword()" >
            <p id="CpassError"><?php //echo $passError; ?></td>
            </tr> 
            </table>

        <br> <br>
        <input type="submit" name = "submit" class="buy-now-button" value="Change password">
        <br><br>

    </body>
</html>