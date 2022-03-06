<?php
  require "../connect.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Services</title>
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

    if(isset($_POST['view']))
    {
         header("location:view_services.php");
    }
        	
    if(isset($_POST['submit'])){
        $service_id = $_POST['service_id'];  
		$service_type = $_POST['service_type'];  
        $service_charge = $_POST['service_charge'];  
       

        $query = "insert into service_details values('$service_id','$service_type','$service_charge',0)";
            if(mysqli_query($con,$query)){
                header("location:add_service.php");
            }
            else{
                echo "error".$query.mysqli_error($con);
            }
    }
?>

    
    <form name="form" action="" method="POST">
        <table>
            <tr>
                <th colspan="2" style="text-align:center">
                <h2 class="main-head"><b class="b-head">Add New Service</b></h2>
                </th>
            </tr>
            <tr>
			
			
                <th>SERVICE ID</th>
                <td> <input readonly type="text" name="service_id" value="
                <?php
                $service_id=1;
                		$res=mysqli_query($con,"select * from service_details order by service_id desc limit 1");
                        while($result=mysqli_fetch_array($res)){
                            $service_id =$result['service_id']; 
                            $service_id++;		
                        }
                 echo $service_id; 
                 ?>">
                  </td>
            </tr>
            <tr>
                <th>SERVICE TYPE</th>
                <td><input type="text" name="service_type"> </td>
            </tr>
            <tr>
                <th>SERVICE CHARGE</th>
                <td><input type="text" name="service_charge"> </td>
            </tr>
           
            <tr class="center">
                <th colspan="2"><input class="sb-btn" type="submit" value="ADD SERVICE" name="submit">
                <input class="sb-btn" type="submit" value="VIEW SERVICES" name="view"></th>
            </tr>
        </table>
    </form>
   
</body>
</html>