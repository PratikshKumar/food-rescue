<!DOCTYPE html>
<html lang="en">
<?php
include 'C:\xampp\htdocs\food-rescue\db_connect.php';
session_start();

  if($_SESSION['username']==null)
  {
    header("location:index.php");
  }
  ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>city</th>
        <th>address</th>
        <th>population</th>
       
        
    </tr>
<?php
   
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
          session_start();
        include 'C:\xampp\htdocs\food-rescue\db_connect.php';
        $address2=$_POST["address2"];
        // echo $address2.' '.$_SESSION["address"];
        // echo "</br>";
        // echo $address2;
        // echo $_SESSION["city"];
         $sql="select * from poor_dynamic where  address='$address2'";
          
       // $sql="select * from `poor_dynamic`";
        $result=mysqli_query($conn,$sql);
         
      
       
        
        $sql2="select * from food where address='$_SESSION[address]' AND city='$_SESSION[city]'";
        $res1=mysqli_query($conn,$sql2);
        
        if($result->num_rows>0)
        { 
            while($row1=$res1->fetch_assoc()){
                while($row=$result->fetch_assoc())
            {
                $population=$row["population"];
                $x="UPDATE poor_dynamic set population='$population'-(2*'$row1[quantity]') where address='$address2' AND '$population'-(2*'$row1[quantity]')>0";
                $res2=mysqli_query($conn,$x);
               
               // $y="DELETE from food where city='$row[city]' AND address='$row[address]'";
                //$res3=mysqli_query($conn,$y);
                
            }
            }
            echo "Changes has been updated";
        
         
        }
        else
        {
            echo "no result found";
        }
     }
        ?>
        </table>
</body>
</html>