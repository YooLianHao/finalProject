<<<<<<< HEAD
<?php
$servername = "localhost";  //localost for local PC or use IP
$username = "root";
$password = "";
$database = "e-voting";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  
  if($username !="" && $password !=""){
      $sql = "select * from user where name='$username' and password='$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      if($count == 1){
        
        //('') after login show the login page
          echo "<script>window.location.assign('');</script>";

      }else{
      
        echo '
        <!DOCTYPE html>
        <html>
        <head>
        <script>
        alert("Login Fail");
        </script>
        </head>
        <body>
        
        </body>
        </html>';
         
      }
  }
}
?>
=======

>>>>>>> 790c29aea81b473449d28856cf0b750052baf79c
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> E-voting System | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>E-Voting</b>System</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <!--/.login form -->
<<<<<<< HEAD
      <form action="login.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
=======
      <form action="controller/loginProcess.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
>>>>>>> 790c29aea81b473449d28856cf0b750052baf79c
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
<<<<<<< HEAD
          <input type="password" class="form-control" name="password"placeholder="Password">
=======
          <input type="password" class="form-control" name="pass"placeholder="Password">
>>>>>>> 790c29aea81b473449d28856cf0b750052baf79c
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["users"])) { ?> checked <?php } ?> />
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->

          <div class="col-4">
<<<<<<< HEAD

          <?php
		if(isset($_GET['id'])){
			echo "";
		}else{
			echo '<button type="submit" class="btn btn-primary
			 btn-block" name ="login"> Sign In </buton>';
		}	
	      ?>  
=======
            <button type="submit" class="btn btn-primary btn-block" name = "submit" id="">Sign In</button>
>>>>>>> 790c29aea81b473449d28856cf0b750052baf79c
          </div>

          <!-- /.col -->
        </div>
      </form>
<<<<<<< HEAD

=======
>>>>>>> 790c29aea81b473449d28856cf0b750052baf79c
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="userRegistration.php" class="text-center">Register New Account</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src=/dist/js/adminlte.min.js></script>

</body>
</html>