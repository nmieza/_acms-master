<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: dh_index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Aircargo Shipment Tracking</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <p></p>
    <a href="logout.php">Logout</a>
</body>
</html>