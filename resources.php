<?php
//require_once('connect.php');
?>

<!DOCTYPE HTML>
<html lang = "en">

<head>
	<title>TBK Salem</title>
	<meta charset = "UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="tbk_salem.css">
	<link rel="icon" type="image/png" href="Images/favicon.png">
</head>

<body>

<!--Title Bar, Nav and Showcase Images-->

<div class="title_and_nav_holder" id="topContentHolder">
	<!--Logo-->
	<div class="site_logo_holder">
		<h1 style="padding-top: .4em; padding-left: .2em; color: yellow; font-family: deftone; font-weight: normal; font-size: 2.75em;">The Busted Knuckle</h1>	
	</div>
	
	<!--Nav-->
	<nav>
		<a href="home.php">Home</a>
		<span class="nav_divider"> | </span>
		<a href="">About</a>
	</nav>
</div>

<body>

<!--<div style="position: relative">-->
	<!--<img src="Images/motorcycle.jpg" class="showcase_img" id="displayImg"></img>-->
	
	<!--<button onclick="scroll()" style="z-index: -1; position: absolute; bottom: 3em; left: 50%; width: 7em;">Scroll</button>-->

<!--</div>-->

<!--
<script>
	function scroll() {
		var divToScroll = document.getElementById("startDiv");
		divToScroll.scrollTop = div.scrollHeight - div.clientHeight;
	}
</script>
-->





<div style="background-color: #1a1a1a">



<footer>
	<a href=""><div class="l_link"></div></a>
</footer>

</div>
<!--Resources Grid (maybe do a resouces header thing here?)-->
		<div class="span_5">
			<h1 class="section_title">Resources:</h1>
			<div class="title_underline" style="border-color: white"></div>

        
<!--Embed Google drive -->
<style> 'text-color:#FFFFF' </style>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1mXIN7aOIQLbN37AR9KRSH1qKeH2iVc-R" width="700" height="500" frameborder="0"></iframe>

<script>
	//Get Heights
	var topBarHeight = document.getElementById("topContentHolder").offsetHeight;
	var topImgHeight = document.getElementById("displayImg").height;
	
	
	
	//Set Heights
		//Showcase Image
	document.getElementById("content").style.marginTop = topImgHeight.toString() + "px";
		//Content
	document.getElementById("displayImg").style.marginTop = topBarHeight.toString() + "px";
</script>



</body>
</html>