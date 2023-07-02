<!DOCTYPE html>
<html lang="en">
<?php
include 'C:\xampp\htdocs\food-rescue\db_connect.php';
session_start();

  if($_SESSION['username']==null)
  {
    header("location: index.php");
  }
  ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="check_poor_area_.css">
    <title>Hello, world!</title>
    <style>
   table {border-collapse: collapse; font-family: helvetica;  background: linear-gradient(90deg, cyan,khaki, aquamarine); margin-left: 17%;}
   td, th {border:  1px solid;
      padding: 10px;
      min-width: 200px;
      /* color:crimson; */
      
      font-weight: bolder;
      /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
      /* backgr/ound:coral; */
      /* background-color:; */
      color:navy;
      box-sizing: border-box;
      text-align: left;
}
</style>
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
  height: 49px;
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
  height: 49px;
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

  </head>
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
<table>
    <tr>
        <th style="color:black">Organisation Name</th>
        <th style="color:black">Volunteer Name</th>
        <th style="color:black">Date & Time</th>
        <th style="color:black">Quantity of food provided</th>
        <th style="color:black">Delivery Status</th>
       
        
    </tr>
<?php
   
        // if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        //   session_start();
        // include 'C:\xampp\htdocs\food-rescue\db_connect.php';
        // $address2=$_POST["address2"];
        //  $sql="select * from poor_dynamic where  address='$address2'";
        // $result=mysqli_query($conn,$sql);
        /*echo $sql;
        echo '<br>';
        echo $_SESSION["address"];
        echo '<br>';*/
        
        $sql2="select * from signup where ID='$_SESSION[id]' ";
        
        // echo ;
        $res1=mysqli_query($conn,$sql2);
       
        $ch=0;
        while($row=$res1->fetch_assoc()){
          $ch=$row['name'];
        }
        //echo $ch;
        /*echo $result->num_rows;
        echo '<br>';
        echo $res1->num_rows;
        echo '<br>';
        echo $_SESSION["volunteer"];
        echo '<br>';*/
        // echo $_SESSION["volunteer"];
        /*if($result->num_rows>0)
        { 
            while($row1=$res1->fetch_assoc()){
                while($row=$result->fetch_assoc())
            {
                $population=$row["population"];
                if($population>=$_SESSION["volunteer"]){
                $x="UPDATE poor_dynamic set population='$population'-('$_SESSION[volunteer]') where address='$address2'";
                $sql4= "DELETE FROM food WHERE address='$_SESSION[address]' AND city='$_SESSION[city]'";
                $res4=mysqli_query($conn,$sql4);
                $res2=mysqli_query($conn,$x);
                $_SESSION["volunteer"]=0;
                }else{
                  $x="UPDATE poor_dynamic set population=0 where address='$address2'";
                  $sql4= "UPDATE food set estimated_serves=-'$population'+('$_SESSION[volunteer]') WHERE address='$_SESSION[address]' AND city='$_SESSION[city]'";
                  $res4=mysqli_query($conn,$sql4);
                  $res2=mysqli_query($conn,$x);
                $_SESSION["volunteer"]=0;
                header("Location: http://localhost/food-rescue/vol_poor_check.php");
                exit();
                }
                
            }
            }
            echo "Changes has been updated";
        
         
        }
        else
        {
            echo "no result found";
        }*/
        $sql3="select * from vol_allotment having name='$ch'";
        $res3=mysqli_query($conn,$sql3);
         //echo $res3->num_rows;
        if($res3 && $res3->num_rows>0)
        { 
         while($row3=$res3->fetch_assoc()){
            echo "<tr><td>".$row3["name"]."</td><td>".$row3["volunteer_name"]."</td><td>".$row3["Date"]."</td><td>".$row3["Food_Quan"]."</td><td>".$row3["del_status"]."</td></tr>";
         }
        }
        
         
     }
       
        ?>
        </table>
        
    </form>

</body>
</html>