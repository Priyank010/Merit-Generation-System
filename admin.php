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
<body bgcolor="E3E3E3">
	
	<form method="post">
		<table border="0px" >
			<tr>
	<td><img src="GLSlogo.jpg" height="200" width="400" style="float:left"></td>
	<td><font color="3C4694"><h1>&nbsp;&nbsp;&nbsp;Faculty of Computer Applications and Information Technology</h1></font></td>
</tr>
		<tr>
			<td><h3>Enter Administration ID :</h3></td> <td><input type="text" style="font-size: 18pt; height: 30px; width:380px;" id="t1" name="login"  ></td><td></td>
		</tr>
		<tr></tr>
		<tr>
			<td><h3>Enter Password :</h3></td> <td><input type="Password" style="font-size: 18pt; height: 30px; width:380px;" id="t2" name="password" ></td><td></td>
		</tr>
		<tr>
			<td><input type="submit"></td>
		</tr>
	</table>
</form>
<?php

session_start();

const login = 'admin';
const password = 'admin';

if (isset($_POST['login']) && isset($_POST['password'])) //when form submitted
{
  if ($_POST['login'] === login && $_POST['password'] === password)
  {
    $_SESSION['login'] = $_POST['login']; //write login to server storage
    header('Location: adminside.php'); //redirect to main
  }
  else
  {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}

?>

</body>
</html>

