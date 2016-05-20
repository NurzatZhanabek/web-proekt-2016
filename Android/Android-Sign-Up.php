<?php 
  session_start();
  require_once("header.php");
  if (isset($_POST['submit'])){ 
  $name=$_POST["name"];
  $surname=$_POST["surname"];
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  $repass=$_POST["repass"];

        include 'connection.php';
        if ($conn->connect_error) {
          die("Connection error".$conn->error);
          }
           $sql="SELECT Email FROM users ";
           $result=$conn->query($sql);
           $count = 0;
            if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if ($email==$row['Email']) {
               $count++;
              }
           
         }
         
        }
  
        if($count==0){
          $sql="INSERT INTO users(name,surname,email,pass) VALUES ('$name','$surname','$email','$pass')";
          if($conn->query($sql)===TRUE){
            header("Location: /Android/Android-login.php");
            echo ('succesfull');
          }
      
        $conn->close();}else { echo "LOgin has already registrated";}
      
  } 
 ?>
  <div style="height:70px;">

  </div>
  <div class="navbar">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 centered" id="registration-content"  >
          <h1 style="text-align:center;color:#6ab344;">Sign up<img src="img/mn-logo-2x.png" style="float:right;width:100px;"></h1>
          <br>
          <form role="form" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="Name" class="form-control" id="name" placeholder="Your name" name="name" required>
            </div>
            <div class="form-group">
              <label for="Surname">Surname:</label>
              <input type="Surname"  name="surname" class="form-control" id="Surname" placeholder="Your surname" required>
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Your email" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="pass" class="form-control" id="pwd" placeholder="Your pasword" required>
            </div>
            <div class="form-group">
              <label for="cpwd">Confirm password:</label>
              <input type="cpassword" name ="repass" class="form-control" id="cpwd" placeholder="Confirm Pasword" required>
            </div>
 <!--            <div class="checkbox">
              Your sex:<br>
              <label><input  type="radio" name="sex">&nbsp;Man</label>
              <label><input  type="radio" name="sex">&nbsp;Woman</label>
            </div> -->
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-info" name="submit">Submit</button>
            <br>
            Already a member ?<br>
            <form>
              <input type="button" class="btn btn-info" value="Login" onClick='location.href="Android-Login.php"'>
            </form>
          </form>
      </div>
    </div>
  </div>
<?php 
  require_once("footer.php");
 ?>