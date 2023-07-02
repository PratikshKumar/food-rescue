<!DOCTYPE html>
<html lang="en">
<?php
include 'db_connect.php';
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
    <form method="post" action="./poor_data.php" >
        <input class="btn btn-primary" type="submit" value="check the needy areas here" style="background-color: #4CAF50;">
          <div class="dropdown">
            <select name="city" id="city">
            <?php
          include 'db_connect.php';
          $sql="select * from survey";
          $check=array();
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
</body>
</html>