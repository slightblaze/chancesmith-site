<?php
	include_once('db.php');

	$name = mysql_real_escape_string( $_POST["first_name"] );
	// $password = mysql_real_escape_string( md5($_POST["pass"]) );
	// $fname = mysql_real_escape_string( $_POST["fname"] );
	// $lname = mysql_real_escape_string( $_POST["lname"] );


	if( empty($name))
	{
		echo "Name field is mandatory - from PHP!";
		exit();
	}
 
 
	$res = mysql_query("SELECT first_name FROM team_members WHERE first_name='$name'");

	$row = mysql_fetch_row($res);

	if( $row > 0 ){
		$error = $name . " already exists. (database fail)";
		echo '<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> ' . $error . '</div>';
	} else {
		//insert Team Member
		$sql = "INSERT INTO team_members VALUES('','$name','','','','')";
		if( mysql_query($sql) ){
			//insert Default Availability
			$teamMemberId = mysql_insert_id();
			
			$sql2 = "INSERT INTO team_availability VALUES('$teamMemberId','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')";
			if( mysql_query($sql2) ){
				$message =  $name . " was added!";
				echo '<div class="alert alert-success" role="alert"><strong>Yay!</strong> ' . $message . '</div>';
			} else {
				$error = "Couldn't add " . $name;
				echo '<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> ' . $error . '</div>';
			}

		}
		else
			echo "Team Member Insertion Failed";
	}
?>