<?php
session_start();

if(isset($_POST['submitted']))
{
    include('connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['timing'];
    $sqldelete="DELETE from passenger where B_id like'%$email%' ";
    if(!mysqli_query($con,$sqldelete))
    {
            die('error delete');
    }
    else
      echo "DELETED SUCCESSFULLY";
    $sqlinsert = "INSERT INTO booking_details (Name,Email,Mobile_no,BDate) values ('$name','$email',$phone,'$date')";
    if(!mysqli_query($con,$sqlinsert))
    {
            die('error');
    }
    $_SESSION['email']=$email;
    $_SESSION['date']=$date;
    $_SESSION['time']=$time;
    echo " Record Added successfully";
}
?>
<!DOCTYPE html>
<html>
<head>

<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>
</head>
<body onload="dis();">

<div class="topnav" id="myTopnav">
  <a><font size="2">PASSENGER 1</a></font>
  <a><font size="2">PASSENGER 2</a></font>
  <a><font size="2">PASSENGER 3</a></font>
  <a><font size="2">PASSENGER 4</a></font>
  <a><font size="2">PASSENGER 5</a></font>
  <a><font size="2">PASSENGER 6</a></font>
  <a><font size="2">PASSENGER 7</a></font>
  <a><font size="2">PASSENGER 8</a></font>
  <a><font size="2">PASSENGER 9 </a></font>
  <a><font size="2">PASSENGER 10</a></font>
  <a href="pp.php"><font size="2">BOOKING DETAILS</a></font>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

  <h3 align="center">PASSENGER 1 DETAILS</h3>
  <center>
    <form onsubmit="return validation();" method="post" action="p2.php">
        <input type="hidden" name="submitted" value="true"> 
      First Name<font color="red">*</font>:<br>
      <input type="text" name="fname" id="1"><br>
      Last Name<font color="red">*</font>:<br>
      <input type="text" name="lname" id="2"><br>
      Age<font color="red">*</font>:<br>
      <input type="number" name="age" min="3" max="80" id="3"><br>
      Aadhar Card Number<font color="red">*</font>:<br>
      <input type="number" name="aadhar" id="4"><br>
      <input type="submit" name="submit" value="Submit"><br>
    </form>
  </center>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function validation()
{
  var q=document.getElementById("1").value;
  var w=document.getElementById("2").value;
  var e=document.getElementById("3").value;
  var r=document.getElementById("4").value;
  if(q=="" || w=="" || e=="" || r=="" )
  {
      alert("FILL ALL THE DETAILS");
      return false;
  }
  else
    alert("DETAILS HAVE BEEN ACCEPTED");
}
function dis()
{
  document.getElementById("9").disabled="true";
}
</script>

</body>
</html>
