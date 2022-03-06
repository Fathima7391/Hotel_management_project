<?php
require "../connect.php";

if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    $sql = "UPDATE `reservations-enquries` SET status=0 WHERE id=$id";

if (mysqli_query($con, $sql)) {
    
  echo "Record updated successfully";
} else {
  echo "Error updating record: ";
}
}
?>