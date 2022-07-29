<!DOCTYPE html>
<html>
<title>AIR CARGO MANAGEMENT SYSTEM</title>
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
  padding: 25px;
  border-style: double;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<?php
include_once 'db_connect.php';
$result = mysqli_query($conn,"SELECT * FROM shipment WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);


?>

<body>
<body>
<?php include 'ap_nav.php'; ?>

<a href="ap_ShipmentList.php"><h1>Shipment Detail</h1></a>


<div>
    <form name="" method="post" action="">
      
    
  <h3><label for="sname">REFERENCE CODE:</label></h3>
    <input type="text"  value="<?php echo $row['id']; ?>" readonly>
  
  <h3><label for="sname">DATE & TIME CREATED:</label></h3>
    <input type="text"  value="<?php echo $row['date_created']; ?>" readonly>
  
  <div class="row">
    <div class="column" style="background-color:#659EC7;">
    
    <h3><label for="Sender">SENDER INFORMATION</label></h3>
    
    <label for="sname">Full Name</label>
    <input type="text" id="sname" name="sname" value="<?php echo $row['sname']; ?>" readonly>

    <label for="saddress">Address</label>
    <input type="text" id="saddress" name="saddress" value="<?php echo $row['saddress']; ?>" readonly>

    <label for="semail">E-Mail</label>
    <input type="text" id="semail" name="semail" value="<?php echo $row['semail']; ?>" readonly>

    <label for="scontact">Contact</label>
    <input type="text" id="scontact" name="scontact" value="<?php echo $row['scontact']; ?>" readonly><br><br><br>

</div>

    <div class="column" style="background-color:#659EC7;">
    
    <h3><label for="Recepient">RECIPIENT INFORMATION</label></h3>
    
    <label for="rname">Full Name</label>
    <input type="text" id="rname" name="rname" value="<?php echo $row['rname']; ?>" readonly>

    <label for="raddress">Address</label>
    <input type="text" id="raddress" name="raddress" value="<?php echo $row['raddress']; ?>" readonly>
    
    <label for="remail">E-Mail</label>
    <input type="text" id="remail" name="remail" value="<?php echo $row['remail']; ?>" readonly>

    <label for="rcontact">Contact</label>
    <input type="text" id="rcontact" name="rcontact" value="<?php echo $row['rcontact']; ?>" readonly><br><br><br>
</div>
</div>

</div>
</form>
</body>
</html>