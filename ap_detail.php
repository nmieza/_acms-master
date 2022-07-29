<!DOCTYPE html>
<html>
<title>AIR CARGO MANAGEMENT SYSTEM</title>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 10px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:  #333333;
  color: white;
}

.button {
  background-color: #008CBA; /* Blue */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
  position: center;
}
.button1 {background-color: #f44336;}
h1 {text-align: center;}
h2 {text-align: center;}
tr {text-align: center;}
</style>
</head>
<body>

<?php include 'ap_nav.php'; ?>
<?php include 'db_connect.php'; ?>

<h1>Airport Detail</h1>


<table id="customers">
<tr>

  <th>Airport Name</th>
  <th>Address</th>
  <th>Postal Code</th>
  <th>Country</th>
  <th>Contact</th>
  </tr>
   
<?php
    $result = mysqli_query($conn, "select ap_name, ap_address, ap_postalcode, ap_country, ap_contact from airport_list");
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>"; echo $row["ap_name"]; echo "</td>";
        echo "<td>"; echo $row["ap_address"]; echo "</td>";
        echo "<td>"; echo $row["ap_postalcode"]; echo "</td>";
        echo "<td>"; echo $row["ap_country"]; echo "</td>";
        echo "<td>"; echo $row["ap_contact"]; echo "</td>";
        echo "</tr>";
    }

    mysqli_free_result($result);
    
    ?>

</body>
</html>

<?php





