<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'db_connect.php';
$username=$_POST["username"];
$password=$_POST["password"];

$sql="select * from signup where username='$username' and password='$password' ";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num)
{
    echo "you are logged in";
    
    $_SESSION['username']="$username";
    $sql="select * from signup where username='$username'";
    $result=mysqli_query($conn,$sql);
    while($temp=$result->fetch_assoc())
    $_SESSION['id']=$temp['ID'];

    header("location: check_poor_area_.php");
}
else
{
    echo ' <script> alert(" invalid username or password " ) </script> ';
   
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_cs.css">
</head>
<style>
  .menu {
  padding: 2px;
  margin-top: 0;
  width: 100%;
  max-width: 100%;
  height: 100px;
}
.menu .container {
  padding: 10px;
}
ul li {
  max-width: 250px;
  width: 100%;
}
ul {
  display: flex;
  justify-content: center;
  column-gap: 5px;
  list-style: none;
  margin: auto;
}
ul li a {
  text-decoration: none;
  color:brown;
  font-size: 18px;
  font-weight: bold;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  /* background-color: #fa8207; */
  
  background-color:#fdd635;
  display: block;
  padding: 10px;
  text-align: center;
}
ul li:hover ul.dropdown {
  display: block;
  animation-name: mainnav;
  animation-duration: 0.5s;
  animation-iteration-count: 1;
  animation-delay: 0s;
  animation-timing-function: linear;
}
ul li ul.dropdown {
  display: none;
  padding: 0;
  overflow: hidden;
}

/* Mainnav animation */

@keyframes mainnav {
  0% {
    height: 0px;
    /* background-color: #fa8207; */
  }
  100% {
    height: 100px;
    background-color: transparent;
  }
}

ul li ul.dropdown li {
  margin: 5px 0;
}
.menu ul li ul li:first-child {
  animation-name: navanime;
  animation-duration: 0.5s;
  animation-iteration-count: 1;
  animation-delay: 0s;
  animation-timing-function: linear;
}
.menu ul li ul li:nth-child(2) {
  animation-name: navanime;
  animation-duration: 0.5s;
  animation-iteration-count: 1;
  animation-delay: 0.1s;
  animation-timing-function: linear;
}
.menu ul li ul li:nth-child(3) {
  animation-name: navanime;
  animation-duration: 0.5s;
  animation-iteration-count: 1;
  animation-delay: 0.2s;
  animation-timing-function: linear;
}
.menu ul li ul li:nth-child(4) {
  animation-name: navanime;
  animation-duration: 0.5s;
  animation-iteration-count: 1;
  animation-delay: 0.3s;
  animation-timing-function: linear;
}
.menu ul li ul li:nth-child(5) {
  animation-name: navanime;
  animation-duration: 0.5s;
  animation-iteration-count: 1;
  animation-delay: 0.4s;
  animation-timing-function: linear;
}
.menu {
  position: relative;
  /* background: rgb(174 90 9); */
  background-blend-mode: overlay;
  border-radius: 22px 0 22px 0;
}
.menu .container > ul:after {
  height: 39px;
  max-width: 10%;
  width: 100%;
  min-width: 0;
  background: #fdd635;
  content: "";
  position: relative;
  display: block;
  border-radius: 0 0 80% / 0 0 99% 0;
}
.menu .container > ul:before {
  height: 39px;
  max-width: 10%;
  width: 100%;
  min-width: 0;
  background: #fdd635;
  content: "";
  position: relative;
  display: block;
  border-radius: 80% 0 0 0/ 100% 0 0 0;
}

/* Navanim animation */

@keyframes navanime {
  0% {
    transform: rotateY(180deg);
  }
}
ul li a {
  transition: all 0.2s linear;
  position: relative;
  z-index: 1;
}
ul li > a:after {
  content: "";
  background-color: #ffba07;
  display: block;
  position: absolute;
  bottom: 0;
  right: 0;
  width: 0%;
  height: 0%;
  transition: all 0.3s linear;
  z-index: -1;
}
ul li:hover > a:after {
  color: #fffb00;
  content: "";
  background-color: #ffba07;
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
}

</style>
<body >
  
<nav>
  <div class="menu">
    <div class="container">
      <ul class="inner-menu">
        <li><a href="./index.php">HOME</a>
          <!-- <ul class="dropdown">
            <li><a href="#">Dropdown-menu</a></li>
            <li><a href="#">Dropdown-menu</a></li>
          </ul> -->
        </li>
        <li><a href="#">CONTRIBUTE</a>
          <ul class="dropdown">
            <li><a href="new_vol.php">Volunteer Applications</a></li>
            <!-- <li><a href="./donate.html">DONATE MONEY</a></li> -->
            <!-- <li><a href="#">Dropdown-menu</a></li>
            <li><a href="#">Dropdown-menu</a></li>
            <li><a href="#">Dropdown-menu</a></li> -->
          </ul>
        </li>
        <li><a href="logout.php">LOGOUT</a>
          <!-- <ul class="dropdown">
            <li><a href="#">Dropdown-menu</a></li>
            <li><a href="#">Dropdown-menu</a></li>
          </ul> -->
        </li>
        <li><a href="#" style="background-color:orange">SIGN-IN</a>
          <ul class="dropdown">
            <li><a href="./login.php">ORGANISATION SIGNIN</a></li>
            <li><a href="./volunteer_login.php">VOLUNTEER-SIGNIN</a></li>
            <!-- <li><a href="#">Dropdown-menu</a></li> -->
            <!-- <li><a href="#">Dropdown-menu</a></li> -->
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>





    <h1 style="color: brown;"><i>WELCOME FOOD WASTE WARRIOR</i></h1>
    <br>
    <div >
    <div id="logo"  > 
        
        
        <h1 style="color: brown;"><i> LOGIN</i></h1>
      </div> 
      <section class="stark-login">
        
        <form action="" method="POST">	
          <div id="fade-box">
            <input type="text" name="username" id="username" placeholder="Username" required>
              <input type="password" name="password" placeholder="Password" required>
                
                <button>Log In</button> 
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