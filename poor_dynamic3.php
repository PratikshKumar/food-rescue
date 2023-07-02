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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {border-collapse: collapse; font-family: helvetica}
td, th {border:  1px solid;
      padding: 10px;
      min-width: 200px;
      background: white;
      box-sizing: border-box;
      text-align: left;
}
.container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }
    .form-control {
      margin-top: 20px;
      width: 300px;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid gray;
    }
    label {
      margin-top: 20px;
      font-size: 16px;
    }
    .submit-button {
      margin-top: 20px;
      padding: 10px 20px;
      border-radius: 5px;
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
  </style>
  <link rel="icon" href="H_favicon.ico">
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
        $address=$_POST["address"];
        $_SESSION["address"]=$address;
        $sql3="SELECT city,address,quantity FROM food where city= '$_SESSION[city]' AND address='$address'"; 
        $res3=mysqli_query($conn,$sql3);
        echo  $_SESSION["volunteer"];
        while($x=$res3->fetch_assoc()){
          $_SESSION["volunteer"]+=$x["quantity"];
        }
        echo '<br>';
        echo  $_SESSION["volunteer"];
        $sql="SELECT city,address,population FROM poor_dynamic where city= '$_SESSION[city]' "; 
        $result=mysqli_query($conn,$sql);
        $sql2="SELECT quantity FROM food where address='$address'";
        $res1=mysqli_query($conn,$sql2);
        if($result->num_rows>0)
        { 
            
        while($r=$result->fetch_assoc())
        {
            echo "<tr><td>".$r["city"]."</td><td>".$r["address"]."</td><td>".$r["population"]."</td><</tr>";
            //$x="UPDATE population_dynamic set population=population-2*$row['quantity'] where city=$row['city'] AND address=$row['address']";
            
        }
        }
        else
        {
            echo "no result found";
        }
     }
        ?>
        </table>
        <div >
      <form method="post" action="./poor_updation&org_removal.php" >
      <input class="btn btn-primary" type="submit" value="Select  address of population to be supplied" style="background-color: #4CAF50">
    <div class="dropdown">
      <select name="address2" id="address2">
      <?php
        
    include 'C:\xampp\htdocs\food-rescue\db_connect.php';
    
    $sql="select * from poor_dynamic where city='$_SESSION[city]'";
    $check=array($check);
    $result=mysqli_query($conn,$sql);
    while($row=$result->fetch_assoc())
    {
      if(!in_array($row["address"],$check))
      {
        array_push($check, $row["address"]);
        echo "<option value=".$row["address"].">". $row["address"]."</option>";
      }
    }
   
    ?>
  </select>
  </form>
    </div>

</body>
</html>