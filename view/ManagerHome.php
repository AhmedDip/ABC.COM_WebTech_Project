<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>

.show {display: block;}
body {
}

h3,p{
  color:blue;
}

h4{
  color:red;
}

</style>
</head>
<body>


<h1  align='center'>ABC.COM</h1>



<header>
<?php 

include ('header\header1.php');

?>
</header>

  
<button  class='buy-now-button' onclick="displayDate()">Current Time</button>

<script>
function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}
</script>

<p id="demo"></p>

<?php 

    if (isset($_SESSION['userName'])) {
    echo "<h3> Logged in with ".$_SESSION['userName'].", Welcome to Manager's Homepage"."</h3>";

    }
    else{
    $msg="error";
    header("location:Login.php");
    // echo "<script>location.href='login.php'</script>";
    }
    ?>




</body>

        <br>
        <h4>MANAGER DETAILS</h4>
    
        <div text-align:'center'>
        <?php
        include('../model/conn.php');
        $sqlget = "SELECT * FROM users WHERE email='" . $_SESSION["userName"] . "' ";
        $sqldata = mysqli_query($con, $sqlget) or die('Error');
        while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
            // echo "<img src='".$row["imageName"]."' >";
            echo " <p>ID   :    " . $row['id'] . "</p>";
            echo " <p>" .     $row['firstname'] . "    " . $row['lastname'] . "</p>";
            echo "<p>Phone Number : " . $row['phone'] . "</p>" . "<p>Address : " . $row['homeAddress'] . "</p>";
            echo "<p>Email  :" . $row['email'] . "</p>";
            echo "<p> User Type :" . $row['userType'] . "</p>";
    
        }
        ?>
        </div>
      
       
        <!-- <a href="deleteprofile.php"><button  class='buy-now-button'>Delete</button></a> -->
        <a href="Logout.php"><button  class='buy-now-button'>Logout</button></a>

    </div>

    <script>
function myFunction() {
  confirm("Press a button!");
}
</script>
<br><br>



</html>

</html>

<br>



<?php 
    include ('footer/footer.php');

?>


</div>
    </body>
</html>