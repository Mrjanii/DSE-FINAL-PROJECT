<?php
include "dbadconnection.php";
$Nid = $_GET["Nid"];
$sql = "DELETE FROM `newproducts` WHERE Nid = $Nid";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.admin.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}