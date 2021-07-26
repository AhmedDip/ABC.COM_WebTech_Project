<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Live search</title>
	<script> 

  function ajax()
  {

	var pid = document.getElementById('pid').value;


	var xhttp = new XMLHttpRequest();


	xhttp.open('POST', 'viewProduct.php', true);

	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhttp.send('pid='+pid);

	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{

			document.getElementById('result').innerHTML = this.responseText;
		}
	}
   }



	</script>
</head>
<body>


<h1 align='center'>ABC.COM</h1>
<header>
<?php include 'header\header1.php';?>
</header>
	<h1>Seach</h1>
	<input type="text" placeholder="Product Id" name="pid" id="pid" onkeyup="ajax()">
	 
	<input type="button" class="buy-now-button" name="" value="Submit" onclick="ajax()">
	<br> <br>

	<h4><div id="result"></div></h4>
</body>
</html>