<html>
<head>
<style>

</style>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div style="background-color:E3E3E3">
	
		<table border="0px" >
			<tr>
	<td><img src="GLSlogo.jpg" height="150" width="300" style="float:left"></td>
	<td><font color="3C4694"><h1 align="center">&nbsp;&nbsp;&nbsp;Faculty of Computer Applications and Information Technology</h1></font></td>
</tr>
</table>
</div>
<table id="table1">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<td>
		<tr>
			<h3>You Have Successfully Submited Your Form<br></h3>
			<h3>Your UniqueID is this:
			<?php
			$a=rand(100000,999999);
			echo $a;
			?>
			<br>	
			</h3>
			<h5>(Please note this UniqueID this will be required to check your merit list)</h5> 
		</tr>
	</td>
	<td>
		<tr>
			<input type="submit" name="submit" value="Next>">
		</tr>
	</td>
</form>
</table>
</body>
</html>	 
<?php
$dbhost='localhost';
$dbuser='root';

$conn=mysqli_connect($dbhost,$dbuser);

mysqli_select_db($conn,'go2');

$cnt="INSERT INTO uniqueid VALUES('$a');";
if(mysqli_query($conn,$cnt))
{

if(isset($_POST['submit']))
 {
 	echo "he";
 header('Location: gr.php');
 }
}
else
{
	echo "string";
}
?>
