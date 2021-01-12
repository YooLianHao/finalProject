<?php
	include 'model/session.php';

	$sql = "DELETE FROM votes";
	if($conn->query($sql)){
		$_SESSION['success'] = "Votes reset successfully";
	}
	else{
		$_SESSION['error'] = "Something went wrong in reseting";
	}

	header('location: viewUsers.php');

?>