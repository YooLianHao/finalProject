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
    $firstname = mysqli_real_escape_string($conn,$_POST['candidateFirstName']);
    $lastname = mysqli_real_escape_string($conn,$_POST['candidateLastName']);
    
    if($firstname !="" && $lastname !=""){
        $sql = "select * from candidates where firstname='$firstname' and lastname='$lastname'";
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
    $candidatePositionId=$_POST['candidatePositionId']; 
    $candidateFirstName=$_POST['candidateFirstName'];	
    $candidateLastName=$_POST['candidateLastName'];	
	$candidatePhoto=$_POST['candidatePhoto'];	
	$candidatePlatform=$_POST['candidatePlatform'];	
	
  $sql="insert into candidates values('$candidateId','$candidatePositionId','$candidateFirstName','$candidateLastName','$candidatePhoto','$candidatePlatform')";
  
  // $sql = "insert into candidate (position) values ('$candidatePosition')"; 
	
   //echo  $sql="insert into candidates values('$candidateId','$candidatePositionId','$candidateFirstName','$candidateLastName','$candidatePhoto','$candidatePlatform')";
  
   
   //,'$candidatePosition'

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

<a href="userLogin.php"><input type="submit" name="userLogin.php" value="Login"/></input></a><br/>

</div>

<div class="col-md-9 register-right">
<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link" id="home-tab" data-toggle="tab" href="voterRegistration.php" role="tab" aria-controls="home" aria-selected="true">Voter</a>
</li>
<li class="nav-item">
<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="false">Candidate</a>
</li>
</ul>

<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<h3 class="register-heading">Apply as a Candidate</h3>

<form name="candidateRegistration" action="candidateRegistration.php" method="POST" style = " bg-secondary;">
<div class="row register-form">

<div class="col-md-6">
	<div class="form-group">
	
        <input name="candidateId" type="text" class="form-control" placeholder="Candidate ID *" value="<?php 
	    if(isset($_GET['id'])) { echo $id; } ?>" />
	</div>

    <div class="form-group">
            <label>Position ID</label>
            <select name= "candidatePositionId"  class="form-control">
                
                <option value="10">10</option>
                
                  
        </select> 
    </div>
    

	<div class="form-group">
	    <input name="candidatePositionId" class="form-control" placeholder="Position Id *" type="text"  value="<?php 
        if(isset($_GET['id'])) { echo $positionid; } ?>">
	</div>

	

	<div class="form-group">
			<a>Image</a>
	        <input type='file' name='candidatePhoto' value="<?php 
			if(isset($_GET['id'])) { echo $image; } ?>" />
  
  </div>

</div>

<div class="col-md-6">
	<div class="form-group">
	<input name="candidateFirstName" class="form-control" placeholder="First Name *" type="text"  value="<?php 
    if(isset($_GET['id'])) { echo $firstname; } ?>">
	</div>

	<div class="form-group">
	    <input name="candidateLastName" class="form-control" placeholder="Last Name *" type="text"  value="<?php 
        if(isset($_GET['id'])) { echo $lastname; } ?>">
	</div>

	
	<div class="form-group">
        <input name="candidatePlatform" class="form-control" placeholder="Platform *" type="text"  value="<?php 
        if(isset($_GET['id'])) { echo $platform; } ?>">
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
