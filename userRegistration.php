<?php
$servername = "localhost";  //localost for local PC or use IP
$username = "root";
$password = "";
$database = "e-voting";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//if user click create button
if(isset($_POST['insert'])){  

	$id = mysqli_real_escape_string($conn,$_POST['userId']);
	$name = mysqli_real_escape_string($conn,$_POST['userName']);
	$contactNo = mysqli_real_escape_string($conn,$_POST['userPhoneNumber']);
	$email = mysqli_real_escape_string($conn,$_POST['userEmail']);
    $password = mysqli_real_escape_string($conn,$_POST['userPassword']);
    
    if($id !="" && $name !="" && $contactNo !="" && $email !="" &&  $password !=""){
        $sql = "select * from user where name='$name' and password='$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
        $count = mysqli_num_rows($result);
        if($count == 1){	
          
            echo  '
            <!DOCTYPE html>
            <html>
            <head>
            <script>
            alert("Repeated Account");
            </script>
            </head>
            <body>
            </body>
            </html>';

        }else{
      
            //recieved input value
	$userId=$_POST['userId']; 
	$userName=$_POST['userName'];

	$userPassword=$_POST['userPassword'];
	$userPhoneNumber=$_POST['userPhoneNumber'];
    $userEmail=$_POST['userEmail'];
    $userApproved = 0;

	$sql="insert into user values('$userId','$userName','$userPhoneNumber','$userEmail','$userPassword','$userApproved')";
	//echo $sql="insert into user values('$userId','$userName','$userPhoneNumber','$userEmail','$userPassword')";

    $result = $conn->query($sql);
            echo '
            <!DOCTYPE html>
            <html>
            <head>
            <script>
            alert("Register Successfully");
            </script>
            </head>
            <body>
            
            </body>
            </html>';
             
          }
        }
         
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="main.css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register" method="POST">
<div class="row">
<div class="col-md-3 register-left">
<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
<h3>Welcome</h3>
<p>Register now to view more details</p>
<input type="submit" name="" href="login.php" value="Login"/><br/>
</div>

<div class="col-md-9 register-right">
<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true">User</a>
</li>
<li class="nav-item">
<a class="nav-link" id="profile-tab" data-toggle="tab" href="candidateRegistration.php" role="tab" aria-controls="profile" aria-selected="false">Candidate</a>
</li>
</ul>

<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<h3 class="register-heading">Apply as a User</h3>

<form name="userRegistration" action="userRegistration.php" method="POST" style = " bg-secondary;">
<div class="row register-form">

<div class="col-md-6">
	<div 
	class="form-group">
	
		<input name="userId" type="text" class="form-control" placeholder="User ID *" value="<?php 
			if(isset($_GET['id'])) { echo $id; } ?>" />
	</div>

	<div class="form-group">
	<input name="userName" class="form-control" placeholder="Full name *" type="text"  value="<?php 
	if(isset($_GET['id'])) { echo $name; } ?>">
	</div>

	<div class="form-group">
			<input name="userEmail" class="form-control" placeholder="Your Email *" type="email"  value="<?php 
			if(isset($_GET['id'])) { echo $email; } ?>">
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
	<input name="userPhoneNumber" class="form-control" placeholder="Your Phone *" type="text"  value="<?php 
    if(isset($_GET['id'])) { echo $contactNo; } ?>">
	</div>

	<div class="form-group">
	<input name="userPassword" class="form-control" placeholder="Password *" type="password">
	</div>

	
	<div class="form-group">
		<input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
	</div>

	<?php
	if(isset($_GET['id'])){
		
	}else{
		echo '<button type="submit"
		class="btnRegister"
		name = "insert">
		Register
		</button>';
	}
	?>

	</form>
</div>
</div>
</div>