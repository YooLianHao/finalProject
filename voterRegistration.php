<?php
$servername = "localhost";  //localost for local PC or use IP
$username = "root";
$password = "";
$database = "votesystem";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//if user click create button
if(isset($_POST['insert'])){  

	
	$firstname = mysqli_real_escape_string($conn,$_POST['voterFirstName']);
    $password = mysqli_real_escape_string($conn,$_POST['voterPassword']);
    
    if($firstname !=""&&  $password !=""){
        $sql = "select * from voters where firstname='$firstname' and password='$password'";
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
			
			 //recieved input value
	$id=$_POST['ID']; 
	$voterId=$_POST['voterId'];	
	$voterFirstName=$_POST['voterFirstName'];
	$voterLastName=$_POST['voterLastName'];
	$voterPassword=$_POST['voterPassword'];
    $voterPhoto=$_POST['voterPhoto'];

	$sql="insert into voters values('$id','$voterId','$voterFirstName','$voterLastName','$voterPassword','$voterPhoto')";

	echo $sql="insert into voters values('$id','$voterId','$voterFirstName','$voterLastName','$voterPassword','$voterPhoto')";

    $result = $conn->query($sql);
             
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
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true">Voter</a>
</li>
<li class="nav-item">
<a class="nav-link " id="home-tab" data-toggle="tab" href="candidateRegistration.php" role="tab" aria-controls="home" aria-selected="true">Candidate</a>
</li>
</ul>

<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<h3 class="register-heading">Apply as a Voter</h3>

<form name="voterRegistration" action="voterRegistration.php" method="POST" style = " bg-secondary;">
<div class="row register-form">

<div class="col-md-6">
	<div 
	class="form-group">
	
		<input name="ID" type="text" class="form-control" placeholder="ID *" value="<?php 
			if(isset($_GET['id'])) { echo $id; } ?>" />
	</div>

	<div class="form-group">
	<input name="voterId" class="form-control" placeholder="Voter ID *" type="text"  value="<?php 
	if(isset($_GET['id'])) { echo $voterid; } ?>">
	</div>

	

	<div class="form-group">
			<a>Image</a>
	        <input type='file' name='voterPhoto' value="<?php 
			if(isset($_GET['id'])) { echo $photo; } ?>" />
  
  </div>

</div>

<div class="col-md-6">
	<div class="form-group">
	<input name="voterFirstName" class="form-control" placeholder="Your First Name *" type="text"  value="<?php 
    if(isset($_GET['id'])) { echo $contactNo; } ?>">
	</div>

	<div class="form-group">
	<input name="voterLastName" class="form-control" placeholder="Your Last Name *" type="password">
	</div>

    <div class="form-group">
			<input name="voterPassword" class="form-control" placeholder="Your Password *" type="text"  value="<?php 
			if(isset($_GET['id'])) { echo $password; } ?>">
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
