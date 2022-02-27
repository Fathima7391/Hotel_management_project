<?php
require "connect.php";
?>

<html>
    <head>
        <title>ROOM BOOKING</title>
        <link rel="stylesheet" href="Library/css/home_reservation.css">
        
    </head>
    <body>
        
      <div class="row">
      <button style="padding:10px; margin-left:10px; margin-top:20px; border-radius:.5em;  background-color:gray; font-size:20px;"><a style="text-decoration:none;" href="home.php">Home</a></button>
        <h1>ROOM RESERVATION</h1>
        <form class="form-group" action="" method="post">
            <div id="form">
            
                <div id="first">
                    <div class="gp1">
                        <input type="text" name="fname" class=" form-control " required placeholder="firstname " />
                    </div>
                    <div class="gp1 ">
                        <input type="text" name="lname" class="form-control " required placeholder="lastname " />
                    </div>
                    <div class="gp1 ">
                        <input type="email" name="email" class="form-control " required placeholder="email " />
                    </div>

                    <div class="gp1 ">
                        <input name="phone" type="text" class="form-control " required placeholder="phone number " />
                    </div>
                    <div class="gp1 ">
                        <input name="id" type="text " class="form-control " required placeholder="ID proof number " />
                    </div>
                    <div class="gp1 ">
                        <select name="ac" class="form-control " required>
                            <option value=" ">AC or Non-AC</option>
                            <option value="AC ">AC </option>
                            <option value="NON AC ">Non-AC</option>
                        </select>
                    </div>
                    <div class="gp1 ">
                        <select name="troom" class="form-control " required>
                            <option value=" ">Room Type</option>
                            <option value="Superior Room ">SUPERIOR ROOM</option>
                            <option value="Deluxe Room ">DELUXE ROOM</option>
                            <option value="Guest House ">SINGLE ROOM</option>
                            <option value="Single Room ">DOUBLE ROOM</option>
                            <option value="Single Room ">CABANA </option>
                        </select>
                    </div>
                    
                </div>

                <div id="second">
                    <div class="gp1 ">
                        <select name="nroom" class="form-control " required>
                            <option value selected>No.of Rooms</option>
                            <option value="1 ">1</option>
                            <option value="2 ">2</option>
                            <option value="3 ">3</option>
                            <option value="4 ">4</option>
                            <option value="5 ">5</option>
                            <option value="6 ">6</option>
                            <option value="7 ">7</option>
                        </select>
                    </div>
                    <div class="gp1 ">
                        <select name="trooms" class="form-control " required>
                            <option value=" ">Room Type 2</option>
                            <option value="Superior Room ">SUPERIOR ROOM</option>
                            <option value="Deluxe Room ">DELUXE ROOM</option>
                            <option value="Guest House ">GUEST HOUSE</option>
                            <option value="Single Room ">SINGLE ROOM</option>
                            <option value="AC ">AC ROOM</option>
                            <option value="NON AC ">NON-AC ROOM</option>
                        </select>
                    </div>
                    <div class="gp1 ">
                        <select name="nrooms" class="form-control " >
                            <option value selected>No.of Rooms 2</option>
                            <option value="1 ">1</option>
                            <option value="2 ">2</option>
                            <option value="3 ">3</option>
                            <option value="4 ">4</option>
                            <option value="5 ">5</option>
                            <option value="6 ">6</option>
                            <option value="7 ">7</option>
                        </select>
                    </div>
                    <div class="gp1 ">
                        <select name="nguest" class="form-control " required>
                            <option value selected>No.of guests</option>
                            <option value="1 ">1</option>
                            <option value="2 ">2</option>
                            <option value="3 ">3</option>
                            <option value="4 ">4</option>
                            <option value="5 ">5</option>
                            <option value="6 ">6</option>
                            <option value="7 ">7</option>
                            <option value="8 ">8</option>
                            <option value="9 ">9</option>
                            <option value="10 ">10</option>
                            <option value="11 ">11</option>
                            <option value="12 ">12</option>
                            <option value="13 ">13</option>
                        </select>
                    </div>
                    <div class="gp1 gp2">
                        <label style="color: #fff ">Check-In</label>
                        <input name="cin" type="date" class="form-control " placeholder="check-in " />
                    </div>
                    <div class="gp1 gp2">
                        <label style="color: #fff ">Check-out</label>
                        <input name="cout" type="date" class="form-control " />
                    </div>
                </div>
            </div><center>
            <input type="submit" name="reservation_book" value="Submit" style= ""/>
            </center>
           
        </form>
        <?php
       


        if(isset($_POST['submit']))
        {
            $text1 = $_POST['fname'];
                echo "<script>alert('$fname');</script>";
        }?>
    </div>
    </body> 
</html>


<?php
    require 'connect.php';

    if(isset($_POST['reservation_book'])){

        

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email= $_POST['email'];
        $phn= $_POST['phone'];
        $id= $_POST['id'];
        $ac= $_POST['ac'];
        $troom = $_POST['troom'];
        $nroom= $_POST['nroom'];
        $trooms= $_POST['trooms'];
        $nrooms= $_POST['nrooms'];
        $nguest= $_POST['nguest'];
        $cin= $_POST['cin'];
        $cout= $_POST['cout'];

      
       // echo "<script>alert('$fname $lname $email $phn $id $ac $troom $nroom $trooms $nrooms $nguest $cin $cout');</script>";

        $sql = "insert into reservations_enquries(fname,lname,email,mob,id_proof,room_type,no_of_rooms,room_type_2,no_of_room_2,no_of_guests,check_in,check_out,ac)VALUES('$fname','$lname','$email','$phn','$id','$troom','$nroom','$trooms',$nrooms,$nguest,'$cin','$cout','$ac')";
        if(mysqli_query($con,$sql))
        {
           echo '<script>alert("record added");</script>';
           
           
        }
        else{
           echo "error".mysqli_error($con);
        }
         
        
    }

    ?>
 