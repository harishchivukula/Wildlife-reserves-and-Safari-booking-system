<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="homework.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
	<title>Home</title>
	<style type="text/css">
		ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #167B13;
	    margin-left: 5px;
	    margin-right: 5px; 
	    z-index: 2;
	}

	li {
	    float: left;
	}

	li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}

	li a:hover:not(.active) {
	    background-color: #AD9417;
	}

	.active {
	    background-color: #1EB81A;
	}

	/* Slideshow container */
		.slideshow-container {
		  width: inherit;
		  height: 450px;
		  max-height: 150px;
		  position: relative;
		  margin:0px auto;
		  z-index: 1;
		}

		.mySlides {
		 display: none;
		 width:inherit;
		 height:inherit;
		}

		/* Caption text */
		.text {
		  color: #663300;
		  font-size: 20px;
		  font-family: "Arial Black";
		  padding: 8px 12px;
		  position: inherit;
		  bottom: 8px;
		  width: 100%;
		  text-align: center;
		}


		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .6} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}
		/*--------------------*/

	.wildlife{
		background-color: rgba(0, 0, 0, 1);
		margin-top: 10px;
		margin-left: 10px;
		color: #2DAE19;
		z-index: 1;
		font-family: Verdana;
		font-size: 45px;
		padding: 15px;
		max-height: 200px;
		background-size: contain;
	}

	.about{
	  font-family: 'Source Sans Pro', sans-serif;
	  font-size: 24px;
	  font-weight: 100;
	  color: rgb(60, 60, 60);
	  margin-left: 10px;
	  background-color: #DEDACD;
	  padding: 8px;
	}

	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script> 
	<script src="jquery.localscroll.js" type="text/javascript"></script> 
	<script src="jquery.scrollTo.js" type="text/javascript"></script> 
	<script type="text/javascript">
		$('.scrollLink').click( function() {
		     $('html, body').animate({
		          scrollTop: $('#aboutpart').offset().top
		     }, 400);
		});

		/* scroll to the top of the page */
		if ($('.scrollToTop')[0]){
		     $('.scrollToTop').click(function(){
		          $('html,body').animate({ scrollTop: 0 }, 400);
		     });
		}
	</script>
	<script type="text/javascript">
	$(document).ready(function() {
	   $('#aboutpart').localScroll({duration:1800});
	});
	</script>
</head>
<body>
    <div class="wildlife"><a href="homework.php" style="margin-left: 10px; text-decoration: none; color: #34CC1C;">WILDLIFE INDIA&nbsp;&nbsp;<img src="logo.png" style="float: right;"></a></div>
    <hr>
	<div class="banner">
		<div class="heading">
			<div class="slideshow-container">
			  <div class="mySlides fade">
			    <img src="rbt1.jpg" style="margin-left: 50px; width:93%;height:110%;">
			  </div>

			  <div class="mySlides fade">
			    <img src="rbt4.jpg" style="margin-left: 50px; width:93%;height:110%;">
			  </div>

			  <div class="mySlides fade">
			    <img src="sambar.jpg" style="margin-left: 50px; width:93%;height:110%;">
			  </div>
			  
			  <div class="mySlides fade">
			    <img src="hbl.jpg" style="margin-left: 50px; width:93%;height:110%;">
			  </div>

			  <div class="mySlides fade">
			    <img src="peacock.jpg" style="margin-left: 50px; width:93%;height:110%;">
			  </div>
			</div>
			<br>
		</div>
	</div>
		<ul><font face="verdana">
		  <li><a class="active" href="#home">HOME</a></li>
		  <li><a href="animals.php">ANIMALS</a></li>
		  <li><a href="reserve.html">RESERVES</a></li>
		  <li><a href="directions.html">GETTING THERE</a></li>
		  <li><a href="pref.php">SAFARIS</a></li>
		  <li><a href="4 (2).php">FEEDBACK</a></li>
		  <li style="float:right;"><a href="#aboutpart">ABOUT</a></li>
		</font></ul><br>
	<hr color="gray"><br><br><br>
	<center>
		<div class="portcont">
			<div class="port p1"><br><br><br><br><br>
				<a href="average.php" style="text-decoration: none;"><font size="6">OUR TOP 3 RESERVES</font></a>
			</div>
			<div class="port p2">
			</div>
		</div>
	</center>
	<hr color="gray">
	<div style='height: 30px'></div>
	<div class="about"><a name="aboutpart"><h1 style="margin-top: 20px; color: rgb(40, 40, 40);"><center>About Us</center></h1>
		India is a rich country in terms of bio-diversity. The sight and the sound of the majestic elephant, the dance of the peacock, the roar of the tiger, the songs of the birds are unparalleled experiences. The country is home to 7.6% of all mammalian, 12.6% of all avian and 6.2% of all reptilian species on the planet. It is only fair to say that the country offers immense wildlife tourism opportunities. The heritage of wildlife in India comprises of more than 70 national parks and about 400 wildlife sanctuaries including bird sanctuaries. India has always been a fete for wildlife enthusiasts from around the world with its fascinating myriad of flora and fauna that has remained both unique and mysterious for laymen as well as nature enthusiasts.
		<br><br>
		<div style="float: left; max-width: 920px;">
		Lying along the Indomalaya ecozone, the major terrestrial biomes are composed of polar, temperate, dry, wet and sub-tropical making them eligible for different species to thrive. India's forest cover ranges from the tropical rainforest of the Andaman Islands, The Western Ghats to the deciduous forests in Gangetic plains and the Kachchh to coniferous forests of the Himalayas.</div>
		<div style="float: right; max-width: 200px; position: relative; border-collapse: collapse; margin-right: 130px; border-color: #000; border-radius: 3px; border-width: 3px; padding: 5px;">
			<img src="rbt3.jpg" style="width: 100%; height: 100%" style="border-color: #000;">
		</div>
		<br><br><br><br><br><br><br>
		A paradise for nature lovers, these wildlife zones are also crucial for the conservation of endagered plant and animal species. The rare One-Horned Rhinoceros, the enigmatic Snow Leopard, the elegant Blackbuck are all residents of the many reserves that span this country. The birds like the Great Indian Bustard, The Indian Peacock, The Satyr Tragopan, The Ceylon Frogmouth Owl, The Greater Flamingo are only a handful of the 1000+ species of birds found in India. Reptilian species like the Gharial, the King Cobra and the Rock Python find solace in the tropical climate of this country. Aquatic creatures such as the Gangetic Dolphin and the Ganges River Shark are endemic to Indian rivers.
		<br><br>
		To encourage tourism and promote conservation of endangered species, the Wildlife Authority of India has made wildlife experiences more rewarding. Wildlife India aims to bring the experience to the user by easing the access of information about our wildlife and promoting wildlife safaris. If you are one of the many nature enthusiasts out there, a visit to Indian Sanctuaries will be a memorable experience for sure.<br>
		</a>
		<a class='scrollToTop' href='#' style="text-decoration: underline; font-size: 20px; color: rgb(110, 110, 110); font-family: Verdana;"><center>Go back Up</center></a><br>
	</div>		
	<hr color="gray">
	<br><br>
	<center>
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-youtube"></a><br><br>
		<font face="verdana" size="2" color="#696969" style="text-shadow: 2px #fff;">Go ahead and follow our community !</font>
	</center>
	<br>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 5 seconds
}


</script>
</body>
</html>