<?php 
if (isset($_POST['signup'])){
	unset($_POST['signup']);
	header("Location: jobs.php");
}else{
	//nothing
}