<!doctype html>
<html lang="en">
<?php
include 'db_connect.php';
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
  </head>
  <body style="  background: rgb(2,0,36);
    background: linear-gradient(90deg,  #0ccda3 4%, rgba(2,0,36,1) 100%);;">
    <!-- \---------------- -->
  <div class="card" style="background: rgb(2,0,36);
    background: linear-gradient(270deg, rgba(75,242,89,1) 1%, rgba(2,0,36,1)100%);; margin-top: 120px; ">
    <div style="margin-top: 0px; height:300px;">
    <div >
      <form method="post" action="./poor_data.php" >
  <input class="btn btn-primary" type="submit" value="check the needy areas here" style="background-color: #4CAF50;">
    <div class="dropdown">
      <select name="city" id="city">
      <?php
    include 'db_connect.php';
    
    $sql="select * from survey";
   
    $check=array($check);
    $result=mysqli_query($conn,$sql);
    while($row=$result->fetch_assoc())
    {
      if(!in_array($row["city"],$check))
      {
        array_push($check, $row["city"]);
        echo "<option value=".$row["city"].">". $row["city"]."</option>";
      }
    }
    ?>
  </select>
  
    </div>
    </form>

    
    </div>
    

    <!-- -------------------------------- -->



    
  </div>
 
    <div style="margin-bottom:180px;">
      <form method="post" action="./food_available.php">
    <input class="btn btn-primary" type="submit" value="Show total food available" style="background-color: #4CAF50" name="city">
    <div class="dropdown">
      <select name="city" id="city">
      <?php
    include 'db_connect.php';
    
    $sql="select * from survey";
   
    $check=array($check);
    $result=mysqli_query($conn,$sql);
    while($row=$result->fetch_assoc())
    {
      if(!in_array($row["city"],$check))
      {
        array_push($check, $row["city"]);
        echo "<option value=".$row["city"].">". $row["city"]."</option>";
      }
    }
    ?>
  </select>
  
    </div>
      </form>
    

   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
  </body>
</html>