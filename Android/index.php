<?php 
  session_start();
  if (isset($_GET['name'])) {
  	$name = $_GET['name'];
  	$email = $_GET["Email"];
  	include("header.php");
  }else{
  		include("header.php");}
  
 ?>
	<div style="height:100px;"></div>
	<div class="words"><img src="icon-dots.svg" style="width:100px;margin-left:46%;"></div>
	<div><a href="#" style="text-decoration:none;text-align:center;font-size:30px;color:rgb(118, 119, 119);font-family:Helvetica, Arial, sans-serif;"><p><strong>the best of Google<br>ready for you</strong></p></a></div>
	<div class="devises-home"><a href="#"><img src="img/home-hero.png" alt=""></a></div>
	<div class="content2 ">
	<h1>Powering screens of all sizes</h1>
	<p>Android is the customizable, easy to use operating system that powers more than a billion devices across the globe — from phones and watches</p>
	</div>
	<div id="content-devises">

	<?php 
              if (isset($_GET['name'])) {
        $name = $_GET['name'];
            echo "<div class=\"i1\" ><a href=\"Wear.php?name=$name&&Email=$email\"><img src=\"i/wear-on.jpg\"><br>ANDROID WEAR</a></div>
		<div class=\"i2\" ><a href=\"Phone.php?name=$name&&Email=$email\"><img src=\"i/nexus6-on.jpg\"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHONES</a></div>";
          }else{
            echo "<div class=\"i1\" ><a href=\"Wear.php\"><img src=\"i/wear-on.jpg\"><br>ANDROID WEAR</a></div>
		<div class=\"i2\" ><a href=\"Phone.php\"><img src=\"i/nexus6-on.jpg\"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHONES</a></div>";
          }
           ?>

	</div>
	<div class="wear3-google"></div>
	<div id="wear3-google-option">
		<div class="text-wear3-google">
		<h1>The best of Google built in</h1>
		<p>Android works perfectly with your favorite apps like Google Maps, Calendar, Gmail, and YouTube.</p>
		</div>
	</div>
	<div>
		<div class="devices-text">
			<h1>Customized by you, for you</h1>
			<p>Put the stuff you care about right on your homescreen: the latest news, weather, or a stream of your recent photos.</p>
		</div>
		<div class="devices">
			<img src="img/devices.jpg">
		</div>
	</div>
	<?php 
	include("footer.php"); 
	?>