<?php
	include_once('db.php');

    $teamMemberId = mysql_real_escape_string( $_POST["id"] );
    $col = mysql_real_escape_string( $_POST["col"] );
    $col = str_replace(' ', '', $col);

	//Replace * in the query with the column names.
    $value = mysql_query("SELECT $col FROM team_availability WHERE team_member_id=$teamMemberId limit 1") or die(mysql_error());

    $status = mysql_result($value, 0);

    if ($status == 0){
        $result = mysql_query("UPDATE team_availability SET $col=1 WHERE team_member_id=$teamMemberId") or die(mysql_error());
        $end = mysql_fetch_object($result);
        echo 1;
    } else if ($status == 1) {
        $result = mysql_query("UPDATE team_availability SET $col=0 WHERE team_member_id=$teamMemberId") or die(mysql_error());
        $end = mysql_fetch_object($result);
        echo 0;
    } else {
        $result = mysql_query("UPDATE team_availability SET $col=0 WHERE team_member_id=$teamMemberId") or die(mysql_error());
        $end = mysql_fetch_object($result);
        echo 0;
    }


// m1 AS m1,t1 AS t1,w1 AS w1,th1 AS th1,f1 AS f1,s1 AS s1,sun1 AS sun1,
// m2 AS m2,t2 AS t2,w2 AS w2,th2 AS th2,f2 AS f2,s2 AS s2,sun2 AS sun2,
// m3 AS m3,t3 AS t3,w3 AS w3,th3 AS th3,f3 AS f3,s3 AS s3,sun3 AS sun3,
// m4 AS m4,t4 AS t4,w4 AS w4,th4 AS th4,f4 AS f4,s4 AS s4,sun4 AS sun4


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