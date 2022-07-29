<?php
include 'db_connect.php';
?>
<html>
<head>
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AIR CARGO MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
</head>

<style>

html {
height: 100%;
}
body {
margin:0;
padding:0;
background:linear-gradient(rgba(0,0,255,0.1), rgba(0,0,255,0.1)); 
align-items: center;
}


@keyframes btn-anim1 {
0% {
  left: -100%;
}
50%,100% {
  left: 100%;
}
}

@keyframes btn-anim2 {
0% {
  top: -100%;
}
50%,100% {
  top: 100%;
}
}

@keyframes btn-anim3 {
0% {
  right: -100%;
}
50%,100% {
  right: 100%;
}
}

@keyframes btn-anim4 {
0% {
  bottom: -100%;
}
50%,100% {
  bottom: 100%;
}
}
</style>

<center><table style="width: 20%;" id="shipment" class="table table-striped table-bordered dt-responsive nowrap">
<th>Reference Code</th>
<th>Shipment Status</th>
  <th>Date & Time</th></tr></center>      

  <?php include 'log.php'; ?><br><br>

  <?php
  $id= $_POST['id'];
  $row= 1;
  $conn = mysqli_connect("localhost", "root", "", "aircargo_system");
      $result = mysqli_query($conn,"SELECT * FROM shipment WHERE id=$_POST[id]");

      if (mysqli_num_rows($sql)>0) {  
        while ($row=mysqli_fetch_assoc($sql)) { ?>  
        <tr>                   
             <td align="center"><?php echo $row['id'] ?></td>  
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
            <td align="center"><?php echo $row['date_created'] ?></td>  
 </tr>
<?php      }  
} ?>  
     </table> 
        

<script>
  
$(document).ready(function()
{
  $('#shipment').DataTable();
} );

</script>
</html>


