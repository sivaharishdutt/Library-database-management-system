 <?php
include 'dbinfo.php'; 
?>  

<html>
<style>
body{
background-image: url("https://wallpapertag.com/wallpaper/full/6/5/c/540622-amazing-library-background-image-1920x1200-for-4k-monitor.jpg");
}
</style>
<body>
<div class="heading">
<h1><strong><em>IIIT-T</em></h1>
<h3>LIBRARY</h3>
</div>
<?php
//always start the session before anything else!!!!!! 
session_start(); 
require 'connect/connect.php';
  

if(isset($_POST['username']) and isset($_POST['password']))  { //check null
  $username = $_POST['username']; // text field for username 
  $password = $_POST['password']; // text field for password
  
// store session data
$_SESSION['username']=$username;

//connect to the db 

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

         //Our SQL Query
           $sql_query = "Select U.Username From user AS U, staff AS S Where U.Username = '$username' AND U.Password = '$password' AND U.Username = S.Username";  

         //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
      if($result == false)
        {
        echo 'The query failed.';
        exit();
      }
      if(mysqli_num_rows($result) == 1){ 
      //the username and password matches the database 
      //move them to the page to which they need to go 
        header('Location: AdminSummary.php'); 
      //  break;
      //Our SQL Query
      }
      
           $sql_query = "Select Username From user Where Username = '$username' AND Password = '$password'";  

            //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
      if($result == false)
        {
        echo 'The query failed.';
        exit();
      }

      //this is where the actual verification happens 
      if(mysqli_num_rows($result) == 1){ 
      //the username and password matches the database 
      //move them to the page to which they need to go 
        header('Location: UserSummary.php');
         
      }else{ 
      $err = 'Incorrect username or password' ; 
      } 
      //then just above your login form or where ever you want the error to be displayed you just put in 
      echo "$err";
    } 
  
?> 
 <style>
   h1{
      color:#E5E7E9;
      font-size: 400%;
      position: absolute;
      top:100px;
      left:780px;
      right:400px;
    }
    h3{
      color:#E5E7E9;
      font-size: 250%;
      position: absolute;
      top:175px;
      left:780px;
      right:400px;
      }
        
    </style>
 
   
<form action="" method="post" style="text-align:center">
 
<table>
<tr>
    <td><strong>User_name</strong></td>
    <td><input type="text" name="username" required/></td>
</tr>
<tr>
    <td><strong>Password</strong></td>
    <td><input type="text" name="password" required/></td>
</tr>
<style>
td {
     text-align: center;
     color:#E5E7E9;
     font-size: 28px;
    }
form{
     position: absolute;
     top:350px;
     left:700px;
     right:600px;
     margin:0px auto;

}
#login{
     position: absolute;
     top:100px;
     left:130px;
     right:100px;

}
</style>
</table>

<input id="login" type="Submit" value="Login"/>
 </form>
 <form action="NewUserRegistration.php" method="post">
<input id="signup"type="Submit" value="signup"/>
<style>
 #signup{  position: absolute;
   top:130px;
   left:130px;
   right:100px;
 }

</style>
</form>
 
</body>
</html>