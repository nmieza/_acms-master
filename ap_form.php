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
  background-color: #0000FF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 100px;
}
h2 {text-align: center;}

</style>
<body>
<?php include 'ap_nav.php'; ?>

<title>Airport Information</title>
<h2>AIRPORT INFORMATION</h2>

<div>
  <form action="ap_form_handle.php" method="POST" enctype="multipart/form-data">
    
  
     
    <label for="ap_name">Airport Name</label>
    <input type="text" id="ap_name" name="ap_name" placeholder="Airport Name..">

    <label for="ap_address">Address</label>
    <input type="text" id="ap_address" name="ap_address" placeholder="Airport Address..">

    <label for="ap_postalcode">Postal Code</label>
    <input type="text" id="ap_postalcode" name="ap_postalcode" placeholder="Postal Code..">

    <label for="ap_country">Country</label>
    <input type="text" id="ap_country" name="ap_country" placeholder="Country..">

    <label for="ap_contact">Contact</label>
    <input type="text" id="ap_contact" name="ap_contact" placeholder="Contact Number.."><br><br>

    <input type="submit" value="S A V E">
  </form>
</div>

</body>
</html>