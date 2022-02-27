<html>
    <head>
        <title>EVENT BOOKING</title>
        <link rel="stylesheet" href="Library/css/home_reservation.css">
        
    </head>
    <body>
        <div class="event">
        <button style="padding:10px; margin-left:10px; margin-top:20px; border-radius:.5em; background-color:gray; font-size:20px;"><a style="text-decoration:none; color:black;" href="home.php">Home</a></button>
            <h1>EVENT BOOKING</h1>
            

            <form class="form-group" method="post" > 
                <div id="form">
                    <div id="first_s" style="margin-left:30%">
                        <div class="gp1" style="width:50%;">
                            <input type="text" name="names" class=" form-control " required placeholder="name " />
                        </div>
                        <div class="gp1 " style="width:50%;">
                            <input type="email" name="email" class="form-control " required placeholder="email " />
                        </div>
                        <div class="gp1 " style="width:50%;">
                            <input name="phone" type="text" class="form-control " required placeholder="phone number " />
                        </div>
                        <div class="gp1 " style="width:50%;">
                            <input name="id" type="text" class="form-control " required placeholder="ID proof number " />
                        </div>
                        <div class="gp1 " style="width:40%; margin-left:5.5%;">
                            <select name="tevent" class="form-control " required>
                                <option value=" ">Event Type</option>
                                <option value="convention centre ">CONVENTION CENTER</option>
                                <option value="conference hall ">CONFERENCE HALL</option>
                                <option value="banquet hall">BANQUET HALL</option>
                                <option value="executive room">BOARD ROOM</option>
                                <option value="terrace">TERRACE</option>
                            </select>
                        </div>
                        <div class="gp1 gp2" style="width:40%;margin-left:8.5%;" >
                            <label style="color: #fff ">Check-In</label>
                            <input name="cin" type="date" class="form-control " placeholder="check-in " />
                        </div>
                        <div class="gp1 gp2" style="width:40%;margin-left:8.5%;">
                            <label style="color: #fff ">Check-out</label>
                            <input name="cout" type="date" class="form-control " />
                        </div>

                    </div>   
                </div><center>
                <input type="submit" name="submit" value="Book Now" style="margin-top:5vh;">
                </center><br>

            </form>

        </div>
    </body> 
</html>

<?php
    include 'connect.php';

    
        

    if(isset($_POST['submit']))
    {
        $name = $_POST['names'];
        $email= $_POST['email'];
        $phn= $_POST['phone'];
        $tevent = $_POST['tevent'];
        $cin= $_POST['cin'];
        $cout= $_POST['cout'];
        $sql = "INSERT INTO event_enquries(name,email,phone,event_type,c_in,c_out)
         VALUES('$name','$email','$phn','$tevent','$cin','$cout')";
        if(mysqli_query($con,$sql))
        {
           echo '<script>alert("record added");</script>';
           
        }
        else{
           echo "error".mysqli_error($con);
        }
        mysqli_close($con);
    }
    ?>
 