<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<!-- NAV STYLE ENDS -->

<!-- NOW MAIN STYLE  -->

<style>
    html, body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    /* background-color:#008cba;  */
    background: linear-gradient(90deg, #0ccda3 40%, #C1FCD3 60%);
    height:100%;
}
.container2{ 
   height:100%;
   display:flex;
   align-items:center;
   justify-content:center;
   margin-top: 0;
}
.content{
    background-color:white;
    width:500px;
    height:600px;
}
img{
    width: 100%;
    height: 25%;
}
.form-title{
    padding:10px 40px 0px;
}
form{
    padding:0px 40px;
}
input[type=text], [type=email]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    width:100%;
    margin: 8px 0;
    padding:10px 0;
}
input[type=number]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
}
input :hover {
    background-color: red;
}
select{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
    width:50%;
}
.beside{
    display:flex;  
    justify-content: space-between;
}
button{
    color:#ffffff;
    background-color: #4caf50;
    height:40px;
    width:25%;
    margin-top:15px;
    cursor: pointer;
    border:none;
    border-radius:2%;
    outline:none;
    text-align:center;
    font-size:16px;
    text-decoration:none;
    -webkit-transition-duration:0.4s;
    transition-duration:0.4s;
}
button:hover{
    background-color:#333333;
}
</style>


<body>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'db_connect.php';
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$address=$_POST["address"];
$confirm=$_POST["confirm"];
$cont=$_POST["contact"];
$citi=$_POST["city"];

// $id=$_POST["ID"];
// $pop=$_POST["population"];
$sql="select * from volunteer_signup where username='$username'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num)
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
    $sql="insert into `volunteer_signup` ( `name`, `username`,`password`,`contact-no`,`address`,`city`) values ('$name','$username','$password','$cont','$address','$citi')";
   $temp= mysqli_query($conn,$sql);
   if(!$temp)
   {
    echo "error";
   }
    echo "record added successfully";

}
?>
    
    
<nav style="  background: linear-gradient(90deg, #0ccda3 40%, #C1FCD3 60%)">
    <div style="z-index:1; margin-left: 1px; ">
      <div class="menu">
        <div class="container">
          <ul class="inner-menu">
            <li><a href="./check_poor_area_.php" >HOME</a>
              <!-- <ul class="dropdown">
                <li><a href="#">Dropdown-menu</a></li>
                <li><a href="#">Dropdown-menu</a></li>
              </ul> -->
            </li>
            <li><a href="#" style="background-color:orange">CONTRIBUTE</a>
              <ul class="dropdown">
                <li><a href="./new_vol.html">BECOME VOLUNTEER</a></li>
                <li><a href="#">DONATE MONEY</a></li>
                <!-- <li><a href="#">Dropdown-menu</a></li>
                <li><a href="#">Dropdown-menu</a></li>
                <li><a href="#">Dropdown-menu</a></li> -->
              </ul>
            </li>
            <li><a href="./index.php">LOGOUT</a>
              <!-- <ul class="dropdown">
                <li><a href="#">Dropdown-menu</a></li>
                <li><a href="#">Dropdown-menu</a></li>
              </ul> -->
            </li>
            <li><a href="#" >SIGN-IN</a>
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
      </div>
    </nav>


    <div class="container2" >
        <div class="content"  style="  background: linear-gradient(180deg, #efed5c, #ace0bb ,  #2bdbb5,  #efed5c )">
           <img src="https://www.mangalamfoundation.org/gallery/food_dist_DSC_0667_small.jpg" alt="header-image" class="cld-responsive" style="height: 200px;">
                <h1 class="form-title">Register Here</h1>
                <form method="post" >
                   <input type="text" name="name" placeholder="NAME" style="border-radius: 20px; padding: 5px; color:brown;  font-weight: bold; ">
                   <input type="text" name="username" placeholder="USERNAME" style="border-radius: 20px; padding: 5px; color:brown;  font-weight: bold; ">
                   <input type="password" name="password" placeholder="Password" style="border-radius: 20px; padding: 5px; color:brown;  font-weight: bold; ">
                   <input type="password" name="confirm" placeholder="Confirm Password" style="border-radius: 20px; padding: 5px; color:brown;  font-weight: bold; ">
                
                   <div class="beside">
                    <input type="number" placeholder="PHONE NUMBER" name="contact" style="border-radius: 20px; padding: 5px; color:brown;  font-weight: bold;">
                    <input type="text" placeholder="city" name="city" style="border-radius: 20px; padding: 5px; color:brown;  font-weight: bold;">
                    
                  </div>
                    <!-- <input type="text" placeholder="ADDRESS" name="address" style="border-radius: 20px; padding: 5px; color:brown; font-weight: bold;"> <br> -->
                    <!-- <input type="address" placeholder="ADDRESS" style="border-radius: 20px; padding: 5px; width: 419px; color:brown; font-weight: bold;"><br> -->
                   <!-- <br> -->
                    <textarea name="address" id="" name="address" cols="48" rows="2" style="border-radius: 20px; padding: 10px; font-weight: bold; font-size: 15px; color:brown" placeholder="Address"></textarea> <br>
                    <!-- <input type="number" placeholder="ADHAR-NUMBER" style="border-radius: 20px; padding: 5px; color:brown; font-weight: bold;"><br> -->
                    <button type="submit" style="border-radius: 10px; margin-left: 35%;">Submit</button>
                </form>
            </div>
     </div>
    


</body>
</html>