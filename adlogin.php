<html>
     <head>
        <title>ADMIN LOGIN</title>
        <link rel="stylesheet" href="Library/css/style2.css">
        
    </head>
    <body>
         <div class="loginbox">
             <img src="Library/Images/avatar.jfif" class="avatar">
             <h1>LOGIN HERE !</h1>
             <form action="" method="POST">
                 <p>Username</p>
                 <input type="text" name="username" placeholder="enter username">
                 <p>Password</p>
                 <input type="password" name="password" placeholder="enter password">
                 <input type="submit" name="submit" value="LOGIN"><br>
                 <input type="submit" name="back" value="HOME"><br>
                 <a href="#">Forgot your password?</a><br>
             </form>

         </div>
    </body>
</html>

<?php
 require "connect.php";
 
 if(isset($_POST['back']))
 {
 	header("location:home.php");
 }
 

 if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $login_query = "select * from user_data where username='$user' and password='$pass'";
    $login_result = mysqli_query($con,$login_query);
    $login_vlaues = mysqli_fetch_array($login_result);
    if(!$login_result){
        echo "login error";
    }
    $login_rows = mysqli_num_rows($login_result);
    if($login_rows == 1){
        $_SESSION['username'] = $login_vlaues[0];
        header("location:admin\\index.php");
    }
    else{
        echo "there is no user";
    }

; }

?>