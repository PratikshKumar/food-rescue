<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0025)https://www.aahar.org.in/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
include 'db_connect.php';
session_start();

  if($_SESSION['username']==null)
  {
    header("location:index.php");
  }
  ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Donate Surplus Food - Aahar NGO Indore, MP</title>
    <meta name="description" content="Aahar is the best NGO to donate food in Indore and nearby areas. Donate surplus food to the poor through &#39;&#39;Aahar&#39;&#39; mobile app. To know more about Aahar Foundation visit here!">
    <meta name="keywords" content="Aahar Indore MP,  Donate Surplus food with Aahar,Food conservation, Aahar App, Best NGO in Indore, Donate Food In Indore, Donate Food Through Aahar">
    <meta name="og:url" content="http://aahar.org.in/">
    <!-- main styling file  -->
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/site.css">
    <link rel="stylesheet" href="./drop.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/aahar-style.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/animate.min.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/bootstrap.min.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/cubeportfolio.min.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/dscountdown.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/font-awesome.min.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/owl.carousel.min.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/settings.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/simplebar.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/swiper.min.css">
    <link rel="stylesheet" href="./Donate Surplus Food Rescue/header-style.css">
    <link rel="icon" href="https://www.aahar.org.in/images/favicon.png">
    <link href="./Donate Surplus Food Rescue/animate.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="./Donate Surplus Food Rescue/analytics.js.download"></script><script type="text/javascript" async="" src="./Donate Surplus Food Rescue/js"></script><script async="" src="./Donate Surplus Food Rescue/js(1)"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-211701658-1');
    </script>
<style type="text/css" media="screen">#comodoTL {display:block;font-size:8px;padding-left:18px;}</style>

</head>
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



<style>
.carousell-container {
  background: linear-gradient(90deg, #0ccda3 40%, #C1FCD3 65%);
  padding: 20px;
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;
  overflow: hidden;
  height: 400px;
}

.carousell {
  display: flex;
  width: 100%;
  animation: carousellAnimation 24s infinite;
}

.slidePk {
  flex: 0 0 100%;
}

.big-box {
  display: flex;
  background: #fff;
  padding: 20px;
  margin-bottom: 20px;
  transition: transform 3s ease;
  border: 1px solid #ccc; /* Add a border */
  height: 300px;
}

.big-box:hover {
  transform: scale(1.05);
}

.big-box .team-member {
  display: flex;
  align-items: center;
  width: 100%;
}

.big-box .photopk {
  flex: 0 0 30%;
  overflow: hidden;
}

.big-box .photopk img {
  width: 100%;
  height: auto;
  transition: transform 3s ease;
}

.big-box:hover .photopk img {
  transform: scale(1.1);
}

.big-box .infopk {
  flex: 0 0 70%;
  padding-left: 20px;
}

.big-box .infopk .textpk {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.big-box h3 {
  margin: 0 0 5px;
}

.big-box p {
  margin: 0;
}

/* Add a style for the border between left and right sections */
.big-box .team-member:before {
  content: "";
  display: block;
  width: 1px;
  background-color: #ccc;
  height: 80%;
  margin-right: 20px;
}

@keyframes carousellAnimation {
  0%, 16.66% {
    transform: translateX(0);
  }
  20%, 36.66% {
    transform: translateX(-100%);
  }
  40%, 56.66% {
    transform: translateX(-200%);
  }
  60%, 76.66% {
    transform: translateX(-300%);
  }
  80%, 100% {
    transform: translateX(-400%);
  }
}

</style>
<body data-spy="scroll" data-target=".scrolly" data-offset="50">
    


<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}

//]]>
</script>


<script src="./Donate Surplus Food Rescue/WebResource.axd" type="text/javascript"></script>


<script src="./Donate Surplus Food Rescue/ScriptResource.axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(1).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(2).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(3).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(4).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(5).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(6).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(7).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(8).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(9).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(10).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(11).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(12).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(13).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(14).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(15).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(16).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(17).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(18).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(19).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(20).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(21).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(22).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(23).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(24).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(25).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(26).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(27).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(28).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(29).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(30).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(31).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(32).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(33).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(34).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(35).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(36).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(37).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(38).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(39).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(40).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(41).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(42).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(43).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(44).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(45).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(46).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(47).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(48).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(49).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(50).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(51).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(52).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(53).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(54).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(55).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(56).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(57).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(58).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(59).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(60).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(61).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(62).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(63).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(64).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(65).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(66).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(67).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(68).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(69).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(70).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(71).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(72).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(73).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(74).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(75).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(76).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(77).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(78).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(79).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(80).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(81).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(82).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(83).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(84).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(85).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(86).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(87).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(88).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(89).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(90).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(91).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(92).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(93).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(94).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(95).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(96).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(97).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(98).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(99).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(100).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(101).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(102).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(103).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(104).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(105).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(106).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(107).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(108).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(109).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(110).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(111).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(112).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(113).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(114).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(115).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(116).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(117).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(118).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(119).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(120).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(121).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(122).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(123).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(124).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(125).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(126).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(127).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(128).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(129).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(130).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(131).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(132).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(133).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(134).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(135).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(136).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(137).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(138).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(139).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(140).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(141).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(142).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(143).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(144).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(145).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(146).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(147).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(148).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(149).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(150).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(151).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(152).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(153).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(154).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(155).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(156).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(157).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(158).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(159).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(160).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(161).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(162).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(163).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(164).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(165).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(166).axd" type="text/javascript"></script>
<script src="./Donate Surplus Food Rescue/ScriptResource(167).axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[

</script>






<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334">
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('sd', 'form1', [], [], [], 90, '');
//]]>
</script>

        <div class="loader" style="display: none;">
            <div class="loader-inner">
                <div class="spinner multicolor">
                    <div class="spinner-container container1">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                        <div class="circle4"></div>
                    </div>
                    <div class="spinner-container container2">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                        <div class="circle4"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader ends-->
        <!-- Main-Navigation -->
        <div class="container" id="top">
            <header id="main-navigation">
    
  </header>
        </div>
        <!-- Main-Navigation ends -->
 

        <div class="clearfix"></div>
        <div id="main-content">
            <div class="wrapper">
                <!--Ful Screen hero Banner-->

                <div style="  background: linear-gradient(90deg, #0ccda3 40%, #C1FCD3 60%) ">
                       
<nav>
  <div class="menu">
    <div class="container">
      <ul class="inner-menu">
        <li><a href="" style="background-color:orange">HOME</a>
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





                <div  style="height: 90%; width:80%;" >
                <section class="main-slider" id="home" style=" padding-top: 10%; margin-left:24%; ">
      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel"> 
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li> 
          <li data-target="#myCarousel" data-slide-to="3" class=""></li> 
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner"> 
          
            <!-- Slide 4 -->
          <div class="item"> <img src="./Donate Surplus Food Rescue/photu1.jpg" style="width:100%; border-radius: 20px; " alt="">
            <div class="carousel-caption">
                <h1>Blooming Smiles by Facilitating Surplus Food Donations <span>Since 2016</span> </h1>  
            </div>
            <!-- /.carousel-caption --> 
          </div>
          <!-- /Slide4 --> 
          <!-- Slide 1 : Active -->
          <div class="item active"> <img src="Donate Surplus Food Rescue/photu1.jpg" style="width: 100%; border-radius: 20px;" alt="">
            <div class="carousel-caption">
              <h1>Every year, India wastes food, worth about <span>RS 92,000</span> crores.</h1>
              <!--<h6>On the other hand, 1 in every 9 people on our planet go to bed hungry each night.</h6>--> 
            </div>
            <!-- /.carousel-caption --> 
          </div>
          <!-- /Slide1 --> 
          <!-- Slide 2 -->
          <div class="item"> <img src="./Donate Surplus Food Rescue/photu1.jpg" style="width: 100%; border-radius: 20px;" alt="">
            <div class="carousel-caption">
              <h1>Your <span>surplus</span> can become one person’s meal for the entire day.</h1>
              <!--<h6>Let’s start by donating the most essential element of life – FOOD</h6>--> 
            </div>
            <!-- /.carousel-caption --> 
          </div>
          <!-- /Slide2 --> 
          
          <!-- Slide 3 -->
          <div class="item"> <img src="./Donate Surplus Food Rescue/photu1.jpg" style="width: 100%; border-radius: 20px;" alt="">
            <div class="carousel-caption">
              <h1>Don’t let <span>surplus</span> food go to waste.</h1>
              <!--<h6>Let’s use surplus food to ensure no child sleeps hungry! Join the fight against hunger!</h6>--> 
            </div>
            <!-- /.carousel-caption --> 
          </div>
          <!-- /Slide3 --> 
          
         
          
        </div>
        <!-- /.carousel-inner --> 
        
        <!-- Controls -->
        <div class="control-box"> <a class="left carousel-control"  role="button" data-slide="prev"> <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
           <span class="sr-only">Previous</span> </a> 
           <a class="right carousel-control" href="" role="button" data-slide="next">
             <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span> 
            </a> </div>
        <!-- /.control-box --> 
        
      </div>

      
      <!-- /#myCarousel --> 
    </section>

    </div>
                </div>
                <!-- /.main-slider -->
                <!-- end Ful Screen hero Banner -->
                <div class="clearfix"></div>
                <!--Services 3 column-->
                
                <section class="bglight" style="  background: linear-gradient(90deg, #0ccda3 40%, #C1FCD3 60%);"  >
      <div class="container" >
        <div class="row">
          <div class="col-md-10 col-sm-push-1">
            <div class="intro-text center wow fadeInUp top60 bottom60" style="visibility: visible; animation-name: fadeInUp;"> <span class="heading-title bottom25">Welcome</span>
              <h2 class="bottom15" style="color:black; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Welcome to our<span class="defaultcolor" style="color:crimson"> food rescue</span> website! <br> <br>
                 We are dedicated to tackling food waste and food insecurity in our community.
                  We collect surplus food from local restaurants, cafes, and other organizations, and distribute it to those in need. <br> <br>
                   Our goal is to reduce food waste while ensuring that everyone in our city has access to <span class="defaultcolor" style="color:crimson" >nutritious meals.</span> 
                    With our website, you can easily learn about our mission, get involved, and make a difference in your community.

                
                <span class="defaultcolor"></span>
                
                <!--<a href="javascript:void(0)" class="button default">choose your best</a>--> 
              <a id="whoweare"></a> </div>
          </div>
        </div>
      </div>
    </section>
                
                <!--Single intro with background-->
                
                <div style="   background: linear-gradient(0deg, #0ccda3 40%, #C1FCD3 60%); padding-bottom:40px">
                <!-- <section class="padding bg-intro bgintro-seven parallaxie" style="background-image: url(&quot;https://www.aahar.org.in/images/bgintro-seven.jpg&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 909.911px;"> -->
      
                  <section class="padding bg-intro bgintro-seven parallaxie" style=" background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 909.911px;">
      
                  <div class="col-sm-12">
        <h2 class="bottom15 text-center top10">Who We <span class="defaultcolor">Are</span></h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-6 wow fadeInLeft bottom40" style="visibility: visible; animation-name: fadeInLeft;"><img src="./Donate Surplus Food Rescue/chart4.png"></div>
          <div class="col-md-5 col-sm-6 text-right" style="color:brown; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            <div class="intro-text wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"> <span class="heading-title bottom15" style="color: beige;"> The Beginning</span>
              <h2 class="darkcolor">Our Approach</h2>
              <p class="darkcolor" >
                <h2 class="bottom15 "> Using our website, you can easily get involved in our food rescue program. Whether you want to donate food, volunteer your time, or make a financial contribution, we make it easy for you to support our mission. <br><br> We also provide resources and information about food waste and food insecurity, so you can learn more about these important issues and become an advocate for change. <br><br> Together, we can create a more sustainable and equitable food system for everyone. Thank you for visiting our website and for your support!
                </h2>



            
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="icon_box equalheight top60 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; height: 222.8px;"> <img src="./Donate Surplus Food Rescue/sandwich.png">
              <h4 class="text-capitalize darkcolor bottom10"><a href="javascript:void(0)">Surplus Food</a></h4>
              <hr>
              <h2 class="bottom15">
              <p class="no_bottom" style="color: aliceblue; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Any surplus food prepared during functions/ parties can be donated through ​'Food Rescue' Website.</p>
              </h2>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="icon_box equalheight top60 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; height: 222.8px;"> <img src="./Donate Surplus Food Rescue/salad.png">
              <h4 class="text-capitalize darkcolor bottom10"><a href="javascript:void(0)">Fresh Food</a></h4>
              <hr>
              <h2 class="bottom15">
              <p class="no_bottom" style="color: aliceblue; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Fresh food prepared at select locations can be donated to feed hungry people by contributing in cash.</p>
              </h2></div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="icon_box equalheight top60 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; height: 222.8px;"> <img src="./Donate Surplus Food Rescue/groceries.png">
              <h4 class="text-capitalize darkcolor bottom10"><a href="javascript:void(0)">Packed Food</a></h4>
              <hr>
              <h2 class="bottom15">
              <p class="no_bottom" style="color: aliceblue; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Packed food nearing expiry can be advertised to be sold to consumers at discounted price.</p>
              </h2>
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </section>

    <div style="margin-left:38%; ">
    <form method="post" action="./poor_data_org.php" >
      <div style="display:flex" >
      
  <input  type="submit" value="CHECK THE NEEDY AREAS HERE" style=" border-radius:35px; width:370px; margin-top:5px; background-color:#ff9b; font-weight:bold; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color:darkred; font-size:x-large">
  
  
    <div class="dropdown" style="margin-left: 15%; margin-top: 1.1%; ">
    
    <div class="select" > <span style=" color:darkslategrey ;font-size:0.5em"> Select City</span>
      
      <select name="city" id="city" style="border-radius:15px; color:brown">
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
    </div>
      </div>
  </form>

  
    </div>
    
<br>
<br>
    <div class="col-md col-sm">
            <div class="intro-text center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <span class="heading-title darkcolor " style="color:aliceblue; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight:bold">Our Volunteers - The Backbone </span>
              <h2 class="darkcolor heading_space" style="color:aliceblue; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight:bold">Spreading Smiles All Over </h2>
              <div style=" margin-top:10px;" >
    <a href="./food_form.php">
    <button class="btn" style="width:240px; font-weight:bold; font-size:20px" >NEED A VOLUNTEER? </button>
    
    </a>
    <br> <br>
    <a href="./poor_updation&org_removal.php"><button class="btn" style="width:240px; font-weight:bold; font-size:20px">Food Status</button> </a>
    </div>
            </div>
          </div>

                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>

                <!--Blog info -->
                <!-- <section class="top60">
      <div class="container">
        <div class="row box-info-wrap">
          <div class="col-md-6 col-sm-6 nopadding">
            <div class="box-info container-padding equalheight wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
              <div class="intro-text"> <span class="heading-title bottom15"> Success Stories </span>
                <h2 class="darkcolor">BBC News</h2>
                <p>BBC News Hindi covered Food Rescue in their episode. The video received great response and garnered appreciation from all over the world. The social entrepreneurship practices are receiving recognition from the honorable Prime Minister Narendra Modi himself, in the form of launch of the ‘self4society’ portal. This led to people from all over the world inquiring about Food Rescue and wanting to adapt it in their respective places.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 nopadding">
            <div class="box-info wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
              <div class="image">
                <iframe width="100%" height="315" src="./Donate Surplus Food Rescue/qlu5Fwbd5Qs.html" class="img_border" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section> -->
                <!--blog Info ends-->
                <div class="clearfix" ></div>
                <section class="top60" id="whatwedo" style="background:linear-gradient(to right, #F3E99F, #B9EDDD); margin-top: 0px; padding-top: 30px; " >
      <div class="container" >
          <div class="row">
        <div class="col-md-6 col-sm-6 nopadding">
          <div class="box-info">
            <div class="image"> <img alt="image" src="./Donate Surplus Food Rescue/img2.jpg" class="equalheight bottom40" style="height: 391.275px;"> </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 nopadding">
          <div class="box-info container-padding equalheight wow fadeInRight" style="visibility: visible; animation-name: fadeInRight; height: 391.275px;">
            <div class="intro-text"> <span class="heading-title  bottom15"> Behind The Scenes </span>
              <h2><span>How Food Rescue Works</span></h2>
              <p class="whitecolor">
              
              </p><p>​<span style="color: #ff9b0f; font: bold">'Food Rescue'</span> a social platform that brings together volunteers and donors interested in donating food. Aimed at eliminating food wastage, 'Food Rescue' is a unique concept started in India.</p>
              <p> Basic objective of 'Food Rescue' involves – </p>
              <ul>
                <li>Using excess cooked food to feed the hungry and needy </li>
                <li>Connecting individuals interested in procuring as well as donating food at different establishments.</li>
              </ul>
              <p id="howitworks"></p>
              <p>With a network of individuals and community organizations, 'Food Rescue' is helping distribute food to those who really need it.</p>
              <p></p>
            </div>
          </div>
        </div>
      </div></div>
    </section>
                <div class="clearfix"></div>
                <!-- <section class="top60">
      <div class="container">
        <div class="row box-info-wrap">
          <div class="col-md-6 col-sm-6 nopadding">
            <div class="box-info container-padding equalheight wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft; height: 364px;">
              <div class="intro-text"> <span class="heading-title bottom25"> For The Users </span>
                <h2 class="darkcolor">Aahar Application</h2>
                <p>                
                </p><p>Designed with the users in mind, ​<span style="color: #ff9b0f; font: bold">​<span style="color: #ff9b0f; font: bold">'Aahar'</span></span> is an intuitive, easy-to-use application. Here are the steps to use 'Aahar' for food procurement and donation.</p>
                <ol>
                  <li>Enter the App using OTP verification.</li>
                  <li>Fill up your profile</li>
                  <li>You can now Donate food / Procure food for distribution.</li>
                </ol>
                <p></p>
                  <p><a href="https://itunes.apple.com/in/app/aahar-daan/id1164477317?mt=8" target="_blank"> <img src="./Donate Surplus Food Rescue/app-icon.png"></a> &nbsp;  &nbsp; <a href="https://play.google.com/store/apps/details?id=com.info.aahar&amp;hl=en" target="_blank"> <img src="./Donate Surplus Food Rescue/app-icon2.png"></a> </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 nopadding">
            <div class="box-info wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
              <div class="image"> <img src="./Donate Surplus Food Rescue/process.jpg" class="equalheight" style="height: 364px;"> </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

                <!--stats with circles-->
                <!-- <section id="donation" class="donationbg top60"> -->
      <!-- <div class="container">
        <div class="row top60  bottom60">
          <div class="col-md-2 col-sm-1"></div>
          <div class="col-md-8 col-sm-10">
            <div class="intro-text center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <span class="heading-title bottom25">Food Donation</span> 
              <h2 class=" bottom25">Facts  Sheet</h2>
            </div>
          </div>
          <div class="col-md-2 col-sm-1"></div>
          <div class="row circular-wrap text-center">
            <div class="col-md-4 col-sm-4 top50 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <div id="circle" class="circle" data-value="0.77"><canvas width="262" height="262" style="height: 210px; width: 210px;"></canvas> <strong>53+</strong> </div>
              <h4 class="darkcolor top50 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> Places</h4>
            </div>
            <div class="col-md-4 col-sm-4 top30">
              <div id="circletwo" class="circle" data-value="0.96"><canvas width="262" height="262" style="height: 210px; width: 210px;"></canvas> <strong>250+</strong> </div>
              <h4 class="darkcolor top50 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Volunteers</h4>
            </div>
            <div class="col-md-4 col-sm-4 top50 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <div id="circlethree" class="circle" data-value="0.75"><canvas width="262" height="262" style="height: 210px; width: 210px;"></canvas> <strong>1 Million+</strong> </div>             
              <h4 class="darkcolor top50"> People Benefited</h4>
            </div>
          </div>
        </div>
      </div> -->
    <!-- </section> -->
                <!--stats with circles ends-->

                <!--cities
                <section class="top60">
      <div class="container">
        <div class="row box-info-wrap">
          <div class="col-md-12 nopadding">
            <div class="box-info container-padding equalheight wow fadeInLeft">
              <div class="intro-text"> <span class="heading-title bottom25"> Running Cities </span>
                <h2 class="darkcolor">Aahar Started</h2>
                <p>                
                 <span class='text-capitalize darkcolor bottom10'>Bhopal </span>, <span class='text-capitalize darkcolor bottom10'>Chhindwara </span>, <span class='text-capitalize darkcolor bottom10'>Dewas </span>, <span class='text-capitalize darkcolor bottom10'>Guna </span>, <span class='text-capitalize darkcolor bottom10'>Indore </span>, <span class='text-capitalize darkcolor bottom10'>Jabalpur </span>, <span class='text-capitalize darkcolor bottom10'>Ahmedabad </span>, <span class='text-capitalize darkcolor bottom10'>Rajkot </span>, <span class='text-capitalize darkcolor bottom10'>Kolkata </span>, <span class='text-capitalize darkcolor bottom10'>Agra </span>, <span class='text-capitalize darkcolor bottom10'>Gurgaon </span>, <span class='text-capitalize darkcolor bottom10'>Hyderabad </span>, <span class='text-capitalize darkcolor bottom10'>Singrauli </span>, <span class='text-capitalize darkcolor bottom10'>Ujjain </span>, <span class='text-capitalize darkcolor bottom10'>Navi Mumbai </span>, <span class='text-capitalize darkcolor bottom10'>Mumbai </span>, <span class='text-capitalize darkcolor bottom10'>Kota </span>, <span class='text-capitalize darkcolor bottom10'>Udaipur </span> 
                </p>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>
-->
                <!--cities ends-->

                <!--Gallery Grid-->

                <!-- <section id="gallery" class="top60">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-2"> </div>
          <div class="col-md-6 col-sm-8">
            <div class="intro-text center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <span class="heading-title darkcolor bottom25">Our Volunteers - The Backbone </span>
              <h2 class="darkcolor heading_space">Spreading Smiles All Over </h2>
            </div>
          </div>
          <div class="col-md-3 col-sm-2"> </div>
        </div>
        <div class="row">
         
      </div>-->
        
      </div>
    </section> 
                <!--Gallery Grid ends-->

                <!--Team 02 Slider-->
                <section id="ourteam" class="bglight" style="background: linear-gradient(90deg, #0ccda3 40%, #C1FCD3 60%);">
      <div class="container"  >
        <div class="row ">
          <div class="col-md-12">
            <div class="intro-text center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <span class="heading-title bottom25">PEOPLE BEHIND CONCEPT OF Food Rescue</span>
              <h2 class="darkcolor text-capitalize heading_space">Team</h2>
            </div>
          </div>
        </div>
        <!-- ----------------------------- -->


        <div class="carousell-container" >
        <div class="carousell" >


          <div class="slidePk" >
            <div class="big-box" >
              <div class="team-member">
                <div class="photopk">
                  <img src="./pb2.jpg" alt="Team Member 1">
                </div>
                <div class="infopk" style="display: flex;" >
                  <div class="textpk">
                    <h2><b>Pratham Bhatia</b></h2>
                    <br> 
                    <b><h3>Team Leader</h3></b>
                    
                  </div>
                  <div class="textpk" style="margin-left: 20px;">
                    <p>Contribution: </p> 
                    <p>* Implemented Security and Authentication </p>
                    <p>* Overall project management and coordination. </p>
                       <p>* Design and architecture of the application. </p>
                       <p>* Implemented core functionality and critical features. </p>
                       <p>* Conducted code reviews and ensured coding standards. </p>
                        * Provided guidance and support to other team members.
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Repeat the slidePk structure for other team members -->

          <!-- Repeat the slidePk structure for other team members -->

          <div class="slidePk">
            <div class="big-box">
              <div class="team-member">
                <div class="photopk">
                  <img src="./rkb.jpg" alt="Team Member 1">
                </div>
                <div class="infopk" style="display: flex;" >
                  <div class="textpk">
                    
                    <h2><b>Rohan Kumar</b></h2>
                    <br> 
                    <b><h3>Backend Developer</h3></b>
                    
                  </div>
                  <div class="textpk" style="margin-left: 20px;">
                    <p>Contribution: </p>
                    <p>* Designed and developed the database schema. </p>
                    <p>* Implemented core backend functionality.</p>
                       <p>* Implemented data access and storage using SQL queries. </p>
                       <p>* Implemented core functionality and critical features. </p>
                       
                       <p>* Optimized backend code for performance and scalability.</p>
                        <!-- Provided guidance and support to other team members. -->
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Repeat the slidePk structure for other team members -->

          <div class="slidePk">
            <div class="big-box">
              <div class="team-member">
                <div class="photopk">
                  <img src="./pk.jpg" alt="Team Member 1">
                </div>
                <div class="infopk" style="display: flex;" >
                  <div class="textpk">

                    <h2><b>Pratiksh</b></h2>
                    <br> 
                    <b><h3>Frontend and</h3></b>
                    <b><h3> Backend Developer</h3></b>
                    
                  </div>
                  <div class="textpk" style="margin-left: 20px;">
                    <p>Contribution: </p> 
                    <p>* Implemented frontend and backend integration.</p>
                       <p>* Collaborated with backend developers to display data </p>
                       <p>* Assisted in debugging & resolving backend issues. </p>
                       <p>* Developed specific backend modules. </p>
                       <p>* Assisted with backend development tasks as needed.</p>
                       <!-- <p>* Ensured coding standards. </p> -->
                   
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Repeat the slidePk structure for other team members -->


          <div class="slidePk">
            <div class="big-box">
              <div class="team-member">
                <div class="photopk">
                  <img src="./gv2.jpg" alt="Team Member 1">
                </div>
                <div class="infopk" style="display: flex;" >
                  <div class="textpk">
                  
                    <h2><b>Girisha Vashisht</b></h2>
                    <br> 
                    <b><h3>FrontEnd Developer</h3></b>
                    
                  </div>
                  <div class="textpk" style="margin-left: 20px;">
                    <p>Contribution: </p> 
                    <p>* Developed the user interface and responsive design </p>
                       <!-- <p>* Implemented responsive design </p> -->
                      <p>* Ensured cross-browser compatibility.</p>
                       <p>* Handled user input validation and form submissions. </p>
                       <p>* Conducted testing related to the frontend. </p>
                       <p>* Prepared technical documentation for the project.</p>
                       <!-- <p>* Collaborated with team to ensure documentation accuracy.</p> -->
                        <!-- Provided guidance and support to other team members. -->
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Repeat the slidePk structure for other team members -->


          <div class="slidePk">
            <div class="big-box">
              <div class="team-member">
                <div class="photopk">
                  <img src="./vg.jpg" alt="Team Member 1">
                </div>
                <div class="infopk" style="display: flex;" >
                  <div class="textpk">
                    
                    
                    <h2><b>Vanshika Garg</b></h3>
                    <br> 
                    <b><h3>Quality Assurance</h3></b>
                    <h3>Tester</h3></b>
                    
                  </div>
                  <div class="textpk" style="margin-left: 20px;">
                    <p>Contribution: </p> 
                    <p>* Performed system testing and usability testing. </p>
                       <p>* Collaborated with the QA team for bug tracking.</p>
                       <p>* Performed functional testing of the application.</p>
                       <!-- <p>* Collaborated with the backend and frontend teams to ensure overall quality. </p> -->
                       <p>* Maintained project documentation and version control.</p>
                       <p>* Assisted with other tasks related to project documentation.</p>
                        <!-- Provided guidance and support to other team members. -->
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Repeat the slidePk structure for other team members -->
          



          

          






        </div>
      </div>



        <!-- --------------------------------- -->
        




        <a id="joinus"></a> </div>
    </section>
                <!--Team 02 Slider ends-->
              
            </div>
        </div>
      
        


        <!-- jQuery Files -->
        <script src="./Donate Surplus Food Rescue/jquery-3.2.1.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/bootstrap.min.js.download"></script>

        <!--to view items on reach-->
        <script src="./Donate Surplus Food Rescue/jquery.appear.js.download"></script>

        <!--Swiper slider-->
        <script src="./Donate Surplus Food Rescue/swiper.jquery.min.js.download"></script>

        <!--Owl slider-->
        <script src="./Donate Surplus Food Rescue/owl.carousel.min.js.download"></script>

        <!--number counters-->
        <script src="./Donate Surplus Food Rescue/jquery-countTo.js.download"></script>

        <!--equalize the same heights of block-->
        <script src="./Donate Surplus Food Rescue/jquery.matchHeight-min.js.download"></script>

        <!--for parallax bgs-->
        <script src="./Donate Surplus Food Rescue/parallaxie.js.download"></script>

        <!--for CountDown Timer-->
        <script src="./Donate Surplus Food Rescue/dscountdown.min.js.download"></script>

        <!--Open popup fancybox on images-->
        <script src="./Donate Surplus Food Rescue/jquery.fancybox.min.js.download"></script>

        <!--Portfolio galleries-->
        <script src="./Donate Surplus Food Rescue/jquery.cubeportfolio.min.js.download"></script>

        <!--Progressbar s in circle forms-->
        <script src="./Donate Surplus Food Rescue/circle-progress.min.js.download"></script>

        <!--scrollbar on blocks-->
        <script src="./Donate Surplus Food Rescue/simplebar.js.download"></script>

        <!--Video Pops support for youtube, viemo etc-->
        <script src="./Donate Surplus Food Rescue/viedobox_video.js.download"></script>

        <!--youtube background video-->
        <script src="./Donate Surplus Food Rescue/jquery.mb.YTPlayer.min.js.download"></script>

        <!-- Type It -->
        <script src="./Donate Surplus Food Rescue/typeit.min.js.download"></script>

        <!-- WOW Transitions -->
        <script src="./Donate Surplus Food Rescue/wow.min.js.download"></script>

        <!--Revolution SLider-->
        <script src="./Donate Surplus Food Rescue/jquery.themepunch.tools.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/jquery.themepunch.revolution.min.js.download"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="./Donate Surplus Food Rescue/revolution.extension.actions.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/revolution.extension.carousel.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/revolution.extension.kenburn.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/revolution.extension.layeranimation.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/revolution.extension.migration.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/revolution.extension.navigation.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/revolution.extension.parallax.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/revolution.extension.slideanims.min.js.download"></script>
        <script src="./Donate Surplus Food Rescue/revolution.extension.video.min.js.download"></script>

        <!--Synx scripts-->
        <script src="./Donate Surplus Food Rescue/functions.js.download"></script>

        <!--Google map API-->
        <script src="./Donate Surplus Food Rescue/js(2)"></script>
        <script src="./Donate Surplus Food Rescue/map.js.download"></script>
        <script src="./Donate Surplus Food Rescue/jquery-1.3.2.min.js.download" type="text/javascript"></script>
        <script src="./Donate Surplus Food Rescue/jquery.backgroundPosition.js.download" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                $('#midground').css({ backgroundPosition: '0px 0px' });
                $('#foreground').css({ backgroundPosition: '0px 0px' });
                $('#background').css({ backgroundPosition: '0px 0px' });
                $('#midground').animate({
                    backgroundPosition: "(-10000px -2000px)"
                }, 240000, 'linear');
                $('#foreground').animate({
                    backgroundPosition: "(-10000px -2000px)"
                }, 120000, 'linear');
                $('#background').animate({
                    backgroundPosition: "(-10000px -2000px)"
                }, 480000, 'linear');
            });
        </script>
        <script>
            // Carousel Auto-Cycle
            $(document).ready(function () {
                $('.carousel').carousel({
                    interval: 6000
                })
            });

        </script>
        <script>
            //Corresponding blog post: https://danielcwilson.com/blog/2015/08/animations-part-3 

            var a = document.querySelectorAll('.bubbles');
            a = Array.prototype.slice.call(a);

            a.forEach(function (el, i, ra) {
                var to = {
                    x: Math.random() * (i % 2 === 0 ? -11 : 11),
                    y: Math.random() * 12
                }

                el.animate([
                  { transform: 'translate(0,0)' },
                  { transform: 'translate(' + to.x + 'rem,' + to.y + 'rem)' }
                ], {
                    duration: (Math.random() + 1) * 2000,
                    direction: 'alternate',
                    fill: 'both',
                    iterations: Infinity,
                    easing: 'ease-in-out'
                });
            });

            var button = document.querySelector('input');

            button.addEventListener('click', function (e) {
                //Get all the AnimationPlayers
                var players;
                if (typeof document.getAnimations === 'function') {
                    players = document.getAnimations();
                } else {
                    players = document.timeline.getAnimations();
                }
                if (players && players.length) {
                    console.log(players);
                    var action;
                    if (players[0].playState === 'running') {
                        action = 'pause';
                    } else if (players[0].playState === 'paused') {
                        action = 'play';
                    } else {
                        return;
                    }
                    players.forEach(function (player, i, ra) {
                        player[action](); //player.pause() or player.play()

                    });

                    button.value = (action === 'play') ? 'Pause All' : 'Play All';
                } else {
                    console.log('No active animations');
                }
            });


        </script>
    
<script type="text/javascript">
//<![CDATA[
var Page_ValidationSummaries =  new Array(document.getElementById("ValidationSummary1"));
var Page_Validators =  new Array(document.getElementById("r1"), document.getElementById("RequiredFieldValidator1"), document.getElementById("RequiredFieldValidator3"), document.getElementById("RegularExpressionValidator1"), document.getElementById("RequiredFieldValidator2"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var r1 = document.all ? document.all["r1"] : document.getElementById("r1");
r1.controltovalidate = "txtName";
r1.errormessage = "Enter Your Name.";
r1.display = "None";
r1.validationGroup = "vg";
r1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
r1.initialvalue = "";
var RequiredFieldValidator1 = document.all ? document.all["RequiredFieldValidator1"] : document.getElementById("RequiredFieldValidator1");
RequiredFieldValidator1.controltovalidate = "txtPhoneNo";
RequiredFieldValidator1.errormessage = "Enter Your Mobile No";
RequiredFieldValidator1.display = "None";
RequiredFieldValidator1.validationGroup = "vg";
RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator1.initialvalue = "";
var RequiredFieldValidator3 = document.all ? document.all["RequiredFieldValidator3"] : document.getElementById("RequiredFieldValidator3");
RequiredFieldValidator3.controltovalidate = "txtEmailId";
RequiredFieldValidator3.errormessage = "Enter Your EmailId";
RequiredFieldValidator3.display = "None";
RequiredFieldValidator3.validationGroup = "vg";
RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator3.initialvalue = "";
var RegularExpressionValidator1 = document.all ? document.all["RegularExpressionValidator1"] : document.getElementById("RegularExpressionValidator1");
RegularExpressionValidator1.controltovalidate = "txtEmailId";
RegularExpressionValidator1.errormessage = "Please Enter Valid Email ID";
RegularExpressionValidator1.display = "None";
RegularExpressionValidator1.validationGroup = "vg";
RegularExpressionValidator1.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
RegularExpressionValidator1.validationexpression = "\\w+([-+.\']\\w+)*@\\w+([-.]\\w+)*\\.\\w+([-.]\\w+)*";
var RequiredFieldValidator2 = document.all ? document.all["RequiredFieldValidator2"] : document.getElementById("RequiredFieldValidator2");
RequiredFieldValidator2.controltovalidate = "txtAddress";
RequiredFieldValidator2.errormessage = "Enter Your Address";
RequiredFieldValidator2.display = "None";
RequiredFieldValidator2.validationGroup = "vg";
RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator2.initialvalue = "";
var ValidationSummary1 = document.all ? document.all["ValidationSummary1"] : document.getElementById("ValidationSummary1");
ValidationSummary1.showmessagebox = "True";
ValidationSummary1.showsummary = "False";
ValidationSummary1.validationGroup = "vg";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}


        
(function(id) {
    var e = document.getElementById(id);
    if (e) {
        e.dispose = function() {
            Array.remove(Page_ValidationSummaries, document.getElementById(id));
        }
        e = null;
    }
})('ValidationSummary1');

document.getElementById('r1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('r1'));
}
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.FilteredTextBoxBehavior, {"ValidChars":"1,2,3,4,5,6,7,8,9,0","id":"FilteredTextBoxExtender1"}, null, null, $get("txtPhoneNo"));
});

document.getElementById('RequiredFieldValidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator1'));
}

document.getElementById('RequiredFieldValidator3').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator3'));
}

document.getElementById('RegularExpressionValidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RegularExpressionValidator1'));
}

document.getElementById('RequiredFieldValidator2').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator2'));
}
//]]>
</script>

    <script type="text/javascript"> //<![CDATA[
        var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
        document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
        //]]></script><script src="./Donate Surplus Food Rescue/trustlogo.js.download" type="text/javascript"></script>
    <script language="JavaScript" type="text/javascript">
        // TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_md_167x42.png", "POSDV", "none");
    // </script>
    <!-- <a href="javascript:if(window.open(&#39;https://secure.trust-provider.com/ttb_searcher/trustlogo?v_querytype=W&amp;v_shortname=POSDV&amp;v_search=https://www.aahar.org.in/&amp;x=6&amp;y=5&#39;,&#39;tl_wnd_credentials&#39;+(new Date()).getTime(),&#39;toolbar=0,scrollbars=1,location=1,status=1,menubar=1,resizable=1,width=374,height=660,left=60,top=120&#39;)){};tLlB(tLTB);" onmouseover="tLeB(event,&39;https://secure.trust-provider.com/ttb_searcher/trustlogo?v_querytype=C&amp;v_shortname=POSDV&amp;v_search=https://www.aahar.org.in/&amp;x=6&amp;y=5&#39;,&#39;tl_popupPOSDV&#39;)" onmousemove="tLXB(event)" onmouseout="tLTC(&#39;tl_popupPOSDV&#39;)" ondragstart="return false;"><img src="./Donate Surplus Food Rescue/positivessl_trust_seal_md_167x42.png" border="0" onmousedown="return tLKB(event,&#39;https://secure.trust-provider.com/ttb_searcher/trustlogo?v_querytype=W&amp;v_shortname=POSDV&amp;v_search=https://www.aahar.org.in/&amp;x=6&amp;y=5&#39;);" oncontextmenu="return tLLB(event);"></a><div id="tl_popupPOSDV" name="tl_popupPOSDV" style="position:absolute;z-index:0;visibility: hidden;background-color: transparent;overflow:hidden;" onmouseover="tLoB(&#39;tl_popupPOSDV&#39;)" onmousemove="tLpC(&#39;tl_popupPOSDV&#39;)" onmouseout="tLpB(&#39;tl_popupPOSDV&#39;)">&nbsp;</div> -->



</body></html>