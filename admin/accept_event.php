<?php
$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'hotel_management'); // Using database connection file here

$id = $_GET['id']; // get id through query string
$query1="SELECT * FROM `event_enquries` where id = '$id'";
$del1 = mysqli_query($connection,$query1);
if(mysqli_num_rows($del1)){
           
                while($row=mysqli_fetch_assoc($del1)){
                $mail= $row["email"];
                }
                }	

//$mail= $_GET['email'];
$subject="Booking Approved";
$body="Your booking has been approved by the management";
$headers="From:hillside407@gmail.com";
if(mail($mail,$subject,$body,$headers))
{
	echo "Mail sent";
}
$query="UPDATE `event_enquries` SET  status='Accepted' where id = '$id'";
$del = mysqli_query($connection,$query); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("location:requests_events.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>