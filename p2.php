
<html>
<head>
  <style>
* {box-sizing: border-box}

body,html { 
height: 100%;
margin: 0;
font-family: "Lato" , sans-serif;}

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("lol4.jpg");
  height: 2500px;
  width: 2000px;
  min-height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 1200px;
  padding: 16px;
  background-color: white;
  left: 220px;
  top: 75px;
}

/* Full-width input fields */
input[type=text], input[type=password]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  height: 500%;
  opacity: 0.9;

}

.btn:hover {
  opacity: 1;
}

.search_categories{
  font-size: 13px;
  padding: 10px 8px 10px 14px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 6px;
  overflow: hidden;
  position: relative;
}

.search_categories .select{
  width: 120%;
  background:url('arrow.png') no-repeat;
  background-position:80% center;
}

.search_categories .select select{
  background: transparent;
  line-height: 1;
  border: 0;
  padding: 0;
  border-radius: 0;
  width: 120%;
  position: relative;
  z-index: 10;
  font-size: 1em;
}

.contain {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.contain input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.contain:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.contain input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.contain input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.contain .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 0px solid #ccc;
  border-radius: 4px;
  background-color: #f1f1f1;
  resize: none;
}

select {
  width: 150px;
  height: 35px;
  padding: 1px 2px;
  box-sizing: border-box;
  border: 0px solid #ccc;
  border-radius: 4px;
  background-color: #f1f1f1;
  font-size: 15px;
  resize: none;

}


.container2 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark2 {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark2 {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container2 input:checked ~ .checkmark2 {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark2:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container2 input:checked ~ .checkmark2:after {
  display: block;
}

/* Style the checkmark/indicator */
.container2 .checkmark2:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.error {color: #FF0000;}

<?php
$stdlname = $stdfname = $stdpname = $fsname = $ffname = $fmname = $msname = $mfname = $mmname = $parent_occupation = $annual_income = $panp = $pans = $l_address = $p_address = $phno = $mbno_s = $mbno_p = $mbno_g = $email_s = $email_p = $email_g = $dob_d = $dob_m = $dob_y = $religion = $minority = $caste = $blood_group = $height = $weight = $category = $gender = $aadhar = $py = $board = $per = $Er = $stream = "";

$stdlnameer = $stdfnameer = $stdpnameer = $fsnameer = $ffnameer = $fmnameer = $msnameer = $mfnameer = $mmnameer = $parent_occupationer = $annual_incomeer = $panper = $panser = $l_addresser = $p_addresser = $phnoer = $mbno_ser = $mbno_per = $mbno_ger = $email_ser = $email_per= $email_ger = $dob_der = $dob_mer = $dob_yer = $religioner = $minorityer = $casteer = $blood_grouper = $heighter = $weighter = $categoryer = $genderer = $aadharer = $pyer = $boarder = $perer = $Erer = $streamer = "";


//student
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["stdlname"])) {
    $stdlnameer = "*Name is required";
  } else {
    $stdlname = test_input($_POST["stdlname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$stdlname)) {
      $stdlnameer = "*Invalid Field";
    }
  }

  
  if (empty($_POST["stdfname"])) {
    $stdfnameer = "*Name is required";
  } else {
    $stdfname = test_input($_POST["stdfname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$stdfname)) {
      $stdfnameer = "*Invalid Field";
    }
  }


  if (empty($_POST["stdpname"])) {
    $stdpnameer = "*Name is required";
  } else {
    $stdpname = test_input($_POST["stdpname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$stdpname)) {
      $stdpnameer = "*Invalid Field";
    }
  }

    //father
  if (empty($_POST["fsname"])) {
    $fsnameer = "*Name is required";
  } else {
    $fsname = test_input($_POST["fsname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fsname)) {
      $fsnameer = "*Invalid Field";
    }
  }

    
  if (empty($_POST["ffname"])) {
    $ffnameer = "*Name is required";
  } else {
    $ffname = test_input($_POST["ffname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$ffname)) {
      $ffnameer = "*Invalid Field";
    }
  }

    
  if (empty($_POST["fmname"])) {
    $fmnameer = "*Name is required";
  } else {
    $fmname = test_input($_POST["fmname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fmname)) {
      $fmnameer = "*Invalid Field";
    }
  }

  //mother
  if (empty($_POST["msname"])) {
    $msnameer = "*Name is required";
  } else {
    $msname = test_input($_POST["msname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$msname)) {
      $msnameer = "*Invalid Field";
    }
  }

  if (empty($_POST["mfname"])) {
    $mfnameer = "*Name is required";
  } else {
    $fsname = test_input($_POST["mfname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$mfname)) {
      $mfnameer = "*Invalid Field";
    }
  }

  if (empty($_POST["mmname"])) {
    $mmnameer = "*Name is required";
  } else {
    $mmname = test_input($_POST["mmname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$mmname)) {
      $mmnameer = "*Invalid Field";
    }
  }

  //Parents occupation
   if (empty($_POST["parent_occupation"])) {
    $parent_occupationer = "*Parent's Occupation is required";
  } else {
    $parent_occupation = test_input($_POST["parent_occupation"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$parent_occupation)) {
      $parent_occupationer = "*Invalid Field";
    }
  }

  //annual_income
   if (empty($_POST["annual_income"])) {
    $annual_incomeer = "*Income is required";
  } else {
    $parent_occupation = test_input($_POST["annual_income"]);
    if (!preg_match('/^[0-9]*$/',$annual_income)) {
      $annual_incomeer = "*Invalid Field";
    }
  }

  //panp
  if (empty($_POST["panp"])) {
    $panper = "*Pan number is required";
  } else {
    $panp = test_input($_POST["panp"]);
    if (!preg_match('/^[\w].{10}$/',$panp)) {
      $panper = "*Invalid Field";
    }
  }

  //pans

   if (empty($_POST["pans"])) {
    $panser = "*Pan number is required";
  } else {
    $pans = test_input($_POST["pans"]);
    if (!preg_match('/^[\w].{10}$/',$pans)) {
      $panser = "*Invalid Field";
    }
  }

  //l_address
    if (empty($_POST["l_address"])) {
    $l_addresser = "*Address is required";
  } else {
    $l_address = test_input($_POST["l_address"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$l_address)) {
      $l_addresser = "*Invalid Field";
    }
  }
  
  //p_address
    if (empty($_POST["p_address"])) {
    $p_addresser = "*Address is required";
  } else {
    $p_address = test_input($_POST["p_address"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$p_address)) {
      $p_addresser = "*Invalid Field";
    }
  }

  //phno
  if (empty($_POST["phno"])) {
    $phnoer = "*Phone number is required";
  } else {
    $phno = test_input($_POST["phno"]);
    if (!preg_match('/^[\d].{10}$/',$phno)) {
      $phnoer = "*Invalid Field";
    }
  }

  //mbno_s
  if (empty($_POST["mbno_s"])) {
    $mbno_ser = "*mobile number is required";
  } else {
    $mbno_s = test_input($_POST["mbno_s"]);
    if (!preg_match('/^[\d].{10}$/',$mbno_s)) {
      $mbno_ser = "*Invalid Field";
    }
  }

  //mbno_p
  if (empty($_POST["mbno_p"])) {
    $mbno_per = "*mobile number is required";
  } else {
    $mbno_p = test_input($_POST["mbno_p"]);
    if (!preg_match('/^[\d].{10}$/',$mbno_p)) {
      $mbno_per = "*Invalid Field";
    }
  }

  //mbno_g
  if (empty($_POST["mbno_g"])) {
    $mbno_ger = "*mobile number is required";
  } else {
    $mbno_g = test_input($_POST["mbno_g"]);
    if (!preg_match('/^[\d].{10}$/',$mbno_g)) {
      $mbno_ger = "*Invalid Field";
    }
  }


  //email_s
    if (empty($_POST["email_s"])) {
    $email_ser = "*Email is required";
  } else {
    $email_s = test_input($_POST["email_s"]);
    if (!filter_var($email_s, FILTER_VALIDATE_EMAIL)) {
      $email_ser = "*Invalid email format";
    }
  }

    //email_p
    if (empty($_POST["email_p"])) {
    $email_per = "*Email is required";
  } else {
    $email_p = test_input($_POST["email_p"]);
    if (!filter_var($email_p, FILTER_VALIDATE_EMAIL)) {
      $email_per = "*Invalid email format";
    }
  }

    //email_g
    if (empty($_POST["email_g"])) {
    $email_ger = "*Email is required";
  } else {
    $email_g = test_input($_POST["email_g"]);
    if (!filter_var($email_g, FILTER_VALIDATE_EMAIL)) {
      $email_ger = "*Invalid email format";
    }
  }

  //religion
    if (empty($_POST["religion"])) {
    $religioner = "*Religion is required";
  } else {
    $religion = test_input($_POST["religion"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$religion)) {
      $religioner = "*Only letters and white space allowed";
    }
  } 
   //minority
   if (empty($_POST["minority"])) {
    $minorityer = "*Gender is required";
  } else {
    $minority = test_input($_POST["minority"]);
  }
  //caste
     if (empty($_POST["caste"])) {
    $casteer = "*Caste is required";
  } else {
    $caste = test_input($_POST["caste"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$caste)) {
      $casteer = "*Invalid Field";
    }
  }

  //blood_group
     if (empty($_POST["blood_group"])) {
    $blood_grouper = "*Blood Group is required";
  } else {
    $blood_group = test_input($_POST["blood_group"]);
    if (!preg_match("/^[\w]*$/",$blood_group)) {
      $blood_grouper = "*Invalid Field";
    }
  }

  //height
  if (empty($_POST["height"])) {
    $heighter = "*Height is required";
  } else {
    $height = test_input($_POST["height"]);
    if (!preg_match('/^[\d]*$/',$height)) {
      $heighter = "*Invalid Field";
    }
  }

   //weight
  if (empty($_POST["weight"])) {
    $weighter = "*Weight is required";
  } else {
    $weight = test_input($_POST["weight"]);
    if (!preg_match('/^[\d]*$/',$weight)) {
      $weighter = "*Invalid Field";
    }
  }

  //category

  if (empty($_POST["cat2"])) {
    $categoryer = "*Gender is required";
  } else {
    $category = test_input($_POST["cat2"]);
  }

  //gender

  if (empty($_POST["cat2"])) {
    $genderer = "Gender is required";
  } else {
    $gender = test_input($_POST["cat2"]);
  }

  //aadhar

   if (empty($_POST["aadhar"])) {
    $aadharer = "Aadhar is required";
  } else {
    $aadhar = test_input($_POST["aadhar"]);
    if (!preg_match('/^[\w].{10}$/',$aadhar)) {
      $aadharer = "*Invalid Field";
    }
  }

  //py
  if (empty($_POST["py"])) {
    $pyer = "*Passing year is required";
  } else {
    $py = test_input($_POST["py"]);
    if (!preg_match('/^[\d].{4}$/',$py)) {
      $pyer = "*Invalid Field";
    }
  }

  //board
  if (empty($_POST["board"])) {
    $boarder = "*Passing year is required";
  } else {
    $board = test_input($_POST["board"]);
    if (!preg_match('/^[\d].{4}$/',$board)) {
      $boarder = "*Invalid Field";
    }
  }

   //per
  if (empty($_POST["per"])) {
    $perer = "*Passing year is required";
  } else {
    $per = test_input($_POST["per"]);
    if (filter_var($var, FILTER_VALIDATE_FLOAT)) {
      $perer = "*Invalid Field";
    }
    elseif ($per < "40")
    {
      $perer = "*You are not eligible";
    }
  }

   //Er
  if (empty($_POST["Er"])) {
    $Erer = "*Passing year is required";
  } else {
    $Er = test_input($_POST["Er"]);
    if (!preg_match('/^[\d].{15}$/',$Er)) {
      $Erer = "*Invalid Field";
    }
  }

   //stream
   if (empty($_POST["stream"])) {
    $streamer = "*Address is required";
  } else {
    $stream = test_input($_POST["stream"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$stream)) {
      $streamer = "*Invalid Field";
    }
  }

   if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "*Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</style>

</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body bgcolor="" >
  <div style="background-color:E3E3E3">
  
    <table border="0px" >
      <tr>
  <td><img src="GLSlogo.jpg" height="150" width="300" style="float:left"></td>
  <td><font color="3C4694"><h1 align="center">&nbsp;&nbsp;&nbsp;Faculty of Computer Applications and Information Technology</h1></font></td>
</tr>
</table>

</div>
<div class="bg-img">

<form method="post" class="container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
<table border="0px" align="center">
<tr>
<h1><center>BCA ADMISSION FORM</center></h1>
</tr>
<tr>
<td><h3>Name:</h3></td>
<td><input type="text" name="stdlname" id="stdlname" placeholder="Enter your surname" style="width:280px;">
<span class="error"><?php echo $stdlnameer;?></span></td>
<td><input type="text" name="stdfname" id="stdfname" placeholder="Enter your name" style="width:280px;">
<span class="error"><?php echo $stdfnameer;?></span></td>
<td><input type="text" name="stdpname" id="stdpname" placeholder="Enter your middle name" style="width:280px;">
<span class="error"><?php echo $stdpnameer;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>Fathers's name:</h3></td> <td><input type="text" name="fsname" id="f1" placeholder="Enter your surname" style="width:280px;">
<span class="error"><?php echo $fsnameer;?></span></td>
<td><input type="text" name="ffname" id="f2" placeholder="Enter father name" style="width:280px;">
<span class="error"><?php echo $ffnameer;?></span></td>
<td><input type="text" name="fmname" id="f3" placeholder="Enter middle name" style="width:280px;">
<span class="error"><?php echo $fmnameer;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>Mother's name:</h3></td> <td><input type="text" name="msname" id="m1" placeholder="Enter your surname" style="width:280px;">
<span class="error"><?php echo $msnameer;?></span></td>
<td><input type="text" name="mfname" id="m2" placeholder="Enter mother name" style="width:280px;">
<span class="error"><?php echo $mfnameer;?></span></td>
<td><input type="text" name="mmname" id="m3" placeholder="Enter middle name" style="width:280px;">
<span class="error"><?php echo $mmnameer;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>Parent's Occupation:</h3></td> <td><input type="text" name="parent_occupation" id="p1" placeholder="Enter occupation" style="width:280px;">
<span class="error"><?php echo $parent_occupationer;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>Annual Income Rs:</h3> </td><td><input type="text" name="annual_income" id="ai" placeholder="Yearly Income" style="width:280px;">
<span class="error"><?php echo $annual_incomeer;?></span></td></tr><td></td>
<tr></tr>
<tr>
<td><h3>PAN NO(Parents):</h3></td><td> <input type="text" name="panp" id="pan" placeholder="Enter your parents pan-no" style="width:280px;">
<span class="error"><?php echo $panper;?></span></td>
<td><h3><center>PAN NO(Students):</center></h3></td><td><input type="text" name="pans" id="pan1" placeholder="Enter your pan-no" style="width:280px;"><span class="error"><?php echo $panser;?></span></td>
</tr>
<tr></tr>
<tr>
<td><h3>Local Address:</h3></td><td><textarea name="l_address" rows="5" cols="20" style="width:280px;"></textarea>
<span class="error"><?php echo $l_addresser;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>Permanent Address:</h3></td><td><textarea name="p_address" rows="5" cols="20" style="width:280px;"></textarea>
<span class="error"><?php echo $p_addresser;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>Phone No (R):</h3></td><td><input type="text" name="phno" id="phn" placeholder="STD Code" style="width:280px;">
<span class="error"><?php echo $phnoer;?></span></td>
<td><h3><center>Mobile(student):</center></h3></td><td><input type="text" name="mbno_s" id="phn1" placeholder="Enter your mobile number" style="width:280px;"><span class="error"><?php echo $mbno_ser;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>Mobile(parent):</h3></td><td><input type="text" name="mbno_p" id="phn2" placeholder="Enter your Parent's number" style="width:280px;">
<span class="error"><?php echo $mbno_per;?></span></td>
<td><h3><center>Mobile(guardian):</center></h3></td><td><input type="text" name="mbno_g" id="phn3" placeholder="Enter your Guardian's number" style="width:280px;"><span class="error"><?php echo $mbno_ger;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>E-MAIL:</h3></td><td><input type="text" name="email_s" id="email" placeholder="Student's email" style="width:280px;">
<span class="error"><?php echo $email_ser;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>E-MAIL:</h3></td><td><input type="text" name="email_p" id="email1" placeholder="Parents email address" style="width:280px;">
<span class="error"><?php echo $email_per;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>E-MAIL:</h3></td><td><input type="text" name="email_g" id="email2" placeholder="Guardian email address" style="width:280px;">
<span class="error"><?php echo $email_ger;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>Birth-Date:</h3></td>
<td><select name="dob_d"  required>
<option value= "select date">Select date</option>
<option value= "1">1</option>
<option value= "2">2</option>
<option value= "3">3</option>
<option value= "4">4</option>
<option value= "5">5</option>
<option value= "6">6</option>
<option value= "7">7</option>
<option value= "8">8</option>
<option value= "9">9</option>
<option value= "10">10</option>
<option value= "11">11</option>
<option value= "12">12</option>
<option value= "13">13</option>
<option value= "14">14</option>
<option value= "15">15</option>
<option value= "16">16</option>
<option value= "17">17</option>
<option value= "18">18</option>
<option value= "19">19</option>
<option value= "20">20</option>
<option value= "21">21</option>
<option value= "22">22</option>
<option value= "23">23</option>
<option value= "24">24</option>
<option value= "25">25</option>
<option value= "26">26</option>
<option value= "27">27</option>
<option value= "28">28</option>
<option value= "29">29</option>
<option value= "30">30</option>
<option value= "31">31</option>
</select>
</td>
<td><select name="dob_m" required>
<option value= "select month">Select month</option>
<option value= "january">january</option>
<option value= "febuary">febuary</option>
<option value= "march">march</option>
<option value= "april">april</option>
<option value= "may">may</option>
<option value= "june">june</option>
<option value= "july">july</option>
<option value= "august">august</option>
<option value= "sep">september</option>
<option value= "oct">october</option>
<option value= "nov">november</option>
<option value= "dec">december</option>
</select>
<td><select name="dob_y" id="dob_y" required>
<option value= "select year">Select year</option>
<option value= "1990">1990</option>
<option value= "1991">1991</option>
<option value= "1992">1992</option>
<option value= "1993">1993</option>
<option value= "1994">1994</option>
<option value= "1995">1995</option>
<option value= "1996">1996</option>
<option value= "1997">1997</option>
<option value= "1998">1998</option>
<option value= "1999">1999</option>
<option value= "2000">2000</option>
<option value= "2001">2001</option>
<option value= "2002">2002</option>
<option value= "2003">2003</option>
<option value= "2004">2004</option>
<option value= "2005">2005</option>
<option value= "2006">2006</option>
<option value= "2007">2007</option>
<option value= "2008">2008</option>
<option value= "2009">2009</option>
<option value= "2010">2010</option>
<option value= "2011">2011</option>
<option value= "2012">2012</option>
<option value= "2013">2013</option>
<option value= "2014">2014</option>
<option value= "2015">2015</option>
<option value= "2016">2016</option>
<option value= "2017">2017</option>
<option value= "2018">2018</option>
<option value= "2019">2019</option>
<option value= "2020">2020</option>
<option value= "2021">2021</option>
<option value= "2022">2022</option>
<option value= "2023">2023</option>
<option value= "2024">2024</option>
<option value= "2025">2025</option>
</select>
</tr>
<tr></tr>
<tr>
<td><h3>Religion:</h3></td><td><input type="text" name="religion" id="reli" placeholder="Enter your religion"  style="width:280px;">
<span class="error"><?php echo $religioner;?></span></td>
<td> 
<h3><center>Minority:</center></h3></td><td><label class="container2"><input type="checkbox" name="minority" id="minor" placeholder="Enter if you are" style="width:280px;"><span class="checkmark2"></span></td>
<td>
</tr>
<tr></tr>
<tr>
<td><h3>Caste:</h3></td><td><input type="text" name="caste" id="caste" placeholder="Enter your caste" style="width:280px;">
<span class="error"><?php echo $casteer;?></span></td>
<td>
<h3><center>Blood Group:</center></h3></td><td><input type="text" name="blood_group" id="blood" placeholder="Enter your blood group">
<span class="error"><?php echo $blood_grouper;?></span></td><td></td>
</tr>
<tr></tr>
<tr>
<td><h3>Height(in cms):</h3></td><td><input type="text" name="height" id="height" placeholder="Your height">
<span class="error"><?php echo $heighter;?></span></td>
<td>
<h3><center>Weight(in kg):</center></h3></td><td><input type="text" name="weight" id="weight" placeholder="Enter your weight in kg">
<span class="error"><?php echo $weighter;?></span></td>
</tr>
<tr></tr>
<tr>
<td><h3>Category:</h3></td>
<td><label class="contain">SC<input type="radio" name="cat2" value="SC" checked="checked"><span class="checkmark"></span></label></td>
<td><label class="contain">ST<input type="radio" name="cat2" value="ST" checked="checked"><span class="checkmark"></span></label></td>
<td><label class="contain">SEBC<input type="radio" name="cat2" value="SEBC" checked="checked"><span class="checkmark"></span></label></td>
<td><label class="contain">OBC<input type="radio" name="cat2" value="OBC" checked="checked"><span class="checkmark"></span></label></td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td></td>
<td><label class="contain">GENERAL<input type="radio" name="cat2" value="General" checked="checked"><span class="checkmark"></span></label></td>
<h3><center></center></h3></td><td><label class="container2">PH<input type="checkbox" name="PH" id="PH" value="PH" placeholder="Enter if you are" style="width:280px;"><span class="checkmark2"></span></label></td>
<h3><center></center></h3></td><td><label class="container2">Sports Quota<input type="checkbox" name="SQ" id="SQ" value="SQ" placeholder="Enter if you are" style="width:280px;"><span class="checkmark2"></span></label></td>

<tr></tr>
<tr></tr>
</tr>
<tr>
<td><h3>Gender:</h3></td>
<td><label class="contain">Male<input type="radio" name="cat1" value="Male" checked="checked"><span class="checkmark"></span></label></td>
<td><label class="contain">Female<input type="radio" name="cat1" value="Female" checked="checked"><span class="checkmark"></span></label></td>
<td><label class="contain">Other<input type="radio" name="cat1" value="Other" checked="checked"><span class="checkmark"></span></label></td>
<tr></tr>
<tr>
<td><h3>Adhar No:</h3></td><td><input type="text" name="aadhar" id="aadhar" placeholder="Enter aadhar number" style="width:280px;">
<span class="error"><?php echo $aadharer;?></span></td><td></td>
</tr>
<tr>
<td><h3>Passing Year:</h3></td><td><input type="text" name="py" id="py" placeholder="Enter Passing year" style="width:280px;">
<span class="error"><?php echo $pyer;?></span></td><td></td>
</tr>
<tr>
<td><h3>Board:</h3></td><td><input type="text" name="board" id="board" placeholder="Enter Board" style="width:280px;">
<span class="error"><?php echo $boarder;?></span></td><td></td>
</tr>
<tr><td><h3>Select Stream:</h3></td><td><select name="stream" required>
<option value= "Select Stream">Select Course</option>
<option value= "Science">Science</option>
<option value= "Commerce">Commerce</option>
<option value= "Arts">Arts</option></td></tr>
</select>
<tr></tr>
<tr><td><h3>Upload Your Image Here: </h3></td><td><input type="file" name="uploadfile" style="width:280px;"></td><td></td></tr>
<tr></tr>
<tr></tr>
<tr><td><h3>Upload Your 10th Marksheet Here: </h3></td><td><input type="file" name="10file" style="width:280px;"></td><td></td></tr>
<tr></tr>
<tr></tr>
<tr><td><h3>Upload Your 12th Marksheet Here: </h3></td><td><input type="file" name="12file" style="width:280px;"></td><td></td></tr>
<tr></tr>
<tr></tr>
<tr><td><h3>Upload Your Caste Certificate Here: </h3></td><td><input type="file" name="castefile" style="width:280px;"></td><td></td></tr>
<tr></tr>
<tr></tr>
<tr><td><h3>Upload Your Attempt Certificate Here: </h3></td><td><input type="file" name="attemptfile" style="width:280px;"></td><td></td></tr>
<tr></tr>
<tr></tr>
<tr><td><h3>Upload Your Living Certificate Here: </h3></td><td><input type="file" name="LCfile" style="width:280px;"></td><td></td></tr>
<tr></tr>
<td><h3>Percentage:</h3></td><td><input type="text" name="per" id="per" placeholder="Enter your Percentage"  style="width:280px;">
<span class="error"><?php echo $perer;?></span></td>
<tr></tr>
<td><h3>Enrollment No:</h3></td><td><input type="text" name="En" id="En" placeholder="Enter your Enrollment"  style="width:280px;">
<span class="error"><?php echo $Erer;?></span></td>
<tr></tr>
<tr>
<td><input type="submit" name="submit" value="submit" class="btn"></td><td></td>
<td><input type="reset" name="reset" value="reset" class="btn"></td><td></td>
</tr>
<tr></tr>
</div>
</table>
</form>
</body>
</html>
<?php
$dbhost='localhost';
$dbuser='root';

$conn=mysqli_connect($dbhost,$dbuser);

mysqli_select_db($conn,'go2');
function alert($msg) {
echo "<script type='text/javascript'>alert('$msg');</script>";}
//error_reporting(0);
$per=$_POST["per"];
if ($per<="40") {
   //alert("Your are not eligible to apply in this university");
}
else
{
if(isset($_POST['submit']))
 {

  echo "clicked";
$stdlname= $_POST['stdlname'];
$stdfname = $_POST['stdfname'];
$stdpname = $_POST['stdpname'];
$fsname= $_POST['fsname'];
$ffname= $_POST['ffname'];
$fmname= $_POST['fmname'];
$msname= $_POST['msname'];
$mfname= $_POST['mfname'];
$mmname= $_POST['mmname'];
$parent_occupation= $_POST['parent_occupation'];
$annual_income= $_POST['annual_income'];
$panp= $_POST['panp'];
$pans= $_POST['pans'];
$l_address= $_POST['l_address'];
$p_address= $_POST['p_address'];
$phno= $_POST['phno'];
$mbno_s= $_POST['mbno_s'];
$mbno_p= $_POST['mbno_p'];
$mbno_g= $_POST['mbno_g'];
$email_s= $_POST['email_s'];
$email_p= $_POST['email_p'];
$email_g= $_POST['email_g'];
$dob_d= $_POST['dob_d'];
$dob_m= $_POST['dob_m'];
$dob_y= $_POST['dob_y'];
$religion= $_POST['religion'];
$minority= $_POST['minority'];
$caste= $_POST['caste'];
$blood_group= $_POST['blood_group'];
$height= $_POST['height'];
$weight= $_POST['weight'];
$category= $_POST['cat2'];
$gender= $_POST['cat1'];
$aadhar= $_POST['aadhar'];
$py= $_POST['py'];
$board= $_POST['board'];
$spec=$_POST["PH"];
$spec2=$_POST["SQ"];

$En=$_POST["En"];
$stream=$_POST["stream"];

echo $a;
//image
$filename = $_FILES["uploadfile"]["name"];
$tmpname = $_FILES["uploadfile"]["tmp_name"];
if(!empty($tmpname))
{
$folder1 = "photos/".$filename;

move_uploaded_file($tmpname,$folder);

$sql = "INSERT into image VALUES ('$folder1')";
$data = mysqli_query($conn,$sql);
}
//10th
$filename = $_FILES["10file"]["name"];
$tmpname = $_FILES["10file"]["tmp_name"];
if(!empty($tmpname))
{
$folder2 = "10/".$filename;

move_uploaded_file($tmpname,$folder);

$sql = "INSERT into image VALUES ('$folder2')";
$data = mysqli_query($conn,$sql);
}
//12th
$filename = $_FILES["12file"]["name"];
$tmpname = $_FILES["12file"]["tmp_name"];
if(!empty($tmpname))
{
$folder3 = "12/".$filename;

move_uploaded_file($tmpname,$folder);

$sql = "INSERT into image VALUES ('$folder3')";
$data = mysqli_query($conn,$sql);
}
//caste

$filename = $_FILES["castefile"]["name"];
$tmpname = $_FILES["castefile"]["tmp_name"];
if(!empty($tmpname))
{
$folder4 = "caste/".$filename;

move_uploaded_file($tmpname,$folder);

$sql = "INSERT into image VALUES ('$folder4')";
$data = mysqli_query($conn,$sql);
}
//attempt
$filename = $_FILES["attemptfile"]["name"];
$tmpname = $_FILES["attemptfile"]["tmp_name"];
if(!empty($tmpname))
{
$folder5 = "attempt/".$filename;

move_uploaded_file($tmpname,$folder);

$sql = "INSERT into image VALUES ('$folder5')";
$data = mysqli_query($conn,$sql);
}
//LC
$filename = $_FILES["LCfile"]["name"];
$tmpname = $_FILES["LCfile"]["tmp_name"];
if(!empty($tmpname))
{

$folder6 = "LC/".$filename;

move_uploaded_file($tmpname,$folder);

$sql = "INSERT into image VALUES ('$folder6')";
$data = mysqli_query($conn,$sql);

}



$cmd1="INSERT INTO form VALUES('$stdlname','$stdfname','$stdpname','$fsname','$ffname','$fmname','$msname','$mfname','$mmname','$parent_occupation','$annual_income','$panp','$pans','$l_address','$p_address','$phno','$mbno_s','$mbno_p','$mbno_g','$email_s','$email_p','$email_g','$dob_d','$dob_m','$dob_y','$religion','$minority','$caste','$blood_group','$height','$weight','$category','$gender','$aadhar','$py','$board','$folder1','$folder2','$folder3','$folder4','$folder5','$folder6','$spec','$spec2','$per','$En','$stream');";


/*if(mysqli_query($conn,$cmd1)){
  echo "data inserted sucessfully";
  
}
else{
  echo "data  not inserted";
}*/

 $message = '';
 //$statement = $connect->prepare($cmd1);
 if(mysqli_query($conn,$cmd1))
 {
  $message = '
  <div class="alert alert-success">
  Registration Completed Successfully
  </div>
  ';
  //echo "inserted";
  echo "<script type='text/javascript'>window.location.href = 'hell.php';</script>";
  echo "$message";
   
 
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
 }
}
else
{
  echo "lol";
}
}
 /*if (isset($_POST['submit']))
    {
        echo "<script type='text/javascript'>window.location.href = 'hell.php';</script>";
        exit();
    }
*/
 ?>








