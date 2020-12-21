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

    $username = mysqli_real_escape_string($conn,$_POST['adminName']);
    $password = mysqli_real_escape_string($conn,$_POST['adminPassword']);
    
    if($username !="" && $password !=""){
        $sql = "select * from admin where name='$username' and password='$password'";
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
	$adminId=$_POST['adminId']; 
	$adminName=$_POST['adminName'];

	$adminPassword=$_POST['adminPassword'];
	$adminPhoneNumber=$_POST['adminPhoneNumber'];
    $adminEmail=$_POST['adminEmail'];
   

	$sql="insert into admin values('$adminId','$adminName','$adminPhoneNumber','$adminEmail','$adminPassword')";
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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container " >


<div class="card bg-secondary text-white" style="max-width: 350px; margin:0 auto; background-image: url(images/background.jpg);
		background-repeat: no-repeat;" >

<article class="card-body mx-auto " style="max-width: 350px;">
	<h4 class="card-title mt-3 text-center" >
	<?php
		if(isset($_GET['id'])){
			//echo "Update Admin";
		}else{
			//echo "<body style=background-color:powderblue;>";
			echo "Admin Registration";
		}	
	?>
	</h4>

	<p class="text-center">Get started with your free account</p>
	
	
	<form name="adminRegistration" action="adminRegistration.php" method="POST" style = " bg-secondary;">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		<input name="adminId" class="form-control" placeholder="Admin ID" type="text" value="<?php 
		if(isset($_GET['id'])) { echo $id; } ?>">
    </div> <!-- form-group// -->
	
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="adminName" class="form-control" placeholder="Full name" type="text"  value="<?php 
		if(isset($_GET['id'])) { echo $name; } ?>">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="adminEmail" class="form-control" placeholder="Email address" type="email"  value="<?php 
		if(isset($_GET['id'])) { echo $email; } ?>">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>	
    	<input name="adminPhoneNumber" class="form-control" placeholder="Phone number" type="text"  value="<?php 
		if(isset($_GET['id'])) { echo $contactNo; } ?>">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="adminPassword" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="adminRepeatPassword" class="form-control" placeholder="Confirm Password" type="password">
    </div> <!-- form-group// --> 

    <div class="form-group">
        
		<?php
		if(isset($_GET['id'])){
			echo '<button type ="submit" class ="btn btn-primary 
			btn-block" name="update"> Update Admin </buton>';
		}else{
			echo '<button type ="submit" class ="btn btn-primary
			 btn-block" name ="insert"> Create Account </buton>';
		}	
	?>  

    </div> <!-- form-group// -->

    <p class="text-center" style="color:black">Have an account? <a href="login.php" style="color: lightyellow;">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>

<article class="bg-secondary mb-3">  
</article>