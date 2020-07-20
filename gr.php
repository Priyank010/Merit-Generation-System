<html>
<head>
		<style>
* {box-sizing: border-box}

body,html { 
height: 100%;
margin: 0;
font-family: "Lato" , sans-serif;}


</style>

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
	<div style="background-color:E3E3E3">
	<form method="post">
		<table border="0px" >
			<tr>
	<td><img src="GLSlogo.jpg" height="200" width="400" style="float:left"></td>
	<td><font color="3C4694"><h1>&nbsp;&nbsp;&nbsp;Faculty of Computer Applications and Information Technology</h1></font></td>
</tr>
<tr>
	
</tr>
</table>
</form>
</div>
<center>
<table cellspacing="50">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<tr>		
		<td>
			<a href="p1.php">
  <div class="w3-card-4" style="width:110%;">
    <header class="w3-container w3-red">
       <font size="100" face="Lato">BCA</font>
    </header>

    <div class="w3-container">
    	Clicking on the provided link in this card<br>
    	will lead you to the registration for BCA.<br>
    	<h3>number of seats available are 225</h3><br>
      <center><b> Want to Fill BCA Form?</b></center>
    </div>

    <footer class="w3-container w3-red">
      <h5>click on this card for BCA</h5>
    </footer>
  </div>
  </a>
</td>
<td> </td>
		<td><a href="p2.php">
  <div class="w3-card-4" style="width:110%;">
    <header class="w3-container w3-yellow">
       <font size="100" face="Lato">iMSCIT</font>
    </header>

    <div class="w3-container">
    	Clicking on the provided link in this card<br>
    	will lead you to the registration for iMSCIT.<br>
    	<h3>number of seats available are 120</h3><br>
      <center><b> Want to Fill MCA Form?</b></center>
    </div>

    <footer class="w3-container w3-yellow">
      <h5>click on this card for MCA</h5>
    </footer>
  </div>
  </a>
</td>
<td> </td>

		<td><a href="p3.php">
  <div class="w3-card-4" style="width:110%;">
    <header class="w3-container w3-green">
       <font size="100" face="Lato">PGDCA</font>
    </header>

    <div class="w3-container">
      Clicking on the provided link in this card<br>
    	will lead you to the registration for PGDCA.<br>
    	<h3>number of seats available are 30</h3><br>
      <center><b> Want to Fill PGDCA Form?</b></center>
    </div>

    <footer class="w3-container w3-green">
      <h5>click on this card for PGDCA</h5>
    </footer>
  </div>
</a>
</td>
<td></td>
</tr>
</table>
<table>
<tr>
<td>
	<tr>
	<h3>Enter Your UniqueID Here to Check Details About Merit List:</h3>
	<input type="text" name="no"></tr>
	<td><tr>
	<td><input type="Submit" name="Submit"></td>
	<td></td>
</tr>
</td>
</td>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<td></td>
</tr>
</table>
</center>
</body>
</html>
<?php
$dbhost='localhost';
$dbuser='root';
$no=$_POST["no"];
$conn=mysqli_connect($dbhost,$dbuser);

mysqli_select_db($conn,'go2');

$cnt="SELECT * FROM uniqueid WHERE Id='$no'";


$result = mysqli_query($conn,$cnt);

    if(mysqli_num_rows($result) > 0)
    {
        echo " exists";
        header('Location: list.php');

    }
    else
    {
    	echo "not exist";
    }
?>
