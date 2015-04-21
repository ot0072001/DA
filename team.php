<?php
include ("sys.php");
$AstonFitness = "selected";
 $pageTitle="Team";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once("head.php");?>
<script type="text/javascript">
$(document).ready(function(){
	$(".popImg").colorbox({width:"650px",scrolling:false});
	$(".popImg").colorbox.resize();
})
</script>
</head>
<body id="teamBody">
<div id="container">
	<div id="subContainer">
		<div id="header">
			<?php include "nav.php"; ?>
		</div><!-- end #header -->

		<div id="mainContent">
			<div id="headImg"></div>
			<div id="subContent">
				<div class="sidebar">
				</div>
				<div class="rightContent">
					<div class="title">The Team
					</div>
					<div class="intro">Matt, Nikii, Kris, Lachi, Sally, Amber, Richard, Kate, Will.
					</div>
					<div class="memberPhotos">
						<div class="cell"><a class="popImg" href="team/will.php"><img src="pic/astonfitness/team/will.jpg" alt="Will" /></a>
						<img src="pic/misc/plus_link_w.png" alt="link" class="plus" />
						</div>
						<div class="cell"><a class="popImg" href="team/nikki.php"><img src="pic/astonfitness/team/nikki_dunner.jpg" alt="Nikki" /></a>
						<img src="pic/misc/plus_link_w.png" alt="link" class="plus" />
						</div>
						<div class="cell"><a class="popImg" href="team/matt.php"><img src="pic/astonfitness/team/matthew_chaplin.jpg" alt="Matthew" /></a>
						<img src="pic/misc/plus_link_w.png" alt="link" class="plus" />
						</div>
						<div class="cell"><a class="popImg" href="team/kris.php"><img src="pic/astonfitness/team/kris.jpg" alt="Kris"/></a>
						<img src="pic/misc/plus_link_w.png" alt="link" class="plus" />
						</div>
						<div class="cell"><a class="popImg" href="team/lanchi.php"><img src="pic/astonfitness/team/lachlan_macfarlane.jpg" alt="Lachlan"/></a>
						<img src="pic/misc/plus_link_w.png" alt="link" class="plus" />
						</div>
						<div class="cell"><a class="popImg" href="team/sally.php"><img src="pic/astonfitness/team/sally_prideaux.jpg" alt="sally"/></a>
						<img src="pic/misc/plus_link_w.png" alt="link" class="plus" />
						</div>
						<div class="cell"><a class="popImg" href="team/richard.php"><img src="pic/astonfitness/team/richard.jpg" alt="Richard"/></a>
						<img src="pic/misc/plus_link_w.png" alt="link" class="plus" />
						</div>
						<div class="cell">
						</div>
						<div class="cell"><a class="popImg" href="team/kate.php"><img src="pic/astonfitness/team/kate_reid.jpg" alt="Kate"/></a>
						<img src="pic/misc/plus_link_w.png" alt="link" class="plus" />
						</div>
						<div class="cell"><a class="popImg" href="team/amber.php"><img src="pic/astonfitness/team/amber_johnson.jpg" alt="Amber"/></a>
						<img src="pic/misc/plus_link_w.png" alt="link" class="plus" />
						</div>
					</div>
					<div class="paraBlock context">The team at Aston Fitness pride themselves on being the best in the industry. Their extraordinary passion for their work translates into extraordinary results for each and every client, regardless of their level of fitness. From injury rehabilitation to fat loss, our personalised, one-on-one approach and dedication to helping you achieve your goals is the key to success.
					</div>
				</div>
				<div class="endDistance">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>