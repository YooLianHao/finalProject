<?php
	include 'model/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM positions WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Position deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

<<<<<<< HEAD
	header('location: position.php');
=======
	header('location: position.php.php');
>>>>>>> upstream/main
	
?>