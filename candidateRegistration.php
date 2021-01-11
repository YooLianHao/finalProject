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

    $name = mysqli_real_escape_string($conn,$_POST['candidateName']);
    $password = mysqli_real_escape_string($conn,$_POST['candidatePassword']);
    
    if($name !="" && $password !=""){
        $sql = "select * from candidate where name='$name' and password='$password'";
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
	$candidateId=$_POST['candidateId']; 
	$candidateImage=$_POST['candidateImage'];	
	$candidateName=$_POST['candidateName'];		
	$candidatePassword=$_POST['candidatePassword'];
	$candidatePhoneNumber=$_POST['candidatePhoneNumber'];
    $candidateEmail=$_POST['candidateEmail'];
   

	$sql="insert into candidate values('$candidateId','$candidateImage','$candidateName','$candidatePhoneNumber','$candidateEmail','$candidatePassword')";
	
	 //echo $sql="insert into candidate values('$candidateId','$candidateImage','$candidateName','$candidatePhoneNumber','$candidateEmail','$candidatePassword')";

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
<link rel="stylesheet" href="userCandidateRegister.css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register" method="POST">
<div class="row">
<div class="col-md-3 register-left">
<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
<h3>Welcome</h3>
<p>Register now to view more details</p>

<a href="login.php"><input type="submit" name="login.php" value="Login"/></input></a><br/>

</div>

<div class="col-md-9 register-right">
<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link " id="home-tab" data-toggle="tab" href="userRegistration.php" role="tab" aria-controls="home" aria-selected="true">User</a>
</li>
<li class="nav-item">
<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="false">Candidate</a>
</li>
</ul>

<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<h3 class="register-heading">Apply as a Candidate</h3>

<form name="userRegistration" action="candidateRegistration.php" method="POST" style = " bg-secondary;">
<div class="row register-form">

<div class="col-md-6">
	<div 
	class="form-group">
	
		<input name="candidateId" type="text" class="form-control" placeholder="Candidate ID *" value="<?php 
			if(isset($_GET['id'])) { echo $id; } ?>" />
	</div>

	<div class="form-group">
	<input name="candidateName" class="form-control" placeholder="Full name *" type="text"  value="<?php 
	if(isset($_GET['id'])) { echo $name; } ?>">
	</div>

	<div class="form-group">
			<input name="candidateEmail" class="form-control" placeholder="Your Email *" type="email"  value="<?php 
			if(isset($_GET['id'])) { echo $email; } ?>">
	</div>

	<div class="form-group">
	        <input type='file' name='candidateImage' value="<?php 
			if(isset($_GET['id'])) { echo $image; } ?>" />
  
  </div>

</div>

<div class="col-md-6">
	<div class="form-group">
	<input name="candidatePhoneNumber" class="form-control" placeholder="Your Phone *" type="text"  value="<?php 
    if(isset($_GET['id'])) { echo $contactNo; } ?>">
	</div>

	<div class="form-group">
	<input name="candidatePassword" class="form-control" placeholder="Password *" type="password">
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


	
