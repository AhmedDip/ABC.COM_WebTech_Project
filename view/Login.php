<?php
include('../control/LoginValidation.php');
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
    <script src="../javaScript/LoginValidation.js"></script>

    <style>
      h2{
        font-family:verdana;
      
      }
      span{
        color:red;
      }
      body {
 background-image: url("1.jpg");
 background-color: #cccccc;
}

      form{
        margin:2px;
      }

      .container {
  padding: 16px;
}

input:focus {
  background-color: yellow;
}
    </style>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    </head>
    <body>
   <div class="sticky">
   <div><h1 align='center'> ABC.COM</h1></div>
   
   <header>
<?php include 'header\header.php';?>
</header>
   
  </div>
</div>
<center> <fieldset>
    
    <br> <br> <br>
    <fieldset>

    <div class="container">
            <h2>LOGIN</h2>
            <form action="" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

            <h4> Email :</h4>
            <input type="text" placeholder="Email address" id="userName" name="userName" onkeyup="validateEmail()" >
            <br>
            <span id="emailError">* <?php echo $emailerror; ?></span>

            <h4>Password:</h4> 
            <input type="password" placeholder="Password" id="password" name="password" onkeyup="validatePassword()" > 
        
            <br>
          
              <td><span id="passError">* <?php echo $passerror; ?></span></td>
            

            <br>
            <input type="checkbox" id="remember" name="remember" value="1">Remember Me 
            <br> <br>
            <button class="buy-now-button" name="submit" value="Submit">Submit</button>
            <br> <br>
            Want to register yourself? <a href="registration.php"> Register Here </a>
            <br> <br>
            </div>
            <?php 

            include ('footer/footer.php');

            ?>


            
    

            <br> <br>
            </form>

            </fieldset>


            </center>

  
    </body>
</html>




