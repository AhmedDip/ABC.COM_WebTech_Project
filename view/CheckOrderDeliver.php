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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
	


</div>
</div>
  <style>
    
  </style>
</head>

<body>

<h1  align='center'>ABC.COM</h1>



<header>
<?php include 'header\header1.php';?>
</header>

<div class="header" align='center'><h3>Order Details</h3></div>
  <div>
    <center>

      <h1></h1>
      Search:
      <input type="text" id="search_data" name="search_data"><button class="button" type="button" > Submit</button>
      <br><br>
      <table id="result" class="result">

      </table>
      <!-- <div id="result" class="result"></div> -->
    </center>
  </div>
  <a href="ManagerHome.php"class="buy-now-button">Back</a>
  <a href="Logout.php" class="buy-now-button">Logout</a>

	<br><br>

<br>

<br><br>
      <div class="footer">

 

</body>

</html>
<script>
  $(document).ready(function() {

    load_data();

    function load_data(query) {
      $.ajax({
        url: "fetch.php",
        method: "POST",
        data: {
          query: query
        },
        success: function(data) {
          $('#result').html(data);
        }
      });
    }
    $('#search_data').keyup(function() {
      var search = $(this).val();
      if (search != '') {
        load_data(search);
      } else {
        load_data();
      }
    });
  });
</script>