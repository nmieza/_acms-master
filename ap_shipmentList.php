<?php  
 //Database connectivity  
 $con=mysqli_connect('localhost','root','','aircargo_system');  
 $sql=mysqli_query($con,"select * from shipment");  
 //Get Update id and status  
 if (isset($_GET['id']) && isset($_GET['status'])) {  
      $id=$_GET['id'];  
      $status=$_GET['status'];  
      mysqli_query($con,"update shipment set status='$status' where id='$id'");  
      header("location:ap_shipmentList.php");  
      die();  
 }  
 ?>  

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

h1 {text-align: center;}
h2 {text-align: center;}

</style>
</head>
<body>

<?php include 'ap_nav.php'; ?>
<?php include 'db_connect.php'; ?>

<h1>Shipment List</h1>

<table id="customers">
<tr>     
    <th>Reference Code</th>  
    <th>Date & Time Created</th>
    <th>View</th>
    <th>Status</th>  
    <th>Action</th> 
</tr>
   

     <?php
      $i=1;  
      if (mysqli_num_rows($sql)>0) {  
            while ($row=mysqli_fetch_assoc($sql)) { ?>  
            <tr>                   
                 <td align="center"><?php echo $row['id'] ?></td>  
                 <td align="center"><?php echo $row['date_created'] ?></td>  
                 <td align="center"><a href="ap_viewshipment.php?id=<?php echo $row["id"]; ?>"><button type="button" class="button">View</button></a></td>
                 <td align="center">  
                      <?php  
                      if ($row['status']==1) {  
                           echo "Pending";  
                      }if ($row['status']==2) {  
                           echo "Accepted";  
                      }if ($row['status']==3) {  
                           echo "In Transit";  
                      }if ($row['status']==4) {  
                            echo "Out For Delivery";
                      }if ($row['status']==5) {  
                            echo "Delivered";
                      }  
                      ?>  
     </td>
     <td align="center">  
          <select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['id'] ?>')">  
          <option value="">Update Status</option>  
          <option value="1">Pending</option>  
          <option value="2">Accepted</option>  
          <option value="3">In Transit</option>  
          <option value="4">Out For Delivery</option>
          <option value="5">Delivered</option>
        </select>  
      </td>  
     </tr>
   <?php      }  
    } ?>  
      </table> 
          </div> 
      <script type="text/javascript">  
      function status_update(value,id){  
           //alert(id);  
           let url = "http://localhost/_acms/ap_shipmentList.php";  
           window.location.href= url+"?id="+id+"&status="+value;  
      }  
 </script>  

</body>
</html>

