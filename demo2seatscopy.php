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
<body>
	<div style="background-color:E3E3E3">
	<form method="post">
		<table border="0px" >
			<tr>
	<td><img src="GLSlogo.jpg" height="200" width="400" style="float:left"></td>
	<td><font color="3C4694"><h1>&nbsp;&nbsp;&nbsp;Faculty of Computer Applications and Information Technology</h1></font></td>
</tr>
<tr>
	
<left>
</tr>
</table>
</form>
</div>
<form method="post">
<table>
   <tr>
         <td>
            <h3>Enter general reservation percentage:</h3></td><td><input type="text" name="general" id="general"></td><td></td><td><font color="red">(Please enter unalterd value that is general's reservation percentage without deducting ph or sebc percentage)</font>
         </td>
      </tr>
      <tr><td> </td></tr>
      <tr>
         <td>
            <h3>Enter ST reservation percentage:</h3></td><td><input type="text" name="stt" id="stt"></td><td></td><td><font color="red">(Please enter unalterd value that is ST's reservation percentage without deducting ph or sebc percentage)</font></td>
         
      </tr>
      <tr><td> </td></tr>
      <tr>
         <td>
            <h3>Enter SC reservation percentage:</h3></td><td><input type="text" name="sc" id="sc"></td><td></td><td><font color="red">(Please enter unalterd value that is SC's reservation percentage without deducting ph or sebc percentage)</font></td>
         
      </tr>
      <tr><td> </td></tr>
      <tr>
         <td>
            <h3>Enter OBC reservation percentage:</h3></td><td><input type="text" name="obc" id="obc"></td><td></td><td><font color="red">(Please enter unalterd value that is OBC's reservation percentage without deducting ph or sebc percentage)</font></td>
         
      </tr>
      <tr><td> </td></tr>
      <tr>
         <td>
            <h3>Enter SEBC reservation percentage:</h3></td><td><input type="text" name="sebc" id="sebc"></td>
         
      </tr>
      <tr><td> </td></tr>
      <tr>
         <td>
            <h3>Enter Physical handicap reservation percentage:</h3></td><td><input type="text" name="ph" id="ph"></td>
         
      </tr>
      <tr><td> </td></tr>


<tr>
<td><h3>Select Sub-Category:</h3></td>
<td>
<input type="checkbox" name="SEBC" id="SEBC">SEBC</td>
<td><input type="checkbox" name="PH" id="PH">Physical Handicap</td></tr>
      
<tr><td><h3>Select Board:</h3></td>
<td><select style="font-size: 12pt; height: 20px; width:280px;" name="SB" id="SB">
<option value= "none">none</option>
<option value= "CBSE">CBSE</option>
<option value= "GSEB">GSEB</option>
<option value= "Others">Others</option>
</select></td></tr>

<tr><td><h3>Select Stream:</h3></td>
<td><select style="font-size: 12pt; height: 20px; width:280px;" name="st" id="st">
<option value= "none">none</option>
<option value= "Science">Science</option>
<option value= "Commerce">Commerce</option>
<option value= "Arts">Arts</option>
</select></td></tr>
<tr>
<td><h3>Percentage:</h3></td><td><input type="text" name="PP" id="per" placeholder="Enter your Percentage"  style="width:280px;"></td>
</tr>
<tr><td><h3>Enter Number Of Seats:</h3></td><td><input type="text" name="seats" id="seats"/></h3></td></tr>
<tr>
<td><input type="submit"  name="submit" id="submit" value="submit"></td>
<td><input type="reset"></td>
<td><input type="button" name="print" value="print" onclick="printContent('demox')"/></td>
<td><input type="button" name="DL" value="DeprictList" onClick="document.location.href='DL.php'"></td>
</tr>
</left>
</table>
</form>
<div id="demox">
<table width="600" border="1" cellpadding="8" cellspacing="1" align="center">

	<tr>
		<th>Surname</th>
		<th>Name</th>
		<th>Middlename</th>
		<th>Stream</th>
		<th>Physical </th>
		<th>Category</th>
		<th>Board</th>
		<th>Percentage</th>
		<th>Enrollment</th>
	</div>
	</tr>
<?php
$dbhost='localhost';
$dbuser='root';
//$dbpass='root';
$conn=mysqli_connect($dbhost,$dbuser);
mysqli_select_db($conn,'go2');
$per= $_POST['per'];
$percentage= $_POST['PP'];
$stream=$_POST['st'];
$SB=$_POST['SB'];
$seats=intval($_POST['seats']);
if(isset($_POST['DL']))
{
   echo "<script type='text/javascript'>window.location.href = 'hell.php';</script>";
}
$genn=intval($_POST["general"]);
$stt=intval($_POST["stt"]);
$scc=intval($_POST["sc"]);
$obcc=intval($_POST["obc"]);
$sebcc=intval($_POST["sebc"]);
$phh=intval($_POST["ph"]);

if(empty($genn))
   $genn = 50;

if(empty($stt))
   $stt = 15;

if(empty($scc))
   $scc = 7;

if(empty($obcc))
   $obcc = 27;

if(empty($sebcc))
   $sebcc = 10;

if(empty($phh))
   $phh = 3;

$new_per = floatval($percentage);

if(isset($_POST['PH'])&&isset($_POST['SEBC']))
{
	if(!empty($percentage))
	{
		global $new_per;
		echo $new_per,"<br>";
		sort_demo($new_per,$stream,$SB);
		xyz_per('General',($genn - ($sebcc + $phh)),$new_per,$stream,$SB);
		xyz_per('SEBC',$sebcc,$new_per,$stream,$SB);
		xyzp_per('General',$phh,$new_per,$stream,$SB);
		xyz_per('SC',$scc,$new_per,$stream,$SB);
		xyz_per('ST',$stt,$new_per,$stream,$SB);
		xyz_per('OBC',$obcc,$new_per,$stream,$SB);
	}
	else
	{
		xyz('General',($genn - ($sebcc + $phh)),$stream,$SB);
		xyz('SEBC',$sebcc,$stream,$SB);
		xyzp('General',$phh,$stream,$SB);
		xyz('OBC',$obcc,$stream,$SB);
		xyz('SC',$scc,$stream,$SB);
		xyz('ST',$stt,$stream,$SB);
	}
}
elseif (isset($_POST['PH'])) {
	if(!empty($percentage))
	{
		global $new_per;
		echo $new_per,"<br>";
		sort_demo($new_per,$stream,$SB);
		phcnt_per($new_per,$stream,$SB);
	}
	else
	{
		phcnt($stream,$SB);
	}
}
elseif(isset($_POST['SEBC'])){

	if(!empty($percentage))
	{
		global $new_per;
		echo $new_per,"<br>";
		sort_demo($new_per,$stream,$SB);
		xyz_per('General',($genn-$sebcc),$new_per,$stream,$SB);
		xyz_per('SEBC',$sebcc,$new_per,$stream,$SB);
		xyz_per('SC',$scc,$new_per,$stream,$SB);
		xyz_per('ST',$stt,$new_per,$stream,$SB);
		xyz_per('OBC',$obcc,$new_per,$stream,$SB);
	}
	else
	{
		xyz('General',($genn-$sebcc),$stream,$SB);
		xyz('SEBC',$sebcc,$stream,$SB);
		xyz('OBC',$obcc,$stream,$SB);
		xyz('SC',$scc,$stream,$SB);
		xyz('ST',$stt,$stream,$SB);
	}
}
else
{
	if(!empty($percentage))
	{
		global $new_per;
		echo $new_per,"<br>";
		sort_demo($new_per,$stream,$SB);
		xyz_per('General',$genn,$new_per,$stream,$SB);
		xyz_per('SC',$scc,$new_per,$stream,$SB);
		xyz_per('ST',$stt,$new_per,$stream,$SB);
		xyz_per('OBC',$obcc,$new_per,$stream,$SB);
	}
	else
	{
		xyz('General',$genn,$stream,$SB);
		xyz('SC',$scc,$stream,$SB);
		xyz('ST',$stt,$stream,$SB);
		xyz('OBC',$obcc,$stream,$SB);
	}

}

function sort_demo($percent,$stream,$SB)
{
	global $conn;
   global $seats;
      
    if(!empty($seats)) 
      $seatsAreGiven = True;
    else 
      $seatsAreGiven = False;

	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
         if($seatsAreGiven)
         {
            $sql = "SELECT count(*) FROM form WHERE per >= '$percent';";
            $cnt = modify_seatCount($sql); 
            $lol = "SELECT * FROM form WHERE per >= '$percent' ORDER BY per DESC LIMIT {$cnt};";
         }
         else
			   $lol = "SELECT * FROM form WHERE per >= '$percent' ORDER BY per DESC;";
		}
		else
		{
         if($seatsAreGiven)
         {
            $sql = "SELECT count(*) FROM form WHERE per >= '$percent' AND board='$SB';";
            $cnt = modify_seatCount($sql); 
            $lol = "SELECT * FROM form WHERE per >= '$percent' AND board='$SB' ORDER BY per DESC LIMIT {$cnt};";
         }
         else
			   $lol = "SELECT * FROM form WHERE per >= '$percent' AND board='$SB' ORDER BY per DESC;";
		}
		
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
         if($seatsAreGiven)
         {
            $sql = "SELECT count(*) FROM form WHERE per >= '$percent' AND stream = '$stream';";
            $cnt = modify_seatCount($sql); 
            $lol = "SELECT * FROM form WHERE per >= '$percent' AND stream = '$stream' ORDER BY per DESC LIMIT {$cnt};";
         }
         else
			   $lol = "SELECT * FROM form WHERE per >= '$percent' AND stream = '$stream' ORDER BY per DESC;";
		}
		else
		{
         if($seatsAreGiven)
         {
            $sql = "SELECT count(*) FROM form WHERE per >= '$percent' AND stream = '$stream'AND board='$SB';";
            $cnt = modify_seatCount($sql); 
            $lol = "SELECT * FROM form WHERE per >= '$percent' AND stream = '$stream' AND board='$SB' ORDER BY per DESC LIMIT {$cnt};";
         }
         else
			   $lol = "SELECT * FROM form WHERE per >= '$percent' AND stream = '$stream' AND board='$SB' ORDER BY per DESC;";
		}
	}
	abc($lol);
}

function modify_seatCount($sql)
{
   global $new_per;
   global $conn;
   global $seats;
   $sql2=mysqli_query($conn,$sql);
   $row= mysqli_fetch_array($sql2);
   $cnt= $row["count(*)"];
   echo "<br>The number of seats above ",$new_per," are ",$cnt,"<br>";
   
   if($cnt>=$seats) 
      {
         $cnt = $seats;
         $seats = 0.01;
      }
   elseif($cnt<$seats) $seats = $seats - $cnt;

   return $cnt;
}

function phcnt($stream,$SB)
{
	//Function for physical handicap where it finds if there are physical handicaps present or not
	//if present then it calls the xyzp function otherwise it just calls normal function
	global $conn;
   global $genn,$scc,$stt,$obcc,$phh,$sebcc;
	$gen = False;
	$sc = False;
	$st = False;
	$obc = False;

	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='General' AND special='PH';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='General' AND special='PH' AND board='$SB';";
		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='General' AND special='PH' AND stream = '$stream';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='General' AND special='PH' AND stream = '$stream' AND board='$SB;";
		}
	}

	$sql2=mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($sql2);
	$cnt= $row["count(*)"];
	if($cnt > 0) $gen = True;

	if(!$gen)
	{
		xyz('General',$genn,$stream,$SB);
	}
	else
	{
		xyz('General',($genn-$phh),$stream,$SB);
		xyzp('General',$phh,$stream,$SB);
	}
	
	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='SC' AND special='PH';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='SC' AND special='PH' AND board='$SB';";

		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='SC' AND special='PH' AND stream = '$stream';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='SC' AND special='PH' AND stream = '$stream' AND board='$SB;";
		}
	}

	$sql2=mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($sql2);
	$cnt= $row["count(*)"];
	if($cnt > 0) $sc = True; 

	if(!$sc)
	{
		xyz('SC',$scc,$stream,$SB);
	}
	else
	{
		xyz('SC',($scc-$phh),$stream,$SB);
		xyzp('SC',$phh,$stream,$SB);
	}

	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='ST' AND special='PH';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='ST' AND special='PH' AND board='$SB';";

		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='ST' AND special='PH' AND stream = '$stream';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='ST' AND special='PH' AND stream = '$stream' AND board='$SB;";
		}
	}

	$sql2=mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($sql2);
	$cnt= $row["count(*)"];
	if($cnt > 0) $st = True;

	if(!$st)
	{
		xyz('ST',$stt,$stream,$SB);
	}
	else
	{
		xyz('ST',($stt-$$phh),$stream,$SB);
		xyzp('ST',$phh,$stream,$SB);
	}

	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='OBC' AND special='PH';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='OBC' AND special='PH' AND board='$SB';";

		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='OBC' AND special='PH' AND stream = '$stream';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='OBC' AND special='PH' AND stream = '$stream' AND board='$SB;";
		}
	}

	$sql2=mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($sql2);
	$cnt= $row["count(*)"];
	if($cnt > 0) $obc = True;

	if(!$obc)
	{
		xyz('OBC',$obcc,$stream,$SB);
	}
	else
	{
		xyz('OBC',($obcc-$phh),$stream,$SB);
		xyzp('OBC',$phh,$stream,$SB);

	}
}

function phcnt_per($percent,$stream)
{
	//Function for physical handicap where it finds if there are physical handicaps present or not
	//if present then it calls the xyzp function otherwise it just calls normal function
	global $conn;
   global $genn,$scc,$stt,$obcc,$phh,$sebcc;
	$gen = False;
	$sc = False;
	$st = False;
	$obc = False;

	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='General' AND special='PH' AND per < '$percent';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='General' AND special='PH' AND per < '$percent' AND board='$SB';";
		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='General' AND special='PH' AND stream = '$stream' AND per < '$percent';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='General' AND special='PH' AND stream = '$stream' AND per < '$percent' AND board='$SB';";

		}
	}

	$sql2=mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($sql2);
	$cnt= $row["count(*)"];
	if($cnt > 0) $gen = True;

	if(!$gen)
	{
		xyz_per('General',$genn,$percent,$stream,$SB);
	}
	else
	{
		xyz_per('General',($genn-$phh),$percent,$stream,$SB);
		xyzp_per('General',$phh,$percent,$stream,$SB);
	}

	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='SC' AND special='PH' AND per < '$percent';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='SC' AND special='PH' AND per < '$percent' AND board='$SB';";
		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='SC' AND special='PH' AND stream = '$stream' AND per < '$percent';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='SC' AND special='PH' AND stream = '$stream' AND per < '$percent' AND board='$SB';";

		}
	}

	$sql2=mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($sql2);
	$cnt= $row["count(*)"];
	if($cnt > 0) $sc = True; 

	if(!$sc)
	{
		xyz_per('SC',$scc,$percent,$stream,$SB);
	}
	else
	{
		xyz_per('SC',($scc-$phh),$percent,$stream,$SB);
		xyzp_per('SC',$phh,$percent,$stream,$SB);
	}

	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='ST' AND special='PH' AND per < '$percent';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='ST' AND special='PH' AND per < '$percent' AND board='$SB';";
		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='ST' AND special='PH' AND stream = '$stream' AND per < '$percent';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='ST' AND special='PH' AND stream = '$stream' AND per < '$percent' AND board='$SB';";

		}
	}

	$sql2=mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($sql2);
	$cnt= $row["count(*)"];
	if($cnt > 0) $st = True;

	if(!$st)
	{
		xyz_per('ST',$stt,$percent,$stream,$SB);
	}
	else
	{
		xyz_per('ST',($stt-$phh),$percent,$stream,$SB);
		xyzp_per('ST',$phh,$percent,$stream,$SB);
	}


	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='OBC' AND special='PH' AND per < '$percent';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='OBC' AND special='PH' AND per < '$percent' AND board='$SB';";
		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$sql = "SELECT count(*) FROM form WHERE category='OBC' AND special='PH' AND stream = '$stream' AND per < '$percent';";
		}
		else
		{
			$sql = "SELECT count(*) FROM form WHERE category='OBC' AND special='PH' AND stream = '$stream' AND per < '$percent' AND board='$SB';";

		}
	}

	$sql2=mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($sql2);
	$cnt= $row["count(*)"];
	if($cnt > 0) $obc = True;

	if(!$obc)
	{
		xyz_per('OBC',$obcc,$percent,$stream,$SB);
	}
	else
	{
		xyz_per('OBC',($obcc-$phh),$percent,$stream,$SB);
		xyzp_per('OBC',$phh,$percent,$stream,$SB);

	}
}

function xyz($cat,$num,$stream,$SB)
{
	//Function returns the query consisting of the category and it's corresponding percentage array
	global $conn;
   global $seats;
	
   if(empty($seats))
   {
      if($stream == NULL || $stream == "none")
      {   
         if($SB == NULL || $SB == "none")
         {
            $sql="SELECT count(*) FROM form;";
            echo "For no board selected: <br>";
         }
         else
         {
            $sql="SELECT count(*) FROM form WHERE board='$SB';";
            echo "For board selected: ",$SB,"<br>";
         }
         echo "For No Stream selected: <br>";
      }
      elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
      {
         if($SB == NULL || $SB == "none")
         {
            $sql="SELECT count(*) FROM form WHERE stream = '$stream';";
            echo "For no board selected: <br>";
         }
         else
         {
            $sql="SELECT count(*) FROM form WHERE stream = '$stream' AND board='$SB';";
            echo "For board selected: ",$SB,"<br>";
         }
         echo "For ",$stream," stream: <br>";
      }
      
      $sql2=mysqli_query($conn,$sql);
      $row= mysqli_fetch_array($sql2);
      $cnt= $row["count(*)"];
      echo $cat,"  Percent: ",$num,"  Total rows: ",$cnt;
      $per=intval($cnt*($num/100));
      echo "  Limit calculated: ",$per,"<br>";
   }
   else
   {
      echo $cat,"  Percent: ",$num,"  Total seats: ",$seats;
      $per=intval($seats*($num/100));
      echo "  Limit calculated: ",$per,"<br>";
   }
	

	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' ORDER BY per DESC LIMIT {$per};";
		}
		else
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND board='$SB' ORDER BY per DESC LIMIT {$per};";
		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND stream = '$stream' ORDER BY per DESC LIMIT {$per};";
		}
		else
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND stream = '$stream' AND board='$SB' ORDER BY per DESC LIMIT {$per};";
		}
	}
	abc($lol);
}

function xyzp($cat,$num,$stream,$SB)
{
	//Function returns the query consitiong of three percent of the category amd it would be physical handicap 
	global $conn;
   global $seats;

   if(empty($seats))
   {
      if($stream == NULL || $stream == "none")
      {
         if($SB == NULL || $SB == "none")
         {
            $sql="SELECT count(*) FROM form;";
            echo "For no board selected: <br>";
         }
         else
         {
            $sql="SELECT count(*) FROM form WHERE board='$SB';";
            echo "For board selected: ",$SB,"<br>";
         }
         echo "For No Stream selected: <br>";
      }
      elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
      {
         if($SB == NULL || $SB == "none")
         {
            $sql="SELECT count(*) FROM form WHERE stream = '$stream';";
            echo "For no board selected: <br>";
         }
         else
         {
            $sql="SELECT count(*) FROM form WHERE stream = '$stream' AND board='$SB';";
            echo "For board selected: ",$SB,"<br>";
         }
         echo "For ",$stream," stream: <br>";
      }

      $sql2=mysqli_query($conn,$sql);
      $row= mysqli_fetch_array($sql2);
      $cnt= $row["count(*)"];
      echo $cat," PH Percent: ",$num, "Total rows: ",$cnt;
      $per=intval($cnt*($num/100));
      echo "  Limit calculated: ",$per,"<br>";
   }
	else
   {
      echo $cat," PH Percent: ",$num,"  Total seats: ",$seats;
      $per=intval($seats*($num/100));
      echo "  Limit calculated: ",$per,"<br>";
   }
	
	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND special = 'PH' ORDER BY per DESC LIMIT {$per};";
		}
		else
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND special = 'PH' AND board='$SB' ORDER BY per DESC LIMIT {$per};";
		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND stream = '$stream' AND special = 'PH' ORDER BY per DESC LIMIT {$per};";
		}
		else
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND stream = '$stream' AND special = 'PH' AND board='$SB' ORDER BY per DESC LIMIT {$per};";
		}
	}
	abc($lol);
}

function xyzp_per($cat,$num,$percent,$stream,$SB)
{
	//Function returns the query consitiong of three percent of the category amd it would be physical handicap 
	global $conn;
   global $seats;


   if(empty($seats))
   {
      if($stream == NULL || $stream == "none")
      {  
         if($SB == NULL || $SB == "none")
         {
            $sql="SELECT count(*) FROM form WHERE per < '$percent';";
            echo "For no board selected: <br>";
         }
         else
         {
            $sql="SELECT count(*) FROM form WHERE per < '$percent' AND board='$SB';";
            echo "For board selected: ",$SB,"<br>";
         }
         echo "For No Stream selected: <br>";
      }
      elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
      {
         if($SB == NULL || $SB == "none")
         {
            $sql="SELECT count(*) FROM form WHERE stream = '$stream' AND per < '$percent';";
            echo "For no board selected: <br>";
         }
         else
         {
            $sql="SELECT count(*) FROM form WHERE stream = '$stream' AND per < '$percent' AND board='$SB';";
            echo "For board selected: ",$SB,"<br>";
         }
         echo "For ",$stream," stream: <br>";
      }

      $sql2=mysqli_query($conn,$sql);
      $row= mysqli_fetch_array($sql2);
      $cnt= $row["count(*)"];
      echo $cat," PH Percent: ",$num," Total rows below ",$percent,": ",$cnt;
      $per=intval($cnt*($num/100));
      echo "  Limit calculated: ",$per,"<br>";
   }
	else
   {
      echo $cat," PH Percent: ",$num,"  Total seats: ",$seats;
      $per=intval($seats*($num/100));
      echo "  Limit calculated: ",$per,"<br>";
   }

	if($stream == NULL || $stream == "none")
	{
		if($SB == NULL || $SB == "none")
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND special = 'PH' AND per < '$percent' ORDER BY per DESC LIMIT {$per};";
		}
		else
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND special = 'PH' AND per < '$percent' AND board='$SB' ORDER BY per DESC LIMIT {$per};";
		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{
		if($SB == NULL || $SB == "none")
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND stream = '$stream' ORDER BY per DESC LIMIT {$per};";
		}
		else
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND stream = '$stream' AND board ='$SB' ORDER BY per DESC LIMIT {$per};";
		}
	}
	abc($lol);
}

function xyz_per($cat,$num,$percent,$stream,$SB)
{
	//Function returns the query consisting of the category and it's corresponding percentage array
	global $conn;
   global $seats;

   if(empty($seats))
   {
   if($stream == NULL || $stream == "none")
   {
         if($SB == NULL || $SB == "none")
         {
            $sql="SELECT count(*) FROM form WHERE per < '$percent';";
            echo "For no board selected: <br>";
         }
         else
         {
            $sql="SELECT count(*) FROM form WHERE per < '$percent' AND board='$SB';";
            echo "For board selected: ",$SB,"<br>";
         }
         echo "For No Stream selected: <br>";
      }
      elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
      {
         if($SB == NULL || $SB == "none")
         {
            $sql="SELECT count(*) FROM form WHERE stream = '$stream' AND per < '$percent';";
            echo "For no board selected: <br>";
         }
         else
         {
            $sql="SELECT count(*) FROM form WHERE stream = '$stream' AND per < '$percent' AND board='$SB';";
            echo "For board selected: ",$SB,"<br>";
         }
         echo "For ",$stream," stream: <br>";
      }

      $sql2=mysqli_query($conn,$sql);
      $row= mysqli_fetch_array($sql2);
      $cnt= $row["count(*)"];
      echo $cat,"  Percent: ",$num,"  Total rows below ",$percent,": ",$cnt;
      $per=intval($cnt*($num/100));
      echo "  Limit calculated: ",$per,"<br>";
   }
	else
   {
      echo $cat,"  Percent: ",$num,"  Total rows below ",$percent,"  Total seats: ",$seats;
      $per=intval($seats*($num/100));
      echo "  Limit calculated: ",$per,"<br>";
   }

	if($stream == NULL || $stream == "none")
	{	
		if($SB == NULL || $SB == "none")
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND per < '$percent' ORDER BY per DESC LIMIT {$per};";
		}
		else
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND per < '$percent' AND board='$SB' ORDER BY per DESC LIMIT {$per};";
		}
	}
	elseif($stream == "Science" || $stream == "Commerce" || $stream == "Arts")
	{	
		if($SB == NULL || $SB == "none")
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND per < '$percent' AND stream = '$stream' ORDER BY per DESC LIMIT {$per};";
		}
		else
		{
			$lol = "SELECT * FROM form WHERE category = '$cat' AND per < '$percent' AND stream = '$stream' AND board='$SB' ORDER BY per DESC LIMIT {$per};";
		}
	}

	abc($lol);
}

function abc($x)
{
	//Function for printing the query
	global $conn;
	$que1=mysqli_query($conn,$x);
	while($row= mysqli_fetch_array($que1))
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
	      echo $row["special"];
	    print"</td><td>";
	      echo $row["category"];
	   print"</td><td>";
	      echo $row["board"];
	   print"</td><td>";
	   	  echo $row["per"];
	   print"</td><td>";
	   	  echo $row["En"];		
	   print"</td></tr>";


	}

}

?>
</table>
</div>
<script type="text/javascript">
	function printContent(el){
	var restorepage=document.body.innerHTML;
	var printcontent=document.getElementById(el).innerHTML;
	document.body.innerHTML=printcontent;
	window.print();
	document.body.innerHTML=restorepage;}
</script>
</body>
</html>