<?php
  require "../connect.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room</title>
</head>
<style>
    table{
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        margin-top:4em;
        padding:1em;
        box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19);
        border-radius:15px;
    }
    table input{
        border-radius:15px;
        border:1px solid black;
    }
    input:focus {
        border-radius:15px;
        border:1px solid red;
        outline:none;
    }

    tr,td,th{
        padding:1em;
        text-align: left;
    }
    .center th{
        text-align: center;
    }


    /*body{
    background: url(../images/bg.jpg);
    background-position:center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    /*background-color: #464646;
    }*/
    .main-head{
  	    /*color:#00FFFF;
	    text-shadow:0 0 5px #000000, 0 0 5px #000000;
        font-family:Courier New;*/
  	    text-align:center;
        font-family:Courier New;
        margin-top:1em;
	    
	    font-size:20px;
    }
        .b-head{
            background:rgba(255,255,255,.5);
            color:black;
            padding:3px;
            padding-left:10px;
            padding-right:10px;
            border-radius:15px;
            text-transform:uppercase;
            border-bottom:2px solid red;
        }
        .sb-btn{
            background-color:green;
            border:none;
            padding:5px;
            border-radius:3px;
            color:white;
            text-transform:uppercase;
        }
</style>
<body>
<?php
     $con = Mysqli_Connect("localhost","root","","hotel_management");
     if(!$con){
         echo "Connection Error !!";
     }

		if(isset($_POST['viewroom']))
    {
         header("location:view_room.php");
    }
        	
    if(isset($_POST['submit'])){
        $room_id = $_POST['room_id']; 
		$room_type = $_POST['room_type'];  
        $room_price = $_POST['room_price'];  
       

        $query = "insert into room_details values('$room_id','$room_type','$room_price',0)";
            if(mysqli_query($con,$query)){
                header("location:add_room.php");
            }
            else{
                echo "error".$query.mysqli_error($con);
            }
    }
?>

    
    <form name="form" action="#" method="POST">
        <table>
            <tr>
                <th colspan="2" style="text-align:center">
                <h2 class="main-head"><b class="b-head">Add New Room</b></h2>
                </th>
            </tr>
            <tr>
			
			
                <th>ROOM ID</th>
                <td> <input readonly type="text" name="room_id" value="<?php
                $room_id=1;
                        $res=mysqli_query($con,"select * from room_details order by room_id desc limit 1");
                        while($result=mysqli_fetch_array($res)){
                            $room_id =$result['room_id']; 
                            $room_id++;      
                        }
                 echo $room_id; 
                 ?>" > </td>
            </tr>
            <tr>
                <th>ROOM TYPE</th>
                <td><input type="text" name="room_type"> </td>
            </tr>
            <tr>
                <th>ROOM PRICE</th>
                <td><input type="text" name="room_price"> </td>
            </tr>
           
            <tr class="center">
                <th colspan="2"><input class="sb-btn" type="submit" value="ADD ROOM" name="submit">
                    <input class="sb-btn" type="submit" value="VIEW ROOMs" name="viewroom"></th>
            </tr>
        </table>
    </form>
   
</body>
</html>