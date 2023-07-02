
<?php
include 'db_connect.php';
session_start();

  if($_SESSION['username']==null)
  {
    header("location: index.php");
  }
 
    
      echo '<script language="javascript">';
      echo 'alert("There may be extra food left after donating.You can select more organisations if you wish!")';
      echo '</script>';
    
  
  ?>
<!DOCTYPE html>
<!-- saved from url=(0029)https://www.akshayapatra.org/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Food Rescue-NGO in India Supporting Food &amp; Education of Children</title>
<meta name="title" content="Food Rescue-NGO in India Supporting Food &amp; Education of Children">
<meta name="keywords" content="Food Rescue, Food Rescue foundation, the Food Rescue foundation, tapf, food relief service, Food Rescue india, ngo, ngo in india, charity in india, indian ngo, midday meals ngo, top ngo in india feed the needy, food for education">
<meta name="description" content="Food Rescue is an NGO in India that has dedicated 22 years towards feeding nutritious meals to school children studying in Government &amp; Government-aided schools.">
<meta name="facebook-domain-verification" content="qp3yr5eurs18etnbaq78z58q5h1ntl">
<link rel="shortcut icon" href="https://www.akshayapatra.org/images/sky_favicon.ico" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<meta name="referrer" content="no-referrer-when-downgrade">





<script type="text/javascript" src="./Food Rescue Patra/eidf.es5.js.download" charset="UTF-8" async="async"></script><script type="text/javascript" src="./Food Rescue Patra/cds-pips.js.download" charset="UTF-8" async="async"></script><script type="text/javascript" async="" src="./Food Rescue Patra/js"></script><script src="./Food Rescue Patra/808388669173978" async=""></script><script async="" src="./Food Rescue Patra/fbevents.js.download"></script><script src="./Food Rescue Patra/ytc.js.download" async=""></script><script src="./Food Rescue Patra/bat.js.download" async=""></script><script async="" src="./Food Rescue Patra/tfa.js.download" id="tb_tfa_script"></script><script type="text/javascript" async="" src="https://static.bytedance.com/pixel/sdk.js?sdkid=BOJA10TEUOQ9QM0COR4G"></script><script type="text/javascript" async="" src="./Food Rescue Patra/27f927c53803429598d4d52e13bd8644.js.download"></script><script type="text/javascript" async="" src="./Food Rescue Patra/obtp.js.download"></script><script type="text/javascript" async="" src="./Food Rescue Patra/uwt.js.download"></script><script type="text/javascript" async="" src="./Food Rescue Patra/insight.min.js.download"></script><script type="text/javascript" async="" src="./Food Rescue Patra/analytics.js.download"></script><script async="" src="./Food Rescue Patra/gtm.js.download"></script><script>(function(w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({'gtm.start':
							new Date().getTime(), event: 'gtm.js'});
				var f = d.getElementsByTagName(s)[0],
						j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src =
						'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-NMXNFM');
		</script>


<div style="  background: linear-gradient(90deg, #0ccda3 10%, #C1FCD3 100%) ; padding-top:40px; margin-top:0" >
<h2 style="color:darkblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-left:32%; margin-bottom:20px" >ANALYSIS OF NEEDY PEOPLE</h2>
        
<table>
        <tr>
            <th>Address</th>
            <th>Needy Population</th>
           
            
        </tr>
        <?php
        // echo  $sql_4;
        // echo '<br>';
        
      
        // echo  $_SESSION["volunteer"];
       /* while($x=$res3->fetch_assoc()){
          $_SESSION["volunteer"]+=$x["estimated_serves"];
        }*/
        echo '<br>';
        // echo  $_SESSION["volunteer"];
        $date=(int)date('d');
        $sql="UPDATE poor_dynamic set population=(SELECT population from survey where poor_dynamic.address=survey.address) where poor_dynamic.date!=$date";
        mysqli_query($conn,$sql);
        $sql="UPDATE poor_dynamic set date=$date";
        mysqli_query($conn,$sql);
        $org_city=$_SESSION["org_city"];
        $sql="SELECT * FROM poor_dynamic where city= '$org_city' "; 
        $result=mysqli_query($conn,$sql);
       // echo $result->num_rows;
        if($result->num_rows>0)
        { 
            
        while($r=$result->fetch_assoc())
        {
        ?>
          <tr>
                    <form id='form<?php echo $r['address'] ?>' method='post' action='poor_dynamic_updation.php'></form>
                    <td><input type='text' name='address' style='background: transparent;border: none;' value=<?php echo $r["address"] ?> form='form<?php echo $r['address'] ?>' readonly></td>
                    <td><input type='text' name='population' style='background: transparent;border: none;' value=<?php echo $r["population"]  ?> form='form<?php echo $r['address'] ?>' readonly></td>
                    
                    <td><button type="submit"  form='form<?php echo $r['address'] ?>' class="btn btn-success" >Select</button></a></td>
                    </form>
        </tr>
      <?php    
        }
        }
        else
        {
            echo "no result found";
        }
      
        ?>
        </table>
		</div>












<link rel="stylesheet" href="drop.css">
<link rel="stylesheet" href="testimonial.css">
<link rel="stylesheet" type="text/css" href="./Food Rescue Patra/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./Food Rescue Patra/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="./Food Rescue Patra/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./Food Rescue Patra/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="./Food Rescue Patra/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="./Food Rescue Patra/owl.theme.css">
<link rel="stylesheet" type="text/css" href="./Food Rescue Patra/carousel.css">
<link rel="stylesheet" type="text/css" href="./Food Rescue Patra/style.css">
<link rel="stylesheet" type="text/css" href="./Food Rescue Patra/custom.css">



<style>
.fdy_push_subscription_wraper {
    display: none !important;
    z-index: 0 important;
}
</style>


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
</style>



<meta http-equiv="origin-trial" content="A727AcAeLCei/ZogJHBlJUS63SxP6AeIROo7qXrkjrxkoxBu0eSSmypAHmGYwk4HjBMQp5nxCFODzfVnUIe31AQAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjg4MDgzMTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><script type="text/javascript" async="" src="./Food Rescue Patra/f.txt"></script><script type="text/javascript" async="" src="./Food Rescue Patra/f(1).txt"></script><meta http-equiv="origin-trial" content="A727AcAeLCei/ZogJHBlJUS63SxP6AeIROo7qXrkjrxkoxBu0eSSmypAHmGYwk4HjBMQp5nxCFODzfVnUIe31AQAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjg4MDgzMTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><script attributionsrc="" type="text/javascript" async="" src="./Food Rescue Patra/f(2).txt"></script><script type="text/javascript" src="./Food Rescue Patra/020d4b8a2eee881a5586cf5baa8d3b58.js.download"></script><script type="text/javascript" src="./Food Rescue Patra/feedbackembad-min-3.0.js.download"></script><script type="text/javascript" src="./Food Rescue Patra/notifications.min.js.download"></script><script type="text/javascript" src="./Food Rescue Patra/localforage.min.js.download"></script><script src="./Food Rescue Patra/25150305.js.download" type="text/javascript" async="" data-ueto="ueto_0a050917e4"></script><script type="text/javascript" id="doesDbExist" src="./Food Rescue Patra/dexie.min.js.download"></script></head>
 <body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMXNFM"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

		


<style type="text/css">
	@media (min-width: 992px){
		.dropdown-menu .dropdown-toggle:after{
			border-top: .3em solid transparent;
		    border-right: 0;
		    border-bottom: .3em solid transparent;
		    border-left: .3em solid;
		}

		.dropdown-menu .dropdown-menu{
			margin-left:0; margin-right: 0;
		}

		.dropdown-menu li{
			position: relative;
		}
		.dropdown-menu > li:hover{ background-color: #f1f1f1 }
		.dropdown-menu > li:hover > .submenu{
			display: block;
		}
	}
</style> 





<style>
@media only screen and (max-width: 767px){
	.bannerbtn {
		margin-left: 20% !important;
	}
}
</style>

<!-- <section class="section-2-bg services-main">
<div class="container-fluid">
<div class="row services-row">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 services-col">
<div class="services-div services-bg-1 text-center bgimage-property">
<h4>MID-DAY MEALS <br><span>Nourishing 2 Million children everyday</span> </h4><br>


<div class="content-top-space1">
<a href="https://www.akshayapatra.org/donate-to-midday-meal-programme" class="btn btn-1" style="background:#023964;">SUPPORT US</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 services-col">
<div class="services-div services-bg-2 text-center bgimage-property">
<h4>BREAKFAST PROGRAMME</h4>


<p class="content-top-space">Serving most important meal of the day.</p><br>
<div class="content-top-space1">
<a href="https://www.akshayapatra.org/breakfast-program" class="btn btn-1" style="background:#023964;">SUPPORT US</a>

</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 services-col">
<div class="services-div services-bg-3 text-center bgimage-property">
<h4>ANGANWADI KIT PROGRAMME </h4>
<p class="content-top-space">Care for would-be and new mothers, and children.</p><br>
<div class="content-top-space1">
<a href="https://www.akshayapatra.org/donate-to-anganwadi-feeding" class="btn btn-1" style="background:#023964;">SUPPORT US</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 services-col">
<div class="services-div services-bg-4 text-center bgimage-property">

<h4>FEED THE HOMELESS MOTHERS</h4>

<p class="content-top-space">Provide meals to women without families and basic necessities.</p><br>
<div class="content-top-space1">
<a href="https://www.akshayapatra.org/feed-the-homeless-mothers" class="btn btn-1" style="background:#023964;">SUPPORT US</a>

</div>
</div>
</div>
</div>
</div>
</section> -->





<div style="  background: linear-gradient(90deg, #0ccda3 10%, #C1FCD3 100%) ; padding-top:10px; margin-top:0" >
        <!-- <h2 style="color:darkblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-left:34%; margin-bottom:20px" >ANALYSIS OF ORGANISATIONS</h2> -->
        <section id="donation" class="donationbg top" style="background: linear-gradient(90deg, #0ccda3 10%, #C1FCD3 100%);">
        <div>
		


        </div>


		<div >
		<br><br> <br>
   
    </div>
	<br><br>














<div class="counter-bgimage bgimage-property">
<div class="container">
<div class="row counter-div">
<div class="col-xs-6 col-sm-1 text-center counter-col"></div>
<div class="col-xs-6 col-sm-2 text-center counter-col">
<div class="counter-img">
<img src="./Food Rescue Patra/Covid-19 relief meals_100x100.png" alt="Covid-19 relief meals" class="img-responsive">
</div>
<p class="counter-value top-space10"><span class="count">23.81-Crore</span></p>
<h4 class="counter-title top-space10">COVID-19 Relief Meals</h4>
</div>
<div class="col-xs-6 col-sm-2 text-center counter-col counter1-resSpace">
<div class="counter-img">
<img src="./Food Rescue Patra/Happiness kits_100x100.png" alt="Happiness kits" class="img-responsive">
</div>
<p class="counter-value top-space10"><span class="count">19.65-Lakh</span></p>
<h4 class="counter-title top-space10">Happiness Kits </h4>
</div>
<div class="col-xs-6 col-sm-2 text-center counter-col counter1-resSpace">
<div class="counter-img">
<img src="./Food Rescue Patra/familyhappinesskit-home.png" alt="Family Happiness kits" class="img-responsive">
</div>
<p class="counter-value top-space10"><span class="count">2,13,390-Kits</span></p>
<h4 class="counter-title top-space10">Family Happiness Kits </h4>
</div>
<div class="col-xs-6 col-sm-2 text-center counter-col counter-resSpace">
<div class="counter-img">
<img src="./Food Rescue Patra/Mid day meals_100x100.png" alt="Mid day meals" class="img-responsive">
</div>
<p class="counter-value top-space10"><span class="count">350-Crore</span></p>
<h4 class="counter-title top-space10">Mid-Day Meals </h4>
</div>
<div class="col-xs-6 col-sm-2 text-center counter-col counter-resSpace">
<div class="counter-img">
<img src="./Food Rescue Patra/Anganwadi kits_100x100.png" alt="Anganwadi kits" class="img-responsive">
</div>
<p class="counter-value top-space10"><span class="count">1.63-Crore</span></p>
<h4 class="counter-title top-space10">Anganwadi Meals </h4>
</div>
</div>
</div>
</div>



<section class="section-1-bg two-left-left-bg" style="  background: linear-gradient(180deg, #0ccda3 10%, #C1FCD3 100%) ;" >
<div class="container ">
<div class="row">
<div class="col-sm-12 two-left-div">
<div class="two-left-col">
<h3 class="display" style="margin-top:0;margin-bottom:10px;">The Food Rescue</h3>
<p class="content-top-space" style="color: #fff;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;;font-weight: 800;font-size: 18px;letter-spacing: .5px;">The Food Rescue Foundation is a not-for-profit organisation headquartered in Bengaluru, India. The Foundation strives to eliminate classroom hunger by implementing the Mid-Day Meal Programme. It provides nutritious meals to children studying in Government schools and Government-aided schools. Food Rescue also aims to counter malnutrition and support right to education of children hailing from socio-economically challenging backgrounds.</p>
<ul class="row content-ul top-space25 about-points" style="margin-top:25px;">
<li class="col-sm-12 col-md-6">
<div class="about-div">
<div class="list-content">
<h4 style="color: #023964;font-weight: 900;font-size: 22px;">OUR VISION</h4>
<p class="content-top-space1" style=" font-size: 16px;letter-spacing: .5px;">NO CHILD IN INDIA SHALL BE DEPRIVED OF EDUCATION BECAUSE OF HUNGER.</p>
</div>
</div>
</li>
<li class="col-sm-12 col-md-6">
<div class="about-div">
<div class="list-content">
<h4 style="color: #023964;font-weight: 900;font-size: 22px;">OUR MISSION</h4>
<p class="content-top-space1" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 16px;letter-spacing: .5px;">TO FEED 3 MILLION CHILDREN EVERYDAY BY 2025</p>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<!-- <div class="section-padding section-2-bg" id="gallery" style="  background: linear-gradient(90deg, #f6ed78 100%, #C1FCD3 1%) ; ">
<div class="container ">
<div class="row">
<div class="col-lg-8 col-md-12">
<div class="row">
<div class="col-lg-6 col-md-12 showcase">
<div class="card p-0">
<div class="image-over">
<img src="./Food Rescue Patra/7_340x228.jpg" alt="">
</div>
<div class="card-footer d-lg-flex align-items-center justify-content-center">
<div class="card-block block-1"></div>
</div>
<div class="card-caption col-12 p-0">
<div class="card-body">
<a href="https://www.akshayapatra.org/photo-gallery/inauguration-of-66th-kitchen-in-bhopal">
<h4>Photo Gallery</h4>
<p>Inauguration of Food Rescue’s 66th kitchen in Bhopal, Madhya Pradesh </p>
</a><a href="https://www.akshayapatra.org/photo-gallery/inauguration-of-66th-kitchen-in-bhopal" title="Read more" class="read-more">View <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 showcase">
<div class="card p-0">
<div class="image-over">
<img src="./Food Rescue Patra/widget.jpg" alt="">
</div>
<div class="card-footer d-lg-flex align-items-center justify-content-center">
<div class="card-block block-2"></div>
</div>
<div class="card-caption col-12 p-0">
<div class="card-body">
<a href="https://www.akshayapatra.org/video-gallery/feed-healthy-and-nutritious-meals-to-homeless-mothers">
<h4>Video Gallery</h4>
<p>Feed healthy and nutritious meals to homeless mothers</p>
</a><a href="https://www.akshayapatra.org/video-gallery/feed-healthy-and-nutritious-meals-to-homeless-mothers" title="Read more" class="read-more">View <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 showcase">
<div class="card p-0">
<div class="image-over">
<img src="./Food Rescue Patra/Nourish_Children_Dreams_Save_Tax_340x228px-1.jpg" alt="">
</div>
<div class="card-footer d-lg-flex align-items-center justify-content-center">
<div class="card-block block-3"></div>
</div>
<div class="card-caption col-12 p-0">
<div class="card-body">
<a href="https://blog.akshayapatra.org/">
<h4>Blog</h4>
<p>Feeding Children. Empowering Dreams. Saving Tax</p>
</a><a href="https://blog.akshayapatra.org/meals-that-nourish-dreams/%22" title="Read more" class="read-more">View <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

</div>
</div>
</div>
</div>
</div>
</div>
</div> -->


<style>
    h1.display{
        font-family:'Sarabun', sans-serif;
        font-weight: 800;
        letter-spacing: 0;
        font-size: 58px;
        line-height: 55px;
        margin-top: 35px;
        margin-bottom: 15px;
        color: #86c540;
    }
    .list-donation{
        display: table-cell
    }
    .charity-title{
        color: #86c540;
        text-align: -webkit-center;
        margin-top: 40px;
    }
    .charity-occasion{
        padding-inline-start: 60px;
        list-style-type: none !important;
    }
    .charity-donatebtn{
        margin-left: 36%;
    }
    @media screen and (max-width: 480px){
        .charity-occasion{
            padding-inline-start: 10px  !important;
            list-style-type: none  !important;
        }
        .charity-donatebtn{
            margin-left: 32%;
        }
    }
	.bodyText{
		margin-top: -28px !important;
	}
</style>
<!-- <div class="cta-bgimage bgimage-property clearfix" style="  background: linear-gradient(180deg, #0ccda3 10%, #C1FCD3 100%) ;">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="cta-div text-left">
<h1 class="display">MAKE YOUR OWN <br> DAY OF CHARITY</h1>
<p class="content-top-space text-left" style="font-size:17px;">
Add goodwill to your special occasions by spreading joy among those who need your care and support the most.
</p>
</div>
</div>
<div class="col-md-6 news-col section-bottom-space30">
<h4 class="charity-title">CHOOSE AN OCCASION</h4>
<div class="news-div" style="margin-top: 25px;">
<div class="list-donation text-center">
<ul class="charity-occasion">
<li id="celebration" onclick="getoccasiontype(this.id)">
<p>
<img src="./Food Rescue Patra/celebration.png" class="img-responsive">
</p>
<p style="color:#fff;">Celebration</p>
</li>
</ul>
</div>
<div class="list-donation text-center">
<ul class="charity-occasion">
<li id="honorof" onclick="getoccasiontype(this.id)">
<p>
<img src="./Food Rescue Patra/inHonorof.png" class="img-responsive">
</p>
<p style="color:#fff;">In honour of</p>
</li>
</ul>
</div>
<div class="list-donation text-center">
<ul class="charity-occasion">
<li id="memoryof" onclick="getoccasiontype(this.id)">
<p>
<img src="./Food Rescue Patra/inMemoryof.png" class="img-responsive">
</p>
<p style="color:#fff;">In memory of</p>
</li>
</ul>
</div>
</div>
<div class="menu-div btn1-div charity-donatebtn"><a id="charitydonatelink" href="https://www.akshayapatra.org/onlinedonations" class="btn btn-1">DONATE NOW</a></div>
</div>
</div>
</div>
</div> -->




<!-- 
<section class="section-padding section-1-bg">
<div class="container ">
<div class="heading-div-1 text-center">
<h2>Our Latest News</h2>
<img src="./Food Rescue Patra/underline-1.png" alt="116x22">
</div>
<div class="row">
<div class="col-md-4 news-col section-bottom-space30">
<div class="news-div">
<img src="./Food Rescue Patra/7_340x228(1).jpg" alt="Food Rescue launches its 66th kitchen in Bhopal, Madhya Pradesh" class="img-responsive image-bottom-space20" style="width: 380px;height:auto;">
<div class="news-div-1">
<div class="list-img text-center">
<ul class="content-ul news-ul">
<li></li>
<li>
<p>
<a href="https://www.akshayapatra.org/news/akshaya-patra-launches-its-66th-kitchen-in-bhopal">
Jan <br>
<span>25</span>
</a>
</p>
</li>
</ul>
</div>
<div class="list-content">
<h4><a href="https://www.akshayapatra.org/news/akshaya-patra-launches-its-66th-kitchen-in-bhopal">Food Rescue launches its 66th kitchen in Bhopal, Madhya Pradesh</a></h4>
<a href="https://www.akshayapatra.org/news/akshaya-patra-launches-its-66th-kitchen-in-bhopal" class="readmore">Read more</a>
</div>
</div>
</div>
</div>
<div class="col-md-4 news-col section-bottom-space30">
<div class="news-div">
<img src="./Food Rescue Patra/widget2.jpg" alt="Narayana Murthy family contributes ₹10-crore towards Food Rescue’s COVID-19 Food Relief Service" class="img-responsive image-bottom-space20" style="width: 380px;height:auto;">
<div class="news-div-1">
<div class="list-img text-center">
<ul class="content-ul news-ul">
<li></li>
<li>
<p>
<a href="https://www.akshayapatra.org/news/narayan-murthy-family-contributes-10-crore-towards-akshaya-patra-s-covid-19-food-relief-service">
Mar <br>
<span>30</span>
</a>
</p>
</li>
</ul>
</div>
<div class="list-content">
<h4><a href="https://www.akshayapatra.org/news/narayan-murthy-family-contributes-10-crore-towards-akshaya-patra-s-covid-19-food-relief-service">Narayana Murthy family contributes ₹10-crore towards Food Rescue’s COVID-19 Food Relief Service</a></h4>
<a href="https://www.akshayapatra.org/news/narayan-murthy-family-contributes-10-crore-towards-akshaya-patra-s-covid-19-food-relief-service" class="readmore">Read more</a>
</div>
</div>
</div>
</div>
<div class="col-md-4 news-col section-bottom-space30">
<div class="news-div">
<img src="./Food Rescue Patra/widget-org-340x228-113.jpg" alt="The National Health Authority signs MoU with Food Rescue, Bharti Foundation and HelpAge India " class="img-responsive image-bottom-space20" style="width: 380px;height:auto;">
<div class="news-div-1">
<div class="list-img text-center">
<ul class="content-ul news-ul">
<li></li>
<li>
<p>
<a href="https://www.akshayapatra.org/news/national-health-authority-signs-mou-with-us">
Dec <br>
<span>05</span>
</a>
</p>
</li>
</ul>
</div>
<div class="list-content">
<h4><a href="https://www.akshayapatra.org/news/national-health-authority-signs-mou-with-us">The National Health Authority signs MoU with Food Rescue, Bharti Foundation and HelpAge India </a></h4>
<a href="https://www.akshayapatra.org/news/national-health-authority-signs-mou-with-us" class="readmore">Read more</a>
</div>
</div>
</div>
</div>
</div> </div>
</section> -->


<section class="section-padding testimonial-bg bgimage-property " id="testimonial " style="  background: linear-gradient(0deg, #0ccda3 10%, #C1FCD3 100%) ;" > 
<div class="container-fluid ">
<div class="heading-div-1 text-center">
<h2 style="color:crimson">Testimonials</h2>
<br>


<div class="rbd-core-ui" >
	<div class="rbd-review-slider">
		<div class="rbd-review-container">
			<div class="rbd-review review1.1 rbd-curr">
				<h3 class="rbd-heading">Extremely Professional</h3>
				<i class="renderSVG" data-icon="star" data-repeat="5"></i>
				<div class="rbd-content"><img class="rbd-gravatar" src="https://en.gravatar.com/userimage/26363586/56972d52aba494b6f068d289c6d3d63d.jpg">Materials are top notch. People are top notch... they knew exactly how to handle my ignorance and turn it to a positive working business…</div>
				<div class="rbd-footing">
					<a class="rbd-button rbd-small" href="#">Read More</a>
				</div>
				<div class="rbd-review-meta">Written by Mark P. on Feb. 18, 2018</div>
			</div>
			<div class="rbd-review review1.2 rbd-next">
				<h3 class="rbd-heading">Test Company Marketing Delivers Such Great Service!</h3>
				<i class="renderSVG" data-icon="star" data-repeat="5"></i>
				<div class="rbd-content"><img class="rbd-gravatar" src="https://www.gravatar.com/avatar/ee304528491d860812f73d7d5cd0dc72?s=256">I'm a big fan of this test company. They really do the best work around, and their prices just can't be beat! I hear that Alex is a pretty cool guy…</div>
				<div class="rbd-footing">
					<a class="rbd-button rbd-small" href="#">Read More</a>
				</div>
				<div class="rbd-review-meta">Written by Alex D. on Feb. 19, 2018</div>
			</div>
			<div class="rbd-review review1.3">
				<h3 class="rbd-heading">Test Review </h3>
				<i class="renderSVG" data-icon="star" data-repeat="5"></i>
				<div class="rbd-content">No Gravatar but here's a review…No Gravatar but here's a review…No Gravatar but here's a review…No Gravatar but here's a review…</div>
				<div class="rbd-footing">
					<a class="rbd-button rbd-small" href="#">Read More</a>
				</div>
				<div class="rbd-review-meta">Written by Anonymous. on Feb. 18, 2018</div>
			</div>
		</div>
	</div>
	<br>
</div>
<br><br><br><br><br><br>







<!-- <img src="./Food Rescue Patra/underline-2.png" alt="116x22"> -->
</div>
<div class="col-sm-12 text-center">
<div class="owl-carousel testimonial owl-theme" style="opacity: 1; display: block;">
<!-- <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 7300px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-2190px, 0px, 0px);">
<div class="owl-item" style="width: 730px;"><div class="item">
<div class="testimonial-div">
<p class="testimonial-para">“We in RMS India are delighted to partner with The Food Rescue Foundation to provide free mid-day meals to all school-going children. We understand that there is a pattern – the wholesome food act as incentive for parents to send children to school; and once the children are at school, they receive both nutrition and education. Additionally, </p>
<p class="testimonial-name">Sophia <span>CSR Lead, RMS India </span></p>

</div>
</div></div><div class="owl-item" style="width: 730px;"><div class="item">
<div class="testimonial-div">
<p class="testimonial-para">"Hunger is not a natural disaster but man-made one to a large extent. Hence, I feel, it is our duty to make India hunger-free. It was pleasant to know about the implementation of the Mid-Day Meal Programme by The Food Rescue Foundation. The modus operandi and functioning of this programme deeply touched my heart as I, at Galway Foundation, stro</p>
<p class="testimonial-name">Mr.Urmelesh Swami <span>Head - Galway Foundation </span></p>

</div>
</div></div><div class="owl-item" style="width: 730px;"><div class="item">
<div class="testimonial-div">
<p class="testimonial-para">“While we at NCML had heard about Food Rescue via various films, news articles, and images about the fabulous work it does tirelessly every day, visiting the schools and kitchens was really an eye-opener and a highly recommended experience for everyone. The impact of a well-balanced nutritious meal goes a long way, and kudos to the team at Aksh</p>
<p class="testimonial-name">Bhuvan Atluri <span>CEO, NCML MktYard Private Limited</span></p>

</div>
</div></div><div class="owl-item" style="width: 730px;"><div class="item">
<div class="testimonial-div">
<p class="testimonial-para">The Food Rescue Foundation’s implementation of the Mid-Day Meal Programme is a great initiative to address two Sustainable Development Goals – Zero Hunger and Quality Education with nutritious and quality food. The level of commitment that Food Rescue has showcased under this initiative has not only made an outstanding impact on the benefic</p>
<p class="testimonial-name">Ms. Priyadarshini Nigam <span>Head,CSR Newgen Software Technologies Ltd</span></p>

</div>
</div></div><div class="owl-item" style="width: 730px;"><div class="item">
<div class="testimonial-div">
<p class="testimonial-para">We thank The Food Rescue Foundation for creating this wonderful platform that we could trust, to provide scholarships to the bright young children. We are very impressed with the process, transparency and clarity the Foundation has exhibited. </p>
<p class="testimonial-name">Ranjan Sen <span>Managing Director </span></p>

</div>
</div></div>
</div></div> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>




<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div></div></div></div> </div>
</div>
</section>




<script type="text/javascript" id="" src="./Food Rescue Patra/oct.js.download"></script>
<script type="text/javascript" id="feedify_webscript">var feedify=feedify||{};window.feedify_options={fedify_url:"https://feedify.net/",pkey:"BLRJuxJ+CnaxapMrwqmEMhC/gzp5PspVolLykdBGXYu+aGbnL0iglPkikujKY+Q/dRUsV63acicrXlgPlS0oeek\x3d"};(function(d,c){function a(a){var b=c.createElement("script");b.type="text/javascript";b.src=a;c.getElementsByTagName("head")[0].appendChild(b)}a("https://tpcf.feedify.net/uploads/settings/020d4b8a2eee881a5586cf5baa8d3b58.js?ts\x3d"+Math.random());a("https://cdn.feedify.net/getjs/feedbackembad-min-3.0.js")})(window,document);</script>
<script type="text/javascript" id="feedify_poup_script">(function(c,b){var a=b.createElement("script");a.type="text/javascript";a.src="https://cdn.feedify.net/getjs/notifications.min.js";b.getElementsByTagName("head")[0].appendChild(a)})(window,document);</script>

<script type="text/javascript" id="">(function(a,b){a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="https://cdn.pagesense.io/js/theakshayapatrafoundation/27f927c53803429598d4d52e13bd8644.js";b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})(window,"script");</script><script type="text/javascript" id="">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=document.location.protocol+"//static.bytedance.com/pixel/sdk.js?sdkid\x3dBOJA10TEUOQ9QM0COR4G";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script>
<script type="text/javascript" id="">window._tfa=window._tfa||[];window._tfa.push({notify:"event",name:"page_view",id:1301399});!function(a,b,d,c){document.getElementById(c)||(a.async=1,a.src=d,a.id=c,b.parentNode.insertBefore(a,b))}(document.createElement("script"),document.getElementsByTagName("script")[0],"//cdn.taboola.com/libtrc/unip/1301399/tfa.js","tb_tfa_script");</script>

<script type="text/javascript" id="">(function(c,d,f,g,e){c[e]=c[e]||[];var h=function(){var b={ti:"25150305"};b.q=c[e];c[e]=new UET(b);c[e].push("pageLoad")};var a=d.createElement(f);a.src=g;a.async=1;a.onload=a.onreadystatechange=function(){var b=this.readyState;b&&"loaded"!==b&&"complete"!==b||(h(),a.onload=a.onreadystatechange=null)};d=d.getElementsByTagName(f)[0];d.parentNode.insertBefore(a,d)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><script type="text/javascript" id="">(function(a,c,e,k,b){a[b]=a[b]||[];a[b].push({projectId:"10000",properties:{pixelId:"23127",userEmail:"\x3cemail_address\x3e"}});var d=c.createElement(e);d.src=k;d.async=!0;d.onload=d.onreadystatechange=function(){var f=this.readyState,l=a[b];if(!f||"complete"==f||"loaded"==f)try{var g=YAHOO.ywa.I13N.fireBeacon;a[b]=[];a[b].push=function(h){g([h])};g(l)}catch(h){}};c=c.getElementsByTagName(e)[0];e=c.parentNode;e.insertBefore(d,c)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","808388669173978");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="
https://www.facebook.com/tr?id=808388669173978&amp;ev=PageView&amp;noscript=1
"></noscript>


<script type="text/javascript" src="./Food Rescue Patra/jquery.min.js.download"></script>

<script type="text/javascript" src="./Food Rescue Patra/bootstrap.min.js.download"></script>

<script type="text/javascript" src="./Food Rescue Patra/owl.carousel.min.js.download"></script>
<script type="text/javascript" src="./Food Rescue Patra/owl-slider.js.download"></script>

<script type="text/javascript" src="./Food Rescue Patra/counter-lib.js.download"></script>
<script type="text/javascript" src="./Food Rescue Patra/jquery.counterup.min.js.download"></script>

<script type="text/javascript" src="./Food Rescue Patra/jquery.magnific-popup.js.download"></script>



<script type="text/javascript" src="./Food Rescue Patra/jquery.validate.min.js.download"></script>

<script type="text/javascript" src="./Food Rescue Patra/video.js.download"></script>

<script type="text/javascript" src="./Food Rescue Patra/chart.js.download"></script>
<script type="text/javascript" src="./Food Rescue Patra/pie-chart.js.download"></script>



<script type="text/javascript" src="./Food Rescue Patra/custom.js.download"></script>

<script src="testimonial.js"></script>

<script type="text/javascript">


// jquery ready start
$(document).ready(function() {
	// jQuery code

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    }); 

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
	  	$('.dropdown-menu a').click(function(e){
	  		//e.preventDefault();
	        if($(this).next('.submenu').length){
	        	$(this).next('.submenu').toggle();
	        }
	        $('.dropdown').on('hide.bs.dropdown', function () {
			   $(this).find('.submenu').hide();
			})
	  	});
	}
	
}); // jquery end
</script>


<img src="./Food Rescue Patra/adsct" height="1" width="1" style="display: none;"><img src="./Food Rescue Patra/adsct(1)" height="1" width="1" style="display: none;">
<script type="text/javascript" id="">twttr.conversion.trackPid("o16qz",{tw_sale_amount:0,tw_order_quantity:0});</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=o16qz&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0">
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=o16qz&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0">
</noscript>
<img src="./Food Rescue Patra/adsct(2)" height="1" width="1" style="display: none;"><img src="./Food Rescue Patra/adsct(3)" height="1" width="1" style="display: none;"><script src="./Food Rescue Patra/cachedClickId"></script><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon197540015573"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon407087414528" width="0" height="0" alt="" src="./Food Rescue Patra/0"></div><img class="ywa-10000" src="./Food Rescue Patra/sp.pl.download" alt="dot image pixel" style="display: none;"><div style="z-index: 2147483646; background: url(&quot;https://cdn.feedify.net/assets/push/powered/powered-webpushfeedify.png&quot;) center center / contain no-repeat; text-align: center; color: transparent; font-family: Arial; font-size: 12px; font-weight: 400; border-radius: 2px; position: fixed !important; top: 0px !important; right: 0px !important; display: none;"><a href="https://feedify.net/?utm_source=referral&amp;utm_medium=PoweredBy&amp;utm_campaign=https%3A%2F%2Fwww.akshayapatra.org%2F" target="_blank" rel="noreferrer" style="color: transparent;text-decoration:none;padding: 14px 100px;display:block;"></a></div></body></html>