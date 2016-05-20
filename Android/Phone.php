<?php 
  session_start();
  include("header.php");

 ?>
 <div class="navbar">
	<div style="height:80px;width;100%;"></div>
	<div class="container-phones"></div>
	<div class="phones-text">
		<h1>The world's most popular mobile OS</h1>
		<h3>Android is customizable, easy to use and works perfectly with all your favorite apps.</h3>
	</div>
	<div style="width:100%;padding-left:40%;"><h1>Built for you</h1></div>
	<div class="main-phone">
		<div class="phone-option">
			<h3>Nexus 6P</h3>
			<h1>Elegantly designed, pure Android</h1>
			<h3 style="color:#6ab344;"><a href="#">Buy now ></a></h3>
		</div>
		<div class="phone-img">
			<img src="img/nexus-6p-1x.png">
		</div>
	</div>
	<div class="phones-container-menu">
	<div class="phones-menu">
		<div class="phone-1">
			<img src="img/nexus-5x-1x.png" style="padding-top:10px;">
			<div class="phone-text">
				<h4>Nexus 5X</h4>
				<h1>The all-around champ is back</h1>
				<h3 style="color:#6ab344;"><a href="#">Buy now ></a></h3>
			</div>
		</div>
		<div class="phone-2">
			<img src="img/samsung-galaxy-s6-edge-plus-1x.png" style="padding-top:10px;">
			<div class="phone-text-2">
				<h4>Samsung Galaxy S6 edge+</h4>
				<h1>Big screen, big entertainment</h1>
				<h3 style="color:#6ab344;">
				<?php  
				if(isset($_GET['name'])){
  					echo "<a href='SamsungEdge.php?name=$name&&device=SumsungEdge&&Email=$email'>Buy now ></a>";
  				}else {
  					echo "<a href='SamsungEdge.php?device=SumsungEdge'>Buy now ></a>";
  				}
				 
				?>
					</h3>
			</div>
		</div>
	</div>
	<div class="phones-menu">
		<div class="phone-1">
			<img src="img/samsung-galaxy-note-5-1x.png" style="padding-top:10px;">
			<div class="phone-text">
				<h4>Samsung Galaxy Note5</h4>
				<h1>Elevate your productivity</h1>
				<h3 style="color:#6ab344;"><a href="#">Buy now ></a></h3>
			</div>
		</div>
		<div class="phone-2">
			<img src="img/htc-one-a9-1x.png" style="padding-top:10px;">
			<div class="phone-text-2">
				<h4>HTC One A9</h4>
				<h1>Be brilliant</h1>
				<h3 style="color:#6ab344;"><a href="#">Buy now ></a></h3>
			</div>
		</div>
	</div>
	<div class="phones-menu">
	<?php 
		include 'connection.php';
          if ($conn->connect_error) {
          die("Connection error".$conn->connect_error);
           }
         $sql="SELECT * FROM catalog";
         $result=$conn->query($sql);
          if($result->num_rows > 0) {
          	$count = 0;
          while($row = $result->fetch_assoc()) {
                $img = $row['photo'];
                $devices = $row['devices'];
                $i = $row['information'];
                if($count==0){

                echo "<div class='phone-1'>
			<img src='$img' style='padding-top:10px;'>
			<div class='phone-text'>
				<h4>$devices</h4>
				<h1>$i</h1>
				<h3 style='color:#6ab344;'><a href='#'>Buy now ></a></h3>
			</div>
		</div>";
		$count=1;
		}else{
		 echo '<div class="phone-2">
			<img src="$img" style="padding-top:10px;">
			<div class="phone-text-2">
				<h4>$devices</h4>
				<h1>$i</h1>
				<h3 style="color:#6ab344;"><a href="#">Buy now ></a></h3>
			</div>
		</div>';$count = 0;
            }
            }

          }

		

	 ?>
		
		
	</div>
	</div>
	</div>
	<?php 
	include("footer.php"); 
	?> 