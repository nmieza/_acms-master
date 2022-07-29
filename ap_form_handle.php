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
<?php include 'ap_nav.php'; ?>

<h2>AIRPORT DETAIL</h2>

<?php 
error_reporting(0);
include 'db_connect.php';
session_start();

# Check if sender fileds are empty
if(empty($_POST['ap_name']) && empty($_POST['ap_address']) && empty($_POST['ap_postalcode']) && empty($_POST['ap_country'])
    && empty($_POST['ap_contact'])){
    # If the fields are empty, display a message to the user
    echo " <br/> Please fill in the fields";

# Process the form data if the input fields are not empty
}else{
    # insert into sql
    $sql = "INSERT into airport_list (AP_NAME, AP_ADDRESS, AP_POSTALCODE, AP_COUNTRY, AP_CONTACT) 
    VALUES ('$_POST[ap_name]', '$_POST[ap_address]', '$_POST[ap_postalcode]', '$_POST[ap_country]', '$_POST[ap_contact]')";
}

if (!mysqli_query($conn, $sql)) {
    die('Error: '. $conn->error);
}
else{
    $ap_name= $_POST['ap_name'];
    $ap_address= $_POST['ap_address'];
    $ap_postalcode= $_POST['ap_postalcode'];
    $ap_country= $_POST['ap_country'];
    $ap_contact= $_POST['ap_contact'];
    

    echo "<h2>Airport Detail</h2>";
    echo ('<h3>'. $ap_name. '</h3>');
    echo ('<h3>'. $ap_address. '</h3>');
    echo ('<h3>'. $ap_postalcode. '</h3>');
    echo ('<h3>'. $ap_country. '</h3>');
    echo ('<h3>'. $ap_contact. '</h3><br/>');


    
    
    echo "<button onclick=\"location.href='ap_index.php'\" type=\"button\">MAIN MENU</button>";

}
?>