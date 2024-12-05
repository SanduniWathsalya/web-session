<?php
require 'db.php';

$id=$_GET['id'];

// sql to delete a record
$sql = "DELETE FROM contactus WHERE id='".$id."'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>