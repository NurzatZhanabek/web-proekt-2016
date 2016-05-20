<?php 
	session_start();
	include ('header.php');
	if(isset($_GET["device"])){
		
		$dev = $_GET['device'];
		$filename=$dev.".txt";
	}
	
	if(isset($_POST['message'])){


	
	$sender = $_GET['name'];

	$text = $_POST['message'];
	if (strlen($text)>0) {
	$message = "\n$sender says: $text"; 
	$file = fopen($filename, 'a'); 

	fwrite($file, $message); 
	fclose($file);}else {
		echo "<h1 style='margin-top:200px;'>You wil not send empty text</h1>";
	}
		
	}

	
 ?>
  
<script type="text/javascript" src ='jquery/jquery-1.12.1.min.js'></script>
 <script type="text/javascript">
 	function Add(){
 		alert('You device added to cart');
 	}
 	function Regis(){
 		alert('You have not registrated');
 	}
    function show(){		
    
    var data = <?php echo json_encode("show.php?device=$dev"); ?>;
		$.ajax({
			url: data,
			cache: false,
			success: function(html){		
				$("#comments").html(html); 			
		  	},
		});
	}

    var interval = 1000; 
    show();
    
    setInterval(show, interval);
 </script>


 <div class="edge" >
 	<img src="img/Edge.png" alt="">
 	<div class="edge-option">
 		<h2>Samsung S7 Edge</h2>
 		<p>A truly enhanced Galaxy experience The Samsung Galaxy S7 edge is the smartphone 
 		you will want to brag about. It provides a bigger, more stunning screen without compromise.
 		Galaxy S7 edge is lightweight and is encapsulated by an envious, dual curved edge design. 
 		Get richer content support with the extended edge panel, and use the Task Edge to quickly access 
 		frequently used commands. Galaxy S7 edge resists splashes, spills and even dunks.Plus, it has a 
 		dual–pixel camera with incredibly fast auto–focus,* a longer–lasting battery and a larger expandable
 		 memory. The Galaxy S7 edge comes in 32GB. Available in Black Onyx, Gold Platinum, or Silver Titanium. 
 		 (Subject to availability)see less</p>
 		 <form action="">
 		 <?php 
 		 if (isset($_GET['name'])) {
 		 	echo "<h3><a href='shopcart.php?name=$name&&dev=$dev&&Email=$email' onclick='Add()'>Add to cart</a></h3>";
 		 }else{
 		 	echo "<h3><a  href='SamsungEdge.php' onclick='Regis()'>Add to cart</a></h3>";
 		 }
 			

 		 ?>
 		 	

 		 </form>
 		
 		
 	</div>

 </div>

 <div id="comments">
 	

 </div>

<div>
	<form method="post" >
		<textarea name="message" id="" cols="30" rows="10"></textarea>
		<?php 
			if (isset($_GET['name'])) {
				# code...
				echo '<input type="submit" value="Send" onclick="">';
			}else echo '<input type="submit" value="Send" onclick="Regis()">';
		 ?>
		
	</form>
</div>
