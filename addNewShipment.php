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
<body>
<?php include 'wh_nav.php'; ?>

<h1>Add New Shipment</h1>

<div>
  <form action="AddNewShipment_handle.php" method="POST" enctype="multipart/form-data">
    
  <h3><label for="sname">REFERENCE CODE:</label></h3>
    <input type="text" id="id" name="id" placeholder="Enter 11 character (e.g.:RS200020020)" required>
  
  <div class="row">
    <div class="column" style="background-color:#aaa;">
    
    <h3><label for="Sender">SENDER INFORMATION</label></h3>
    
    <label for="sname">Full Name</label>
    <input type="text" id="sname" name="sname" placeholder="Your Full Name..">

    <label for="saddress">Address</label>
    <input type="text" id="saddress" name="saddress" placeholder="Your Address..">

    <label for="semail">E-Mail</label>
    <input type="text" id="semail" name="semail" placeholder="Your E-Mail..">

    <label for="scontact">Contact</label>
    <input type="text" id="scontact" name="scontact" placeholder="Your Contact Number.."><br><br><br>

</div>

    <div class="column" style="background-color:#bbb;">
    
    <h3><label for="Recepient">RECIPIENT INFORMATION</label></h3>
    
    <label for="rname">Full Name</label>
    <input type="text" id="rname" name="rname" placeholder="Your Full Name..">

    <label for="raddress">Address</label>
    <input type="text" id="raddress" name="raddress" placeholder="Your Address..">
    
    <label for="remail">E-Mail</label>
    <input type="text" id="remail" name="remail" placeholder="Your E-Mail..">

    <label for="rcontact">Contact</label>
    <input type="text" id="rcontact" name="rcontact" placeholder="Your Contact Number.."><br><br><br>
</div>
</div>
    <input type="submit" value="Submit">

</div>
</form>
</body>
</html>


