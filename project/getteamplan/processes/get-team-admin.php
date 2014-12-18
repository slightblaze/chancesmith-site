<?php
	include_once('db.php');

	//Replace * in the query with the column names.
    $result = mysql_query("SELECT * FROM team_members");

    //Create an array
    $json_response = array();
    
    // $row_array = array(
    // 	array("m", "t", "w", "th", "f", "s", "sun"),
    // );
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

        $row_array['id'] = $row['id'];
        $row_array['first_name'] = $row['first_name'];

        //push the values in the array
        array_push($json_response,$row_array);
    }
    echo json_encode($json_response);


    //Close the database connection
    fclose($db);

	// $row = mysql_fetch_row($res);

	// if( $row < 0 ){
	// 	$error = "No rows found (database fail)";
	// 	echo '<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> ' . $error . '</div>';
	// } else {
	// 	$message =  "View updated!";
	// 	echo '<div class="alert alert-success" role="alert"><strong>Boom!</strong> ' . $message . '</div>';
	// }
?>