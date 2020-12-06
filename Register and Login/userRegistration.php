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
	//recieved input value
	$userId=$_POST['userId']; 
	$userName=$_POST['userName'];

	$userPassword=$_POST['userPassword'];
	$userPhoneNumber=$_POST['userPhoneNumber'];
	$userEmail=$_POST['userEmail'];

	echo $sql="insert into user values('$userId','$userName','$userPhoneNumber','$userEmail','$userPassword')";

	$result = $conn->query($sql);
}

if(isset($_GET['id'])){
$id=$_GET['id'];  //received driver id from viewDrivers.php
$sql="select *from user where id ='$id'";
$result = $conn->query($sql);

if($result->num_rows > 0) {	
	while($row = $result->fetch_assoc()){

	$id=$row['id'];
	$name=$row['name'];
	$contactNo=$row['contactNo'];
	$email=$row['email'];

		}		
	}
}


if(isset($_POST['update'])){
	$userId=$_POST['userId'];
	$userName=$_POST['userName'];
	$userPhoneNumber=$_POST['userPhoneNumber'];
	$userEmail=$_POST['userEmail'];

	echo $sql="update user set name= '$userName', contactNo= '$userPhoneNumber', email = '$userEmail' 
	where id = '$userId'";
	$result=$conn->query($sql);
	echo "<script>window.location.assign('viewUsers.php');</script>";

}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">
	<?php
		if(isset($_GET['id'])){
			echo "Update User";
		}else{
			echo "User Registration";
		}	
	?>
	</h4>

	<p class="text-center">Get started with your free account</p>
	
	
	<form name="userRegistration" action="userRegistration.php" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		<input name="userId" class="form-control" placeholder="User ID" type="text" value="<?php 
		if(isset($_GET['id'])) { echo $id; } ?>">
    </div> <!-- form-group// -->
	
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="userName" class="form-control" placeholder="Full name" type="text"  value="<?php 
		if(isset($_GET['id'])) { echo $name; } ?>">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="userEmail" class="form-control" placeholder="Email address" type="email"  value="<?php 
		if(isset($_GET['id'])) { echo $email; } ?>">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>	
    	<input name="userPhoneNumber" class="form-control" placeholder="Phone number" type="text"  value="<?php 
		if(isset($_GET['id'])) { echo $contactNo; } ?>">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="userPassword" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="userRepeatPassword" class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// --> 

    <div class="form-group">
        
		<?php
		if(isset($_GET['id'])){
			echo '<button type ="submit" class ="btn btn-primary 
			btn-block" name="update"> Update User </buton>';
		}else{
			echo '<button type ="submit" class ="btn btn-primary
			 btn-block" name ="insert"> Create Account </buton>';
		}	
	?>  

    </div> <!-- form-group// -->

    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>

<article class="bg-secondary mb-3">  


</article>

