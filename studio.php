<?php
include ("sys.php");
$AstonFitness = "selected";
 $pageTitle="Studio";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once("head.php");?>
<script type="text/javascript">
$(document).ready(function(){
	$(".image a").colorbox({width:"720",height:"516",scrolling:false});
})
</script>
</head>
<body id="studioBody">
<div id="container">
	<div id="subContainer">
		<div id="header">
			<?php include "nav.php"; ?>
		</div><!-- end #header -->

		<div id="mainContent">
			<div id="headImg"><div class="booking">Book now for an Aston Fitness cardio membership, or private personal training consultation.<p><a href="enquiry.php">Click here&gt;</a></p></div></div>
			<div id="subContent">
				<div class="sidebar">
					<div class="image"><img src="pic/astonfitness/studio/studio_img01.jpg" /></div>
					<div class="image"><a href="studio/img.php?img=2"><img src="pic/astonfitness/studio/studio_img02.jpg" /><img src="pic/misc/plus_link_w.png" alt="link" class="plus" /></a></div>
					<div class="image"><a href="studio/img.php?img=3"><img src="pic/astonfitness/studio/studio_img03.jpg" /><img src="pic/misc/plus_link_w.png" alt="link" class="plus" /></a></div>
					<div class="image"><a href="studio/img.php?img=4"><img src="pic/astonfitness/studio/studio_img04.jpg" /><img src="pic/misc/plus_link_w.png" alt="link" class="plus" /></a></div>
					<div class="image"><a href="studio/img.php?img=5"><img src="pic/astonfitness/studio/studio_img05.jpg" /><img src="pic/misc/plus_link_w.png" alt="link" class="plus" /></a></div>
					<div class="image"><a href="studio/img.php?img=6"><img src="pic/astonfitness/studio/studio_img06.jpg" /><img src="pic/misc/plus_link_w.png" alt="link" class="plus" /></a></div>
				</div>
				<div class="rightContent">
					<div class="title">Aston Fitness: The Studio
					</div>
					<div class="intro">Where the magic happens.
					</div>
					<div class="paraBlock context">At Aston Fitness, we realize that nobody has hours on end to spend at the gym. Working with a trainer allows the focus to remain wholly on you. Our unique method of "smart" training encourages maximum benefit in the minimum amount of time.
					</div>
					<div class="paraBlock context">Our studio is dedicated exclusively to helping you achieve your goals. An elite group of fitness professionals work on-on-one with you every step of the way demonstrating technique, inspiring you, answering questions, monitoring your progress and adjusting your program as your needs change and your abilities grow.
					</div>
					<div class="paraBlock">
						<div class="context">No matter what your health and fitness goals may be, your results are monitored at regular intervals to enable us to fine tune your training and diet plan accordingly and ensure your progress never reaches a plateau.
						</div>
						<div class="context">We will provide you with a full body composition analysis. Using this valuable information, we then design your personal program. A menu plan and realistic time-frame are formulated, providing you with the focus and guidance required to create a better body.
						</div>
					</div>
					<div class="paraBlock context">We have now introduced a membership option to make our facility more accessible to all. This enables you to make use of our state-of-the- art Cardio Zone and Aston Express circuit and classes at your leisure. It's great for busy people who'd like to fit in a little extra cardio or a TRX class where time permits.
					</div>
					<div class="paraBlock" id="speak">
						<div class="greyContext">"This state of the art facilities brings together 20 years of experience and passion under one roof. It is everything I have dreamed it will be and more. I am so excited about my new studio and I can't wait to see you all down there."
						</div>
						<div class="greyContext">Donna Aston
						</div>
					</div>
				</div>
			</div>
			<div class="endDistance">
		</div>
		</div>
	</div>
</div>
</body>
</html>