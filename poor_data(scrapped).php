
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {border-collapse: collapse; font-family: helvetica;  background: linear-gradient(90deg, cyan,khaki, aquamarine); margin-left: 27%;}
        
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

<body style="   background: linear-gradient(70deg, #0ccda9 40%, #C1FCD3 60%);">
    <div style="   background: linear-gradient(270deg, #00FFCA 40%, #C1FCA9 60%); padding-bottom:100px; padding-top:70px; ; margin-top:0" >
    <table>
      <div >
        <tr>
            <th style="color:black">City</th>
            <th style="color:black">Address</th>
            <th style="color:black">Population </th>
           
            
        </tr>
        </div>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        include 'C:\xampp\htdocs\food-rescue\db_connect.php';
        $city=$_POST["city"];
        $sql="SELECT * FROM survey where city= '$city' "; 
        $result=mysqli_query($conn,$sql);
       
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row["city"]."</td><td>".$row["address"]."</td><td>".$row["population"]."</td></tr>";
            }

        }
        else
        {
            echo "no result found";
        }
    }
        ?>
        </table>
        </div>

        

</body>
</html>