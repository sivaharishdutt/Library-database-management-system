<?php
include 'dbinfo.php'; 
?>  
<!DOCTYPE html>
<html>
    <head>
        <title>Mini Project</title>
        <style type="text/css"></style>
        <link rel="stylesheet" type="text/css" href="lms1.css">
     </head>
     <body><?php
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
      
        <div class="heading">
        <h1><strong><em> IIIT-T </em> </h1>
        <h2 style="font-variant: small-caps;">Library Managment System</h3>
         </div>
             <div class="form">
             <form action="/action_page.php">
  <div class="imgcontainer">
    <img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-4/512/User-blue-icon.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="Submit" value="Login"/>
    <button type="submit"><a href="file:///C:/Users/N%20SIVAHARISHDUTT/Desktop/TributePageCSE15U025/login.html">Signup</a></button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"> <a href="#">Forgot_password?</a></span>
  </div>
</form>
</div>
<br>
<br>
<br>
<br>

              <div class="topnav">
                 <a class="active"  href="file:///C:/Users/N%20SIVAHARISHDUTT/Desktop/TributePageCSE15U025/lms.html">Home</a>
                 <a href="file:///C:/Users/N%20SIVAHARISHDUTT/Desktop/TributePageCSE15U025/about.html">About_Library</a>
                  
                 <a href="file:///C:/Users/N%20SIVAHARISHDUTT/Desktop/TributePageCSE15U025/timings.html">Timings</a>
                 <a href="file:///C:/Users/N%20SIVAHARISHDUTT/Desktop/TributePageCSE15U025/contact.html">Contact</a>
             </div>
              
             <br><br>
                  <p></p>
                  <br>
                  <br>
                 
              
              <center class="pilla" >
                     <p>developed by siva , ashok , hareesh</p>
                     </center>
                      
                 
                      

 
     </body>
 </html>     
