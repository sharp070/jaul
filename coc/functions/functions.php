<?php

 $hostname = 'localhost';
 $username = 'jaul';
 $password = 'jaul'; 
 $database = 'jaul';
 
 // Create connection
$connect = mysqli_connect($hostname, $username, $password, $database);

if (!$connect){
    die('Database Connection Failed ' . mysqli_connect_error());
}

//to get the user ip address
	function getIp() {
	    $ip = $_SERVER['REMOTE_ADDR'];
	 
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    } 
	    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
	 
	    return $ip;
	}

	//getting the total added items

	function total_plans(){
		if (isset($_GET['add_cart'])) {
			global $connect;

			$ip = getIp();

			$get_plans = "SELECT * FROM cart WHERE ip_add = '$ip'";

			$run_plans = mysqli_query($connect, $get_plans);

			$count_plans = mysqli_num_rows($run_plans);

			}
			else{
				global $connect;

				$ip = getIp();

				$get_plans = "SELECT * FROM cart WHERE ip_add = '$ip'";

				$run_plans = mysqli_query($connect, $get_plans);

				$count_plans = mysqli_num_rows($run_plans);
			}

			echo $count_plans;
		}

		//getting the total price
		function total_price(){
			$total = 0;

			global $connect;

			$ip = getIp();

			$select_price = "SELECT * FROM cart WHERE ip_add = '$ip'";

			$run_price = mysqli_query($connect, $select_price);

			while ($p_price = mysqli_fetch_array($run_price)) {
				
				$plan_id = $p_price['plan_id'];

				$plan_price = "SELECT * FROM plan WHERE plan_id = '$plan_id' ";

				$run_plan_price = mysqli_query($connect, $plan_price);

				while ($pp_price = mysqli_fetch_array($run_plan_price)) {
					
					$total_plan_price = array($pp_price ['plan_price']);

					$values = array_sum($total_plan_price);

					$total +=$values;
				}
			}

			echo "$ " . $total;

		}
