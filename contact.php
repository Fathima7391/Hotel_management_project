<?php
   $con = Mysqli_Connect("localhost","root","","hotel_management");
   if(!$con){
       echo "Connection Error !!";
   }

if(isset($_POST['submit'])){
    if(isset($_POST['en_enquirie'])){
        $name = $_POST['en_name'];
        $phone = $_POST['en_phone'];
        $email = $_POST['en_email'];
        $en = $_POST['en_enquirie'];
        $query = "INSERT INTO contactus(name,phone,email,enquiry) values('$name','$phone','$email','$en')";
        if (mysqli_query($con,$query)) {
            echo "New record created successfully";
          } else {
            echo "error".$query.mysqli_error($con);
            /*echo "Error: " . $sql . "<br>" . $con->error;*/
          }
          header('Location:home.php');
    }
    
}

?>