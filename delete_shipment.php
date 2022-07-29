<?php include 'wh_nav.php'; ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aircargo_system";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*sql to delete a record*/
    $sql = "DELETE FROM shipment WHERE id='" . $_GET["id"] . "'";

    /*use exec() because no results are returned*/
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>

