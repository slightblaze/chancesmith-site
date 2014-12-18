<?php
	include_once('db.php');

	$teamMemberId = mysql_real_escape_string( $_POST["id"] );

	//Replace * in the query with the column names.
    $result = mysql_query("SELECT * FROM team_availability WHERE `team_member_id`=$teamMemberId") or die(mysql_error());

    //Create an array
    $json_response = array();

    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

        $row_array['m1'] = $row['m1'];
        $row_array['t1'] = $row['t1'];
        $row_array['w1'] = $row['w1'];
        $row_array['th1'] = $row['th1'];
        $row_array['f1'] = $row['f1'];
        $row_array['s1'] = $row['s1'];
        $row_array['sun1'] = $row['sun1'];
        $row_array['m2'] = $row['m2'];
        $row_array['t2'] = $row['t2'];
        $row_array['w2'] = $row['w2'];
        $row_array['th2'] = $row['th2'];
        $row_array['f2'] = $row['f2'];
        $row_array['s2'] = $row['s2'];
        $row_array['sun2'] = $row['sun2'];
        $row_array['m3'] = $row['m3'];
        $row_array['t3'] = $row['t3'];
        $row_array['w3'] = $row['w3'];
        $row_array['th3'] = $row['th3'];
        $row_array['f3'] = $row['f3'];
        $row_array['s3'] = $row['s3'];
        $row_array['sun3'] = $row['sun3'];
        $row_array['m4'] = $row['m4'];
        $row_array['t4'] = $row['t4'];
        $row_array['w4'] = $row['w4'];
        $row_array['th4'] = $row['th4'];
        $row_array['f4'] = $row['f4'];
        $row_array['s4'] = $row['s4'];
        $row_array['sun4'] = $row['sun4'];
        


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