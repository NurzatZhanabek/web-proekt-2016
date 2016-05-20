<?php 
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
      $email = $_GET["Email"];}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Android</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

</head>
<body>
  <div class="navbar navbar-default navbar-fixed-top" style="height:80px;">
    <?php 
       if (isset($_GET['name'])) {
        $name = $_GET['name'];
            echo "<div class='icon1'><a href='index.php?name=$name&&Email=$email' > <img src='img/1.png' style='width:140px;margin-top:10px;'></a>";
          }else{
            echo "<div class='icon1'><a href='index.php' > <img src='img/1.png' style='width:140px;margin-top:10px;'></a>";
          }
     ?>
   
    
    </div>
    <ul class="menu4" >
        <li ><a href="#">Devices</a>
          <ul class="dropdown-menu-1">
          <?php 
              if (isset($_GET['name'])) {
        $name = $_GET['name'];
            echo "<li><a href='Wear.php?name=$name&&Email=$email'>ANDROID WEAR</a></li><br>
            <li><a href='Phone.php?name=$name&&Email=$email'>PHONES</a></li><br>";
          }else{
            echo "<li><a href='Wear.php'>ANDROID WEAR</a></li><br>
            <li><a href='Phone.php'>PHONES</a></li><br>";
          }
           ?>
          
            
          </ul>
        </li>
        <?php 
          if (isset($_GET['name'])) {
            $name = $_GET['name'];
            if ($name!="") {
            echo "<li style = 'color: #B4B6B6;'>$name</li>";
            echo "<li><a href='shopcart.php?name=$name'><span class='glyphicon glyphicon-shopping-cart'></span></a></li>";  
            }
            
          }else{
            echo "<li><a href='Android-Sign-Up.php'><span class='glyphicon glyphicon-user'></span>Sign up</a></li>
        <Li><a href='Android-Login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></Li>";
          }
         ?>
        
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
    </ul>
  </div>