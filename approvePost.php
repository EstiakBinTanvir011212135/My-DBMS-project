<?php
require 'config.php';



$ItemID = $_GET["ItemID"];
$status = "Approved";
$deleteQ = mysqli_query($conn, "UPDATE lostposts SET approveStatus='$status' WHERE ItemID = '$ItemID'");

header("Location: adminDashboard.php");

?>

