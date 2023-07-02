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
            <th>name</th>
            <th>address</th>
            <th>volunteer_name</th>
               
        </tr>
    <?php
    
        
          session_start();
        include 'db_connect.php';
        // echo $_SESSION["username"];
        echo '<br>';
        $sql1="SELECT * FROM signup where username= '$_SESSION[username]' "; 
        $res1=mysqli_query($conn,$sql1);
        $x=0;
        // echo $res1->num_rows;
        while($row=$res1->fetch_assoc())
            {
                 $x=$row["name"];
            }
       /*echo $sql;
       echo '<br>';
       echo $result->num_rows;
       echo '<br>';*/
      //  echo $_SESSION["add"];
      //  echo '<br>';
      //  echo $x;
      //  echo '<br>';
        $add=$_SESSION["add"];
        $y="NULL";
       $sql2="INSERT into `vol_allotment` (`name`,`address`,`volunteer_name`) VALUES ('$x','$add','$y')";
       $res2=mysqli_query($conn,$sql2);
      //  echo $sql2;
       echo '<br>';
       $sql="SELECT * FROM vol_allotment where name= '$x' "; 
        $result=mysqli_query($conn,$sql);
        // echo $result->num_rows;
       echo '<br>';
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["volunteer_name"]."</td><</tr>";
            }
        }
        else
        {
            echo "no result found";
        }
        
    
    ?>
    </table>
</body>
</html>