<?php
    $con = mysqli_connect("localhost","root","","hotel_management");
    if(!$con){
       echo "<script>alert(\"Connection Error!\");</script>";
    }
?>       