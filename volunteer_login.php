<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'db_connect.php';
$username=$_POST["username"];
$password=$_POST["password"];
$_SESSION["user"]=$username;
$t=1;


$sql="select * from volunteer_signup where username='$username'and password='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num)
{
    echo "you are logged in";

    
    $_SESSION['username']="$username";
    $_SESSION["name"]=0;
    while($row=$result->fetch_assoc()){
      $_SESSION["name"]=$row['name'];
    }
    header("location:vol_poor_check.php");
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
<body >
    <h1 style="color: brown;"><i>WELCOME FOOD WASTE WARRIOR</i></h1>
    <br><br><br><br><br><br>
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