<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'db_connect.php';
// $name=$_POST["name"];
// $username=$_POST["username"];
// $password=$_POST["password"];
$address=$_POST["address"];
// $confirm=$_POST["confirm"];
// $cont=$_POST["contact"];
$citi=$_POST["city"];

// $id=$_POST["ID"];
$pop=$_POST["population"];
// $sql="select * from signup where username='$username'";
// $result=mysqli_query($conn,$sql);
// $num=mysqli_num_rows($result);
// if($num)
// {
//     echo "this email is already used by someone else";
//     exit();
// }
// $passlen=strlen((string)$password);
// if($passlen<6)
// {
//     echo '<script language="javascript">';
//     echo 'alert("password is too short")';
//     echo '</script>';
//   exit();
// }
// if($password!=$confirm)
// {
//     echo '<script language="javascript">';
//     echo 'alert("password is not matching with confirm password")';
//     echo '</script>';
//   exit();
// }
    $sql="insert into `poor_dynamic` ( `address`, `population`,`city`) values ('$address','$pop','$citi')";
    mysqli_query($conn,$sql);

    $sql="insert into `survey` ( `address`, `population`,`city`) values ('$address','$pop','$citi')";
    mysqli_query($conn,$sql);
    echo "record added successfully";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap");
:root {
  --space-root: 1rem;
  --space-xs: calc(var(--space-root) / 2);
  --space-s: calc(var(--space-root) / 1.5);
  --space-m: var(--space-root);
  --space-l: calc(var(--space-root) * 1.5);
  --space-xl: calc(var(--space-root) * 2);
  --color-primary: mediumslateblue;
  --color-secondary: black;
  --color-tertiary: hotpink;
  --base-border-radius: 0.25rem;
  --ease: cubic-bezier(0.075, 0.82, 0.165, 1);
  --duration: 350ms;
  --font-family: "Roboto", sans-serif;
  --font-size: 1.25rem;
}

* {
  box-sizing: border-box;
}

body {
  display: grid;
  place-items: center;
  margin: 0;
  height: 100vh;
  padding: var(--space-m);
  font-size: var(--font-size);
  font-family: var(--font-family);
  line-height: 1.2;
  background-color: var(--color-tertiary);
}

a {
  color: var(--color-primary);
}
a:focus {
  color: var(--color-secondary);
}

h2 {
  font-weight: 700;
  font-size: calc(var(--font-size) * 1.5);
}

.form {
  position: relative;
  width: 100%;
  max-width: 450px;
  margin: 0 auto;
  transform: skewY(-5deg) translateY(10%) scale(0.94);
  transition: box-shadow var(--duration) var(--ease), transform var(--duration) var(--ease);
}
.form:before, .form:after {
  content: "";
  position: absolute;
  pointer-events: none;
  background-color: #ebebeb;
  width: 25%;
  height: 100%;
  transition: background-color var(--duration) var(--ease), transform var(--duration) var(--ease);
}
.form:before {
  top: 0;
  right: calc(100% - 1px);
  transform-origin: 100% 100%;
  transform: skewY(-35deg) scaleX(-1);
  z-index: -1;
}
.form:after {
  top: 0;
  left: calc(100% - 1px);
  transform-origin: 0 0;
  transform: skewY(-35deg) scaleX(-1);
  z-index: 2;
}
.form:hover, .form:focus-within {
  transform: scale(1.0001);
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.1);
}
.form:hover:before, .form:hover:after, .form:focus-within:before, .form:focus-within:after {
  background-color: white;
  transform: skewY(0);
}

.form-inner {
  padding: var(--space-xl);
  background-color: white;
  z-index: 1;
}
.form-inner > * + * {
  margin-top: var(--space-xl);
}

.input-wrapper:focus-within label {
  color: var(--color-secondary);
}
.input-wrapper:focus-within .icon {
  background-color: var(--color-secondary);
}
.input-wrapper:focus-within input {
  border-color: var(--color-secondary);
}
.input-wrapper + .input-wrapper {
  margin-top: var(--space-l);
}

.input-group {
  position: relative;
}
.input-group input {
  border-radius: var(--base-border-radius);
  padding-left: calc(var(--space-s) + 60px);
}
.input-group .icon {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  border-top-left-radius: var(--base-border-radius);
  border-bottom-left-radius: var(--base-border-radius);
  pointer-events: none;
}

label {
  font-size: calc(var(--font-size) / 1.65);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.065rem;
  display: block;
  margin-bottom: var(--space-xs);
  color: var(--color-primary);
}

.icon {
  display: flex;
  align-items: center;
  flex: 0 1 auto;
  padding: var(--space-m);
  background-color: var(--color-primary);
}
.icon svg {
  width: 1.25em;
  height: 1.25em;
  fill: white;
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  transition: transform var(--duration) var(--ease);
}

input {
  flex: 1 1 0;
  width: 100%;
  outline: none;
  padding: var(--space-m);
  font-size: var(--font-size);
  font-family: var(--font-family);
  color: var(--color-secondary);
  border: 2px solid var(--color-primary);
}
input:focus {
  color: var(--color-primary);
}

.btn-group {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.btn-group > * + * {
  margin-left: var(--space-s);
}

.btn {
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: space-between;
  outline: none;
  padding: var(--space-m) var(--space-l);
  cursor: pointer;
  border: 2px solid transparent;
  border-radius: var(--base-border-radius);
}

.btn--primary {
  font-size: calc(var(--font-size) / 1.65);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.065rem;
  background-color: var(--color-primary);
  border-color: var(--color-primary);
  color: white;
}
.btn--primary:focus {
  background-color: var(--color-secondary);
  border-color: var(--color-secondary);
}

.btn--text {
  font-size: calc(var(--font-size) / 1.5);
  padding: 0;
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
<body style="  background: linear-gradient(90deg, #0ccda3 40%, #C1FCD3 60%);">
<nav>
  <div class="menu">
    <div class="container">
      <ul class="inner-menu">
        <li><a href="vol_poor_check.php" style="background-color:orange">HOME</a>
          <!-- <ul class="dropdown">
            <li><a href="#">Dropdown-menu</a></li>
            <li><a href="#">Dropdown-menu</a></li>
          </ul> -->
        </li>
        <li><a href="./donate2.html">DONATE</a>
          
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
    


    
<form class="form" method="post"  autocomplete="off">
    <div class="form-inner">
      <h2>User Login</h2>
      <!-- <div class="input-wrapper">
        <label for="login-username">ID</label>
        <div class="input-group"><span class="icon">
            <svg viewBox="0 0 24 24">
              <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"></path>
            </svg></span>
          <input type="text" id="login-username" name="ID" data-lpignore="true"/>
        </div>
      </div> -->
      <div class="input-wrapper">
        <label>address</label>
        <div class="input-group"><span class="icon">
            <svg viewBox="0 0 24 24">
              <path d="M11.83,1.73C8.43,1.79 6.23,3.32 6.23,3.32C5.95,3.5 5.88,3.91 6.07,4.19C6.27,4.5 6.66,4.55 6.96,4.34C6.96,4.34 11.27,1.15 17.46,4.38C17.75,4.55 18.14,4.45 18.31,4.15C18.5,3.85 18.37,3.47 18.03,3.28C16.36,2.4 14.78,1.96 13.36,1.8C12.83,1.74 12.32,1.72 11.83,1.73M12.22,4.34C6.26,4.26 3.41,9.05 3.41,9.05C3.22,9.34 3.3,9.72 3.58,9.91C3.87,10.1 4.26,10 4.5,9.68C4.5,9.68 6.92,5.5 12.2,5.59C17.5,5.66 19.82,9.65 19.82,9.65C20,9.94 20.38,10.04 20.68,9.87C21,9.69 21.07,9.31 20.9,9C20.9,9 18.15,4.42 12.22,4.34M11.5,6.82C9.82,6.94 8.21,7.55 7,8.56C4.62,10.53 3.1,14.14 4.77,19C4.88,19.33 5.24,19.5 5.57,19.39C5.89,19.28 6.07,18.92 5.95,18.6V18.6C4.41,14.13 5.78,11.2 7.8,9.5C9.77,7.89 13.25,7.5 15.84,9.1C17.11,9.9 18.1,11.28 18.6,12.64C19.11,14 19.08,15.32 18.67,15.94C18.25,16.59 17.4,16.83 16.65,16.64C15.9,16.45 15.29,15.91 15.26,14.77C15.23,13.06 13.89,12 12.5,11.84C11.16,11.68 9.61,12.4 9.21,14C8.45,16.92 10.36,21.07 14.78,22.45C15.11,22.55 15.46,22.37 15.57,22.04C15.67,21.71 15.5,21.35 15.15,21.25C11.32,20.06 9.87,16.43 10.42,14.29C10.66,13.33 11.5,13 12.38,13.08C13.25,13.18 14,13.7 14,14.79C14.05,16.43 15.12,17.54 16.34,17.85C17.56,18.16 18.97,17.77 19.72,16.62C20.5,15.45 20.37,13.8 19.78,12.21C19.18,10.61 18.07,9.03 16.5,8.04C14.96,7.08 13.19,6.7 11.5,6.82M11.86,9.25V9.26C10.08,9.32 8.3,10.24 7.28,12.18C5.96,14.67 6.56,17.21 7.44,19.04C8.33,20.88 9.54,22.1 9.54,22.1C9.78,22.35 10.17,22.35 10.42,22.11C10.67,21.87 10.67,21.5 10.43,21.23C10.43,21.23 9.36,20.13 8.57,18.5C7.78,16.87 7.3,14.81 8.38,12.77C9.5,10.67 11.5,10.16 13.26,10.67C15.04,11.19 16.53,12.74 16.5,15.03C16.46,15.38 16.71,15.68 17.06,15.7C17.4,15.73 17.7,15.47 17.73,15.06C17.79,12.2 15.87,10.13 13.61,9.47C13.04,9.31 12.45,9.23 11.86,9.25M12.08,14.25C11.73,14.26 11.46,14.55 11.47,14.89C11.47,14.89 11.5,16.37 12.31,17.8C13.15,19.23 14.93,20.59 18.03,20.3C18.37,20.28 18.64,20 18.62,19.64C18.6,19.29 18.3,19.03 17.91,19.06C15.19,19.31 14.04,18.28 13.39,17.17C12.74,16.07 12.72,14.88 12.72,14.88C12.72,14.53 12.44,14.25 12.08,14.25Z"></path>
            </svg></span>
          <input type="text" id="address" name="address" data-lpignore="true"/>
        </div>
      </div>

      <div class="input-wrapper">
        <label>population</label>
        <div class="input-group"><span class="icon">
            <svg viewBox="0 0 24 24">
              <path d="M11.83,1.73C8.43,1.79 6.23,3.32 6.23,3.32C5.95,3.5 5.88,3.91 6.07,4.19C6.27,4.5 6.66,4.55 6.96,4.34C6.96,4.34 11.27,1.15 17.46,4.38C17.75,4.55 18.14,4.45 18.31,4.15C18.5,3.85 18.37,3.47 18.03,3.28C16.36,2.4 14.78,1.96 13.36,1.8C12.83,1.74 12.32,1.72 11.83,1.73M12.22,4.34C6.26,4.26 3.41,9.05 3.41,9.05C3.22,9.34 3.3,9.72 3.58,9.91C3.87,10.1 4.26,10 4.5,9.68C4.5,9.68 6.92,5.5 12.2,5.59C17.5,5.66 19.82,9.65 19.82,9.65C20,9.94 20.38,10.04 20.68,9.87C21,9.69 21.07,9.31 20.9,9C20.9,9 18.15,4.42 12.22,4.34M11.5,6.82C9.82,6.94 8.21,7.55 7,8.56C4.62,10.53 3.1,14.14 4.77,19C4.88,19.33 5.24,19.5 5.57,19.39C5.89,19.28 6.07,18.92 5.95,18.6V18.6C4.41,14.13 5.78,11.2 7.8,9.5C9.77,7.89 13.25,7.5 15.84,9.1C17.11,9.9 18.1,11.28 18.6,12.64C19.11,14 19.08,15.32 18.67,15.94C18.25,16.59 17.4,16.83 16.65,16.64C15.9,16.45 15.29,15.91 15.26,14.77C15.23,13.06 13.89,12 12.5,11.84C11.16,11.68 9.61,12.4 9.21,14C8.45,16.92 10.36,21.07 14.78,22.45C15.11,22.55 15.46,22.37 15.57,22.04C15.67,21.71 15.5,21.35 15.15,21.25C11.32,20.06 9.87,16.43 10.42,14.29C10.66,13.33 11.5,13 12.38,13.08C13.25,13.18 14,13.7 14,14.79C14.05,16.43 15.12,17.54 16.34,17.85C17.56,18.16 18.97,17.77 19.72,16.62C20.5,15.45 20.37,13.8 19.78,12.21C19.18,10.61 18.07,9.03 16.5,8.04C14.96,7.08 13.19,6.7 11.5,6.82M11.86,9.25V9.26C10.08,9.32 8.3,10.24 7.28,12.18C5.96,14.67 6.56,17.21 7.44,19.04C8.33,20.88 9.54,22.1 9.54,22.1C9.78,22.35 10.17,22.35 10.42,22.11C10.67,21.87 10.67,21.5 10.43,21.23C10.43,21.23 9.36,20.13 8.57,18.5C7.78,16.87 7.3,14.81 8.38,12.77C9.5,10.67 11.5,10.16 13.26,10.67C15.04,11.19 16.53,12.74 16.5,15.03C16.46,15.38 16.71,15.68 17.06,15.7C17.4,15.73 17.7,15.47 17.73,15.06C17.79,12.2 15.87,10.13 13.61,9.47C13.04,9.31 12.45,9.23 11.86,9.25M12.08,14.25C11.73,14.26 11.46,14.55 11.47,14.89C11.47,14.89 11.5,16.37 12.31,17.8C13.15,19.23 14.93,20.59 18.03,20.3C18.37,20.28 18.64,20 18.62,19.64C18.6,19.29 18.3,19.03 17.91,19.06C15.19,19.31 14.04,18.28 13.39,17.17C12.74,16.07 12.72,14.88 12.72,14.88C12.72,14.53 12.44,14.25 12.08,14.25Z"></path>
            </svg></span>
          <input type="text" id="population" name="population" data-lpignore="true"/>
        </div>
      </div>

      <div class="input-wrapper">
        <label>city</label>
        <div class="input-group"><span class="icon">
            <svg viewBox="0 0 24 24">
              <path d="M11.83,1.73C8.43,1.79 6.23,3.32 6.23,3.32C5.95,3.5 5.88,3.91 6.07,4.19C6.27,4.5 6.66,4.55 6.96,4.34C6.96,4.34 11.27,1.15 17.46,4.38C17.75,4.55 18.14,4.45 18.31,4.15C18.5,3.85 18.37,3.47 18.03,3.28C16.36,2.4 14.78,1.96 13.36,1.8C12.83,1.74 12.32,1.72 11.83,1.73M12.22,4.34C6.26,4.26 3.41,9.05 3.41,9.05C3.22,9.34 3.3,9.72 3.58,9.91C3.87,10.1 4.26,10 4.5,9.68C4.5,9.68 6.92,5.5 12.2,5.59C17.5,5.66 19.82,9.65 19.82,9.65C20,9.94 20.38,10.04 20.68,9.87C21,9.69 21.07,9.31 20.9,9C20.9,9 18.15,4.42 12.22,4.34M11.5,6.82C9.82,6.94 8.21,7.55 7,8.56C4.62,10.53 3.1,14.14 4.77,19C4.88,19.33 5.24,19.5 5.57,19.39C5.89,19.28 6.07,18.92 5.95,18.6V18.6C4.41,14.13 5.78,11.2 7.8,9.5C9.77,7.89 13.25,7.5 15.84,9.1C17.11,9.9 18.1,11.28 18.6,12.64C19.11,14 19.08,15.32 18.67,15.94C18.25,16.59 17.4,16.83 16.65,16.64C15.9,16.45 15.29,15.91 15.26,14.77C15.23,13.06 13.89,12 12.5,11.84C11.16,11.68 9.61,12.4 9.21,14C8.45,16.92 10.36,21.07 14.78,22.45C15.11,22.55 15.46,22.37 15.57,22.04C15.67,21.71 15.5,21.35 15.15,21.25C11.32,20.06 9.87,16.43 10.42,14.29C10.66,13.33 11.5,13 12.38,13.08C13.25,13.18 14,13.7 14,14.79C14.05,16.43 15.12,17.54 16.34,17.85C17.56,18.16 18.97,17.77 19.72,16.62C20.5,15.45 20.37,13.8 19.78,12.21C19.18,10.61 18.07,9.03 16.5,8.04C14.96,7.08 13.19,6.7 11.5,6.82M11.86,9.25V9.26C10.08,9.32 8.3,10.24 7.28,12.18C5.96,14.67 6.56,17.21 7.44,19.04C8.33,20.88 9.54,22.1 9.54,22.1C9.78,22.35 10.17,22.35 10.42,22.11C10.67,21.87 10.67,21.5 10.43,21.23C10.43,21.23 9.36,20.13 8.57,18.5C7.78,16.87 7.3,14.81 8.38,12.77C9.5,10.67 11.5,10.16 13.26,10.67C15.04,11.19 16.53,12.74 16.5,15.03C16.46,15.38 16.71,15.68 17.06,15.7C17.4,15.73 17.7,15.47 17.73,15.06C17.79,12.2 15.87,10.13 13.61,9.47C13.04,9.31 12.45,9.23 11.86,9.25M12.08,14.25C11.73,14.26 11.46,14.55 11.47,14.89C11.47,14.89 11.5,16.37 12.31,17.8C13.15,19.23 14.93,20.59 18.03,20.3C18.37,20.28 18.64,20 18.62,19.64C18.6,19.29 18.3,19.03 17.91,19.06C15.19,19.31 14.04,18.28 13.39,17.17C12.74,16.07 12.72,14.88 12.72,14.88C12.72,14.53 12.44,14.25 12.08,14.25Z"></path>
            </svg></span>
          <input type="text" id="city" name="city" data-lpignore="true"/>
        </div>
      </div>


      <div class="btn-group">
        <button class="btn btn--primary" type="submit">Sign in</button>
      </div>
    </div>
  </form>
</body>
</html>