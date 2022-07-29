<!DOCTYPE html>
<html>
<title>AIR CARGO MANAGEMENT SYSTEM</title>
<style>

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 100px;
}
h2 {text-align: center;}
h3 {text-align: center;}

</style>
<body>
<?php include 'wh_nav.php'; ?>

<h2>SHIPMENT DETAIL</h2>

<?php 
error_reporting(0);
include 'db_connect.php';
session_start();

# Check if sender fileds are empty
if(empty($_POST['id']) && empty($_POST['sname']) && empty($_POST['saddress']) && empty($_POST['semail']) && empty($_POST['scontact'])
    && empty($_POST['rname']) && empty($_POST['raddress']) && empty($_POST['remail']) && empty($_POST['rcontact'])){
    # If the fields are empty, display a message to the user
    echo " <br/> Please fill in the fields";

# Process the form data if the input fields are not empty
}else{
    # insert into sql
    $sql = "INSERT into shipment (ID, SNAME, SADDRESS, SEMAIL, SCONTACT, RNAME, RADDRESS, REMAIL, RCONTACT) 
    VALUES ( '$_POST[id]', '$_POST[sname]', '$_POST[saddress]', '$_POST[semail]', '$_POST[scontact]', '$_POST[rname]', '$_POST[raddress]', 
    '$_POST[remail]', '$_POST[rcontact]')";
}

if (!mysqli_query($conn, $sql)) {
    die('Error: '. $conn->error);
}
else{
    $id= $_POST['id'];
    $sname= $_POST['sname'];
    $saddress= $_POST['saddress'];
    $semail= $_POST['semail'];
    $scontact= $_POST['scontact'];
    $rname= $_POST['rname'];
    $raddress= $_POST['raddress'];
    $remail= $_POST['remail'];
    $rcontact= $_POST['rcontact'];

    echo "<br><br><h2>Shipment Reference Code: $id</h2><br/>";

    echo "<h2>Sender information</h2>";
    echo ('<h3>'. $sname. '</h3>');
    echo ('<h3>'. $saddress. '</h3>');
    echo ('<h3>'. $semail. '</h3>');
    echo ('<h3>'. $scontact. '</h3><br/>');

    echo "<h2>Receiver information</h2>";
    echo ('<h3>'. $rname. '</h3>');
    echo ('<h3>'. $raddress. '</h3>');
    echo ('<h3>'. $remail. '</h3>');
    echo ('<h3>'. $rcontact. '</h3>');
    
    echo "<button onclick=\"location.href='wh_index.php'\" type=\"button\">MAIN MENU</button>";

}
?>