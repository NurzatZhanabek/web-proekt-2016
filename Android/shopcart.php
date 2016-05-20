<?php 
  session_start();
  include("header.php");
  if ($_GET['Email']) {
		$email = $_GET['Email'];
		
	}
	if ($_GET['dev']) {
		include 'connection.php';
		$div = $_GET['dev'];
		 $sql="INSERT INTO cart(Email,device) VALUES ('$email','$div')";
          if($conn->query($sql)===TRUE){
            
          }
      
        $conn->close();
	}
  
 ?>
	<div style="height:100px;"></div>
	<div class="content-shopping-cart">
		<h1>Your cart</h1>
		<img src="img/empty-cart.gif" alt="">
		<?php 
		if (isset($_GET['Email'])) {
			# code...
		
			$email = $_GET['Email'];
			$isEmpty = 0;
			include 'connection.php';
          if ($conn->connect_error) {
          die("Connection error".$conn->connect_error);
           }
         $sql="SELECT * FROM cart";//email='$email' AND pass='$pass'";
         $result=$conn->query($sql);
          if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if ($email==$row['Email']){
            	$dev = $row['device'];
               echo "<h3>$dev</h3>";

                $isEmpty++;
            }
            }
        }
        if($isEmpty==0){
        	echo "<h3>Your shoppng cart is empty</h3>";
		}
	}
		 ?>
        
		
	</div>
</body>
</html>