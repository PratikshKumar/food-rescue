<html>
<?php
include 'db_connect.php';
session_start();

// echo $_SESSION["id"];
  if($_SESSION['username']==null)
  {
    header("location: index.php");
  }
if($_SERVER["REQUEST_METHOD"]=="POST")
{

  
echo ' <script> alert(" A volunteer will reach out to you soon " ) </script> ';
// $address=$_POST["address"];
// $_SESSION["add"]=$address;
// $city=$_POST["city"];

$org=$_SESSION["id"];
// $org=

$contactss=$_POST["contact"];
$quantity=$_POST["quantity"];
$people=$quantity*2;
$sql="INSERT INTO `food`(`org_id`,`contact_no.`, `quantity`, `estimated_serves`) VALUES ('$org','$contactss','$quantity','$people')";
$result=mysqli_query($conn,$sql);
$sql2="SELECT name FROM signup where ID='$org' ";
$result2=mysqli_query($conn,$sql2);
$org_name=0;
while($row=$result2->fetch_assoc()){
   $org_name=$row['name']; 
}

$sql3="INSERT INTO `vol_allotment`(`name`,`orgn_id`) VALUES ('$org_name', '$org')";
$result3=mysqli_query($conn,$sql3);
header("location: check_poor_area_.php");
}
?>
<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>food form</title>
  <style>
    body {
        background-color: #F3EBF6;
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 40px;
        color: green;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 30px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C2,green);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        padding-top: 15px;
    }
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
    }
        
        
  </style>
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

<body style="  background: linear-gradient(90deg, #0ccda3 10%, #C1FCD3 100%) ; padding-top:40px; margin-top:0">
                      
<nav>
  <div class="menu">
    <div class="container">
      <ul class="inner-menu">
        <li><a href="check_poor_area_.php" style="background-color:orange">HOME</a>
          <!-- <ul class="dropdown">
            <li><a href="#">Dropdown-menu</a></li>
            <li><a href="#">Dropdown-menu</a></li>
          </ul> -->
        </li>
        <li><a href="./donate.html">DONATE</a>
          
        </li>
        <li><a href="logout.php">LOGOUT</a>
          <!-- <ul class="dropdown">
            <li><a href="#">Dropdown-menu</a></li>
            <li><a href="#">Dropdown-menu</a></li>
          </ul> -->
        </li>
        
        <!-- <li><a href="#" >SIGN-IN</a>
          <ul class="dropdown">
            <li><a href="./login.php">ORGANISATION SIGNIN</a></li>
            <li><a href="./volunteer_login.php">VOLUNTEER-SIGNIN</a></li>
            
          </ul>
        </li> -->
        
      </ul>
    </div>
  </div>
</nav>



  <div class="main" style="background-color:">
    <p class="sign" align="center">VOLUNTEER REQUEST</p>
    <form class="form1" method="post">
      <!-- <input class="un " name="address" type="text" align="center" placeholder="Address">
      <select name="city" id="city" class="un" align="center"> -->
     </select>
      <input class="pass" name="contact" type="number" align="center" placeholder="contact no">
      <input class="pass" name="quantity" type="number" align="center" placeholder="estimated quantity(in kg)">
      <button type="submit" class="submit" align="center" style="background-color:green">Submit</a>
    </form>
            
                
    </div>
    
</body>

</html>

    