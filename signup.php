<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'db_connect.php';
$cur=time();

$sql="DELETE FROM `otp_table` WHERE '$cur'>`time`+300 ";
mysqli_query($conn,$sql);
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$address=$_POST["address"];
$city=$_POST["city"];
$confirm=$_POST["confirm"];
$_SESSION["username"]=$username;
$sql="select * from signup where username='$username'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
$sql="select * from otp_table where username='$username'";
$result=mysqli_query($conn,$sql);
$num1=mysqli_num_rows($result);
if($num||$num1)
{
    echo "this email is already used by someone else";
    exit();
}
$passlen=strlen((string)$password);
if($passlen<6)
{
    echo '<script language="javascript">';
    echo 'alert("password is too short")';
    echo '</script>';
  exit();
}
if($password!=$confirm)
{
    echo '<script language="javascript">';
    echo 'alert("password is not matching with confirm password")';
    echo '</script>';
  exit();
}
$to = $username;
$otp=rand(100000, 999999);
$_SESSION["otp"]=$otp;
require('mailer.php');
rmail($to,$otp);
header("location: otp.php");
$time=time();
    $sql="insert into `otp_table` (`name`, `username`, `password`, `address`,`city`,`otp`,`time`) values ('$name','$username','$password','$address','$city','$otp','$time')";
    mysqli_query($conn,$sql);
    echo "record added successfully";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup_cs.css">
</head>
<body >
    <h1><i>WELCOME TO THE TEAM OF FOOD WASTE WARRIOR</i></h1>
    <br><br><br><br><br><br>
    <div >
    <div id="logo"  > 
        
        
        <h1><i> BE A FOOD RESCUE WARRIOR TODAY !!</i></h1>
      </div> 
      <section class="stark-login">
        
        <form action="" method="POST">	
          <div id="fade-box">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="text" name="username" id="username" placeholder="Unique Username" required>
            <input type="text" name="city" id="city" placeholder="city" required>
            <input type="text" name="address" id="Address" placeholder="Address" required>
              <input type="password" name="password" placeholder="Password" required>
              <input type="password" name="confirm" placeholder="Confirm Password" required>
                
                <button>Sign-Up</button> 
              </div>
            </form>
            <div class="hexagons">
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <br>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <br>
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span> 
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span>
                  <span>&#x2B22;</span>
                  
                  <br>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <span>&#x2B22;</span>
                    <br>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                      <span>&#x2B22;</span>
                    </div>      
                  </section> 
                  
                  <div id="circle1">
                    <div id="inner-cirlce1">
                      <h2> </h2>
                    </div>
                  </div>
                  
                  
                  
                  <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                  
                  
                  
    </div>              
</body>
</html>