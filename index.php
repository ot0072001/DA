<?php
include ("sys.php");
resetMenuSelected();
$pageTitle="Donna Aston";
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once("head.php");?>
</head>

<body id="homepageBody">

<div id="container" style="background-color:#D3D4D6;">
	<div id="subContainer">
		<div id="header">
			<?php include "nav.php"; ?>
		</div><!-- end #header -->

		<div id="mainContent" style="background-color:#FFFFFF">
			<div class="sidebar" id="sidebarHome">
				<!--<img src="pic/home/brand_logos.png"/>
				<img src="pic/Chrysanthemum.jpg"/>
				<img src="pic/Desert.jpg"/>
				<img src="pic/Hydrangeas.jpg"/>
				<img src="pic/Jellyfish.jpg" />
				<img src="pic/Koala.jpg" />
				<img src="pic/Tulips.jpg" />-->
				<a href="studio.php"><span id="fitnessImg"></span><span class="letterSpanOfSide" id="fitness">Personal fitness, Weights, Cardio, Boxing, CIRQ, Core, Private training rooms, Fat-loss.</span><img src="pic/misc/plus_link_g.png" alt="link" class="plus" id="fitnessPluss" /></a>
				<a href="astonExpress.php"><span id="expressImg"></span><span class="letterSpanOfSide" id="express">Private memberships TRX bands small group classes, CARDIO ZONE</span><img src="pic/misc/plus_link_g.png" alt="link" class="plus" id="expressPluss" /></a>
				<a href="astonRx.php"><span id="RXprescriptionImg"></span><span class="letterSpanOfSide" id="RXprescription">State-of-the-Art body analysis software, customised diets, fat loss, body re-shaping and goal setting.</span><img src="pic/misc/plus_link_g.png" alt="link" class="plus" id="RXprescriptionPluss"/></a>
				<a href="academy.php"><span id="academyImg"></span><span class="letterSpanOfSide" id="academy">Training, education, mentorship and workshops for Fitness Professionals</span><img src="pic/misc/plus_link_g.png" alt="link" class="plus" id="academyPluss"/></a>
				<a href="cirq.php"><span id="cirqImg"></span><span class="letterSpanOfSide" id="cirq">EXCLUSIVE TO ASTON FITNESS<br />Modified acrobatic training for all fitness levels. Functional training, Roman rings, silks, handstands, FUN!</span><img src="pic/misc/plus_link_g.png" alt="link" class="plus" id="cirqPluss"/></a>
				<a href="http://www.fitnesstogo.com" target="_blank"><span id="togoImg"></span><span class="letterSpanOfSide" id="togo">Your personal trainer in your back pocket -24/7</span><img src="pic/misc/plus_link_g.png" alt="link" class="plus" id="togoPluss"/></a>
				
			</div><!-- end #sidebar1 -->
			<div id="content">
				<img class="contentDIV" id="homePic" src="pic/home/home_da.jpg" />
				<div class="contentDIV" id="describ"><a href="studio.php">Aston Fitness</a> brings together the principals of weight loss, health and fitness. <a href="bio.php">Donna Aston</a> looks to redefine how we approach our entire lifestyle. We are Aston Fitness and we create better bodies. Our <a href="blog/">blog</a> is available now with great tips, or just browse the <a href="store/">shop</a> to find great tools and gifts to help you create a better body.</div>
				<div class="contentDIV" id="blog"></div>
			</div>
		</div><!-- end #mainContent -->
		<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
		<!--<br class="clearfloat" />-->
		<div id="footer">
			<?php include "foot.php";?>
		</div> <!-- end #footer -->
	</div>
</div><!-- end #container -->
</body>
</html>
