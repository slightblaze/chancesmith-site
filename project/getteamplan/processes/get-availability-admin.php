<?php
	include_once('db.php');

	//Replace * in the query with the column names.
    $result = mysql_query("SELECT 
							SUM(m1) AS m1,SUM(t1) AS t1,SUM(w1) AS w1,SUM(th1) AS th1,SUM(f1) AS f1,SUM(s1) AS s1,SUM(sun1) AS sun1,
							SUM(m2) AS m2,SUM(t2) AS t2,SUM(w2) AS w2,SUM(th2) AS th2,SUM(f2) AS f2,SUM(s2) AS s2,SUM(sun2) AS sun2,
							SUM(m3) AS m3,SUM(t3) AS t3,SUM(w3) AS w3,SUM(th3) AS th3,SUM(f3) AS f3,SUM(s3) AS s3,SUM(sun3) AS sun3,
							SUM(m4) AS m4,SUM(t4) AS t4,SUM(w4) AS w4,SUM(th4) AS th4,SUM(f4) AS f4,SUM(s4) AS s4,SUM(sun4) AS sun4
							FROM team_availability");

    //Create an array
    $json_response = array();
    
    // $row_array = array(
    // 	array("m", "t", "w", "th", "f", "s", "sun"),
    // );
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
  //       for ($i = 1; $i <= 4; $i++) {
		//     $row_array[$i]['m'. $i] = $row['m'. $i];
	 //        $row_array[$i]['t'. $i] = $row['t'. $i];
	 //        $row_array[$i]['w'. $i] = $row['w'. $i];
	 //        $row_array[$i]['th'. $i] = $row['th'. $i];
	 //        $row_array[$i]['f'. $i] = $row['f'. $i];
	 //        $row_array[$i]['s'. $i] = $row['s'. $i];
	 //        $row_array[$i]['sun'. $i] = $row['sun'. $i];
		// }

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