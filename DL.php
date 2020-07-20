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
<table width="600" border="1" cellpadding="8" cellspacing="1" align="center">
	<tr><h1><center>DEPRICT LIST</center></h1></tr>
<tr></tr>
	<tr>
		<th>Surname</th>
		<th>Name</th>
		<th>Middlename</th>
		<th>Stream</th>
		<th>Category</th>
		<th>PassportSize photo</th>
		<th>10th Marksheet</th>
		<th>12th Marksheet</th>
		<th>Caste Certificate</th>
		<th>Attempt Certificate</th>
		<th>Living Certificate</th>
		<th>Email ID</th>
		<th>Phone.no</th>
	</div>
	</tr>

<?php
$dbhost='localhost';
$dbuser='root';
//$dbpass='root';
$conn=mysqli_connect($dbhost,$dbuser);
mysqli_select_db($conn,'go2');
//$LC=$_POST["LC"];
if(!$conn)
{
	echo "hee";
}
else
{
	$x="SELECT * FROM form Where LCSource=' ' || PicSource=' ' || 10thSource=' ' || 12thSource=' ' || casteSource=' ' || attemptSource= ' ';";

	$query = mysqli_query($conn,$x);
	while($row= mysqli_fetch_array($query))
	{
		print "<tr><td>";
	   echo $row["stdlname"];
	   print"</td><td>";
	   echo $row["stdfname"];
	   print"</td><td>";
	      echo $row["stdpname"];
	   print"</td><td>";
	      echo $row["stream"];
	   print"</td><td>";
	      echo $row["category"];
	   print"</td><td>";
	      echo $row["PicSource"];
	   print"</td><td>";
	   	  echo $row["10thSource"];
	   print"</td><td>";
	   	  echo $row["12thSource"];
	   print"</td><td>";
	   	  echo $row["casteSource"];
	   print"</td><td>";
	   	  echo $row["attemptSource"];
	   print"</td><td>";
	   	  echo $row["LCSource"];
	   print"</td><td>";
	   	  echo $row["email_s"];
	   print"</td><td>";
	   	  echo $row["mbno_s"];		
	   print"</td></tr>";


	}
	}
?>
</table>
</body>
</html>