<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AIR CARGO MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <center><img src="ap.jpg" style="width: 40%;" alt="ap"></center>
              </div>
              <h4>Trace Your Shipment</h4>
              <h6 class="font-weight-light">Please insert your Reference Code.</h6>
              <form role="form" class="pt-3" method="post" id="shipment" action="trackingaction.php" target="_blank">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="id" name="id">
                </div>
                
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit" type="submit">TRACE</button>
                  <a class="btn btn-block btn-light btn-lg font-weight-medium auth-form-btn" href="index.php" name="cancel" type="cancel">CANCEL</a>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>

</html>
