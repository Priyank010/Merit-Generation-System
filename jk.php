
<html>
<head>
<title>
GLS Merit Site
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<style>
* {box-sizing: border-box}

body,html { 
height: 100%;
margin: 0;
font-family: "Lato" , sans-serif;}

.error {color: #FF0000;}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:#E3E3E3 ;
    color: black;
    text-align: center;
}
 .tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
} 

.tablink:hover {
    background-color: #777;
}

.tabcontent {
 animation: fadeEffect 1s;
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
}
@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
.box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }

#Home/Login {background-color:orange;}
#Registration {background-color:white;}
#Contact us {background-color: red;}
#About us{background-color:green;}




input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 3% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 70%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.error {color: #FF0000;}
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<?php
$Err="*Email id is wrong";
$Err2="*Password is wrong";
error_reporting(0);
?>
<body>
<div style="background-color:E3E3E3"> 
<header>
<table>
<tr>
<td><Left><img src="GLSlogo.jpg" height="150" width="300"></left></td>
<td><font color="3C4694"><h1>&nbsp;&nbsp;&nbsp;Faculty of Computer Applications and Information Technology</h1></font></td>
</tr>
</table>
</header>
<button class="tablink" onclick="openPage('Home/Login', this, 'orange')"id="defaultOpen">Home/Login</button>
<button class="tablink" onclick="openPage('Registration', this, '3C4694')">Registration</button>
<button class="tablink" onclick="openPage('Contact us', this, 'red')">Contact us</button>
<button class="tablink" onclick="openPage('About us', this, 'green')">About us</button>
</div>
<div id="Home/Login" class="tabcontent">
  <!--<h3>Home/Login</h3>
  <left>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</left>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="lol.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="email"><b>Email Id</b></label>
      <input type="text" placeholder="Enter Username" name="email" id="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>

       
<button type="submit" name="submit" value="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>-->
<table align="center">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <tr>
      <td>Enter your Email-Id  :</td>
      <td><input type="text" name="email"></td><br>
      <td><span class="error"><?php echo $Err;?></span></td>
    </tr>
    <tr>
      <td>Enter your Password :</td>
      <td><input type="password" name="password"></td>
      <td><span class="error"><?php echo $Err2;?></span></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit"></td>
    </tr>
</form>
</table>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</table>
<?php
$dbhost='localhost';
$dbuser='root';
$emailid=$_POST["email"];
$pass=$_POST["password"];
$conn=mysqli_connect($dbhost,$dbuser);
error_reporting(0);
mysqli_select_db($conn,'go');
    if(isset($_POST['submit']))
    {
    $cnt="SELECT * FROM registration WHERE email = '$emailid' AND password = '$pass';";
    //$cnt1="SELECT * FROM registration WHERE password='$pass'";
    $result = mysqli_query($conn,$cnt);
    if(mysqli_num_rows($result)>0)
    {
      echo "<script type='text/javascript'>window.location.href = 'gr.php';</script>";
     }
    else
    {
      echo "<span class='error'><?php echo $Err;?>";
    }
  }
  else
  {
     echo "<span class='error'><?php echo $Err;?>";
  }
?>
<br>
<br>
</form>
</center>

<hr size="3">
<br>
<hr size="3">
</div>
<div id="Contact us" class="tabcontent">
  <p><h1><u>Contact Us</u></h1>
<b>ADDRESS:</b><br>GLS University,<br>
Faculty of Computer Applications and Information Technology,<br>
Ellis bridge,<br>
Ahmedabad - 380006<br>
<b>Email:</b> <br> glsbca@glsuniversity.ac.in, info@glsica.org<br>
<b>Phone :</b> <br>+91-79- 26447638</p>
<b>Map :</b><p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.94302482383!2d72.55652151491931!3d23.025864084951408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84fa81484365%3A0x891c18d62c21ae49!2sGLS+Institute+of+Commerce!5e0!3m2!1sen!2sin!4v1545539360549" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>
</div>

<div id="About us" class="tabcontent">
  <h3>About us</h3>
  <p>
<h1>General Information</h1>
This institute is housed in a spacious building having modern interiors that pleases the visitors as well as students.<br> It has well equipped computer laboratories, comfortable classrooms, separate faculty rooms, seminar-cum-conference room for placement activities and other amenities.<br> The library is also housed in the same premises for easy access by the students.<br> The serene and congenial environment encourages the students to stay at the campus longer for preparation of assignments, laboratory work and further reading in the library.<br>
<br>
<ul style="list-style-type:circle">
<b><i>Vision:</i></b>
<li>To provide the best possible education and values to young students to become responsible citizens, to serve humanity and to enhance their quality of life.</li>
<li>To promote academic excellence by maintaining high teaching standards.</li>
<li>To develop various qualities in the student.</li>
<li>To develop responsible citizens to meet the challenges of the society.</li>
<b><i>Mission:</i></b>
<li>To inculcate and inspire students to take up higher studies and research.</li>
<li>To impart high quality education by providing the ambience needed for developing requisite skill for excellence in education and industry.</li>
<li>To impart holistic quality education to students, and empower them with knowledge, skill and competence and make them self-reliant, enlightened and socially committed citizens of the country.</li>
<b><i>Objectives:</i></b>
<li>To promote academic excellence by providing quality education in an intellectually stimulating environment.</li>
<li>To equip the students with sound knowledge and skill set, so that they are able to negotiate the complex, diverse and uncertain demands of a constantly changing society.</li>
<li>To inculcate sense of discipline, community service and social responsibility amongst the students.</li>
</ul>
</p>
</div>
<?php
$dbhost='localhost';
$dbuser='root';
$conn=mysqli_connect($dbhost,$dbuser);


/*if(!$conn){
  echo "could not connect";
}
else{
  echo "connected sucessfully";
}*/
/*$db="CREATE DATABASE go;";

if(mysqli_query($conn,$db)){
  echo "database created sucessfully";
  
}
else{
  echo "database not created";
}*/
error_reporting(0);
mysqli_select_db($conn,'go');
$first_name= $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$email= $_POST["email"];
$password= $_POST["password"];
$address= $_POST["address"];
$mobile_no= $_POST["mobile_no"];

$cmd1="INSERT INTO registration VALUES('$first_name', '$last_name', '$gender', '$password', '$email','$address', '$mobile_no');";
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
  echo "$message";
  //echo "<script type='text/javascript'>window.location.href = 'number.php';</script>";
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
 }

?>

 <div id="Registration" class="tabcontent">
   <br />
   <h2 align="center">Registration Form For GLS UNIVERSITY</h2><br />
   <?php echo $message; ?>
   <form method="post" id="register_form" action="jk.php">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Registration Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Contact Details</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <div class="panel-heading">Registration Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter Email Address</label>
         <input type="text" name="email" id="email" class="form-control" />
         <span id="error_email" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Password</label>
         <input type="password" name="password" id="password" class="form-control" />
         <span id="error_password" class="text-danger"></span>
        </div>
        <br />
         <div class="form-group">
         <label>Select Course</label>
       <select>
<option value= "COURSES">Courses</option>
<option value= "BCA">BCA</option>
<option value= "MCA">MCA</option>
<option value= "MscIt">MscIt</option>
<option value= "PGDCA">PGDCA</option>
<option value= "BSCIT">BSCIT</option>
</select>
        </div>
        <br>
        <div align="center">
         <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Personal Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter First Name</label>
         <input type="text" name="first_name" id="first_name" class="form-control" />
         <span id="error_first_name" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Last Name</label>
         <input type="text" name="last_name" id="last_name" class="form-control" />
         <span id="error_last_name" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="male" checked> Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="female"> Female
         </label>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Contact Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter Address</label>
         <textarea name="address" id="address" class="form-control"></textarea>
         <span id="error_address" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
         <span id="error_mobile_no" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
        </div>
        <br />
       </div>
      </div>
     </div>
    </div>
   
  </div>


<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
document.getElementById("defaultOpen").click();

$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
  
  var error_email = '';
  var error_password = '';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }
  
  if($.trim($('#password').val()).length == 0)
  {
   error_password = 'Password is required';
   $('#error_password').text(error_password);
   $('#password').addClass('has-error');
  }
  else
  {
   error_password = '';
   $('#error_password').text(error_password);
   $('#password').removeClass('has-error');
  }

  if(error_email != '' || error_password != '')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 
 $('#btn_personal_details').click(function(){
  var error_first_name = '';
  var error_last_name = '';
  
  if($.trim($('#first_name').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').removeClass('has-error');
  }
  
  if($.trim($('#last_name').val()).length == 0)
  {
   error_last_name = 'Last Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').addClass('has-error');
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').removeClass('has-error');
  }

  if(error_first_name != '' || error_last_name != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
 $('#btn_contact_details').click(function(){
  var error_address = '';
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  if($.trim($('#address').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address').text(error_address);
   $('#address').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address').text(error_address);
   $('#address').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }
  if(error_address != '' || error_mobile_no != '')
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 
});
</script>
</div>
</body>

<center>&copy;FCAIT, GLS University. All rights reserved.<br>
Designed and Developed by Dishan,Priyank,Drashti(GLS BCA)<br>
<br>
</html>