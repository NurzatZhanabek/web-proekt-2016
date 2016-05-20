<?php
	function toUploadPhoto($uid,$url){
		include 'connection.php';
		$query = "INSERT INTO images(uid, url) VALUES($uid,'$url')";
		$conn->query($query);
	}
	function image($id){
		include 'connection.php';
		$sql="SELECT id,uid,url FROM images";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) {
			$i = 0;
        	while($row = $result->fetch_assoc()) {
         		if($row['uid']==$id and $i==0){
         			$e = $row['url'];
         			echo "<div \"><img src=\"$e\"></div>";
       				$i++;
         			}
                else if($row['uid']==$id){
       		       	$e = $row['url'];
           	        echo "<div \"><img src=\"$e\"></div>";
               	    $i++;
                }
	        }
        }
	}
	
?>