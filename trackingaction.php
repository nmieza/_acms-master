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

<center><table style="width: 20%;" id="shipment" class="table table-striped table-bordered dt-responsive nowrap"><th>Reference Code</th><th>Status (1 = Pending,
  2 = Accepted,
  3 = In Transit,
  4 = Out for Delivery,
  5 = Delivered)</th><th>Date Created</th></tr></center>      

  <?php include 'log.php'; ?><br><br>

  <?php
  $id= $_POST['id'];
  $row= 1;
  $conn = mysqli_connect("localhost", "root", "", "aircargo_system");
      $result = mysqli_query($conn,"SELECT * FROM shipment WHERE id=$_POST[id]");
      if ($row || mysqli_num_rows($result) != 0)
      {
        while($row = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td><center>". $row ['id'] ."</td>";
          echo "<td><center>". $row ['status'] ." </td>";
          echo "<td><center>". $row ['date_created'] ."</td>";
          echo "</tr>";
        }
      }

      else
      {
        echo "<script>alert('This ic number do not have any shipment !')</script>";
        header ('refresh:0 url="tracking.php"');
      }

  ?>

<script>
  
$(document).ready(function()
{
  $('#shipment').DataTable();
} );

</script>
</html>


