<?php
include 'db_connect.php';
session_start();

  if($_SESSION['username']==null)
  {
    header("location:index.php");
  }
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_SESSION["name"];
    $org_name=$_SESSION["org_name"];
    $sql_4="UPDATE vol_allotment set volunteer_name='$name' where name='$org_name'";
    $res_4=mysqli_query($conn,$sql_4);
    $poor_address=$_POST['address'];
    $population=$_POST['population'];
    //echo $_SESSION["org_serves"];
    $temp=$population-$_SESSION['org_serves'];
    echo $_SESSION['org_serves']; 
    if($temp<0)
    {$temp=0;
      $_SESSION['org_serves']=-$population+$_SESSION['org_serves'];
    }
    else
    {
      $_SESSION['org_serves']=0;
    }
    $sql="UPDATE poor_dynamic set population='$temp' where address='$poor_address'";
    mysqli_query($conn,$sql);
    $z=1;
    $sql_4="UPDATE vol_allotment set date=NOW(),Food_Quan='$_SESSION[org_serves]',del_status='$z' where name='$_SESSION[org_name]' and volunteer_name='$_SESSION[name]'";
    mysqli_query($conn,$sql_4);
    $sql_4="UPDATE food set chk1='$z' where sno='$_SESSION[sno]'";
    mysqli_query($conn,$sql_4);
    if($_SESSION['org_serves']>0)
    {
      header("location: poor_dynamic2.php");
    }
    else
    {
    header("location: vol_poor_check.php");
    }
  }
  
?>