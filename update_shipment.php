<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04CAFF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #4542E5;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;
}
h1 {text-align: center;}


* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


</style>
<?php
include("db_connect.php");
error_reporting(0);
$id = $_GET['id'];
$sname = $_GET['sname'];
$saddress = $_GET['saddress'];
$semail = $_GET['semail'];
$scontact = $_GET['scontact'];
$rname = $_GET['rname'];
$raddress = $_GET['raddress'];
$remail = $_GET['remail'];
$rcontact = $_GET['rcontact'];


if(count($_POST)>0) {

mysqli_query($conn,"UPDATE shipment set id='" . $_POST['id'] . "', sname='" . $_POST['sname'] . "', saddress='" . $_POST['saddress'] . "', semail='" . $_POST['semail'] . "', scontact='" . $_POST['scontact'] . "',
rname='" . $_POST['rname'] . "', raddress='" . $_POST['raddress'] . "', remail='" . $_POST['remail'] . "', rcontact='" . $_POST['rcontact'] . "' WHERE id='" . $_POST['id'] . "'");
$message ="Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM shipment WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);


?>
 <body>
<?php include 'wh_nav.php'; ?>

<h1>Update Shipment</h1>


<div>
<form action="shipment_list.php" method="POST" enctype="multipart/form-data">
 
  <h3><label for="sname">REFERENCE CODE:</label></h3>
    <input type="text" id="id" name="id" placeholder="Enter 11 character (e.g.:RS200020020)" value="<?php echo $row['id']; ?>">
  
  <div class="row">
    <div class="column" style="background-color:#aaa;">
    
    <h3><label for="Sender">SENDER INFORMATION</label></h3>
    
    <label for="sname">Full Name</label>
    <input type="text" id="sname" name="sname" placeholder="Your Full Name.." value="<?php echo $row['sname']; ?>">

    <label for="saddress">Address</label>
    <input type="text" id="saddress" name="saddress" placeholder="Your Address.." value="<?php echo $row['saddress']; ?>">

    <label for="semail">E-Mail</label>
    <input type="text" id="semail" name="semail" placeholder="Your E-Mail.." value="<?php echo $row['semail']; ?>">

    <label for="scontact">Contact</label>
    <input type="text" id="scontact" name="scontact" placeholder="Your Contact Number.." value="<?php echo $row['scontact']; ?>"><br><br><br>

</div>

    <div class="column" style="background-color:#bbb;">
    
    <h3><label for="Recepient">RECIPIENT INFORMATION</label></h3>
    
    <label for="rname">Full Name</label>
    <input type="text" id="rname" name="rname" placeholder="Your Full Name.." value="<?php echo $row['rname']; ?>">

    <label for="raddress">Address</label>
    <input type="text" id="raddress" name="raddress" placeholder="Your Address.." value="<?php echo $row['raddress']; ?>">
    
    <label for="remail">E-Mail</label>
    <input type="text" id="remail" name="remail" placeholder="Your E-Mail.." value="<?php echo $row['remail']; ?>">

    <label for="rcontact">Contact</label>
    <input type="text" id="rcontact" name="rcontact" placeholder="Your Contact Number.." value="<?php echo $row['rcontact']; ?>"><br><br><br>
</div>
</div>
    <input type="submit" value="Submit">
    <div><?php if(isset($message)) { echo $message; } ?> </div>

</div>
</form>
</body>

</html>


