<?php 
  session_start();
  include("header.php");
  $isTrue = 0;
  if (isset($_POST['login'])) {
    $email=$_POST["email"];
    $pass=$_POST["pass"];
     
          include 'connection.php';
          if ($conn->connect_error) {
          die("Connection error".$conn->connect_error);
           }
         $sql="SELECT * FROM users";//email='$email' AND pass='$pass'";
         $result=$conn->query($sql);
          if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if ($email==$row['Email'] and $pass==$row['Pass']){
                $n = $row['Name'];
                $s = $row['Surname'];
                $j = $row['Email'];
                $name = $n." ".$s;
                header("Location: /Android/index.php?name=$name&&Email=$j");

                $isTrue = 1;  
            }
            }

          }
          $isTrue = 2;
          

        
          
       }


 ?>
  <div class="navbar" style="margin-top:80px;">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 centered" id="Login-content">
          <h1 style="text-align:center;color:#6ab344;">Log in<img src="img/mn-logo-2x.png" style="float:right;width:100px;"></h1>
          <br>
          <?php 
            if($isTrue==2){
            echo "<h4>You have not registrated</h4>";
            }
           ?>
          <form role="form" method="post"> 
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Your email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="pass" class="form-control" id="pwd" placeholder="Your pasword">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-info" name="login">Log in</button>
            <hr>
            Not a member ?<br>
              <form>
                <input type="button" class="btn btn-info" value="Sign in" onClick='location.href="Android-Sign-Up.php"'>
              </form>
          </form>
      </div>
    </div>
  </div>
  <?php 
  require_once("footer.php");
 ?>
  </body>
</html>