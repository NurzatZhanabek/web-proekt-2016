<?php
	mysql_connect("localhost","root","")
	or die ("Server:".mysql_error());

	mysql_select_db("android")
	or die ("DBer:".mysql_error());

	$conn= mysqli_connect("localhost","root","","android");
	
	?>