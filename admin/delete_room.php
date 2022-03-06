<?php
  require "../connect.php";

  $con = Mysqli_Connect("localhost","root","","hotel_management");
    if(!$con){
        echo "Connection error !";
    }
	else{
        if(isset($_GET["id"])){
			$getid=$_GET["id"];
			//echo"$getid";
			$sql="delete from room_details where room_id=$getid";
			if(mysqli_query($con,$sql)){
                echo "<script>alert(\"Succesfully deleted the book !\");</script>";
                header("location:view_room.php");
            }
            else{
                echo "<script>alert(\"Can't deleted the book !\");</script>";
                header("location:view_room.php");
            }
	    }
    }
?>
			