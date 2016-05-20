<?php 
	include 'connection.php';
	if (isset($_POST['device'])){ 
	  $device=$_POST["device"];
	  $information=$_POST["information"];
	  $point=$_POST["point"];
	  $photo=$_POST["photo"];

        
         
        
  
       
          $sql="INSERT INTO catalog(devices,information,point,photo) VALUES ('$device','$information','$point','$photo')";
          if($conn->query($sql)===TRUE){
            header("Location: /Android/Phone.php");
          }

      
        $conn->close();
}
      
  
 ?>
<form action="" method="post">
	<input type="text" name="device"><br>
	<textarea name="information" id="" cols="30" rows="10"></textarea><br>
	<input type="text" name='point' placeholder=''><br>
	<input type="text" name='photo'placeholder='url of photo'><br>
	<input type="submit" value='Add' >
</form>