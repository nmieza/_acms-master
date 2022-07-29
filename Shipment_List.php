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
.button2 {background-color: #FFC300;}
h1 {text-align: center;}
h2 {text-align: center;}

</style>
</head>
<body>

<?php include 'wh_nav.php'; ?>
<?php include 'db_connect.php'; ?>

<h1>Shipment List</h1>

<table id="customers">
<tr>
  <th align="left">Reference Code</th>
  <th align="left">Sender Name</th>
  <th align="left">Receiver Name</th>
  <th colspan="3" align="center">Action</th>
</tr>
   
<?php
    $result = mysqli_query($conn, "select id, sname, rname from shipment");
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>"; echo $row["id"]; echo "</td>";
        echo "<td>"; echo $row["sname"]; echo "</td>";
        echo "<td>"; echo $row["rname"]; echo "</td>";
        echo "<td align=center>"; ?> <a href="view_shipment.php?id=<?php echo $row["id"]; ?>"><button type="button" class="button">View</button></a> <?php echo "</td>";
        echo "<td align=center>"; ?> <a href="update_shipment.php?id=<?php echo $row["id"]; ?>"><button type="button" class="button button2">Update</button></a> <?php echo "</td>";
        echo "<td align=center>"; ?> <a href="delete_shipment.php?id=<?php echo $row["id"]; ?>"><button type="button" class="button button1">Delete</button></a> <?php echo "</td>";

        echo "</tr>";
    }

    mysqli_free_result($result);
    
    ?>

</body>
</html>





