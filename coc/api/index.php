<?php
	session_start();
	include ("../functions/functions.php");

?>
<?php 

	header ('Content-Type: application/json');

	$p_email = 'sanjay@yahoo.com';

	$get_info = "SELECT * FROM users WHERE email= '$p_email'";

	$run_info = mysqli_query($connect, $get_info);
	$row_info = mysqli_fetch_array($run_info);

	if (empty($row_info['points'])){
        $points = 0;
    }			
    else{
    	$points = $row_info['points'];
    }

	echo json_encode($points);
 ?>