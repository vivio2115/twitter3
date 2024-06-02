<?php 
	$dsn = 'mysql:host=172.93.105.132; dbname=db_los_angos_dc';
	$user = 'root';
	$password = 'dIpG01c_*ssaB0ai0A+EckjzzMGf@b9A75C1E@#Az';
 

	try{
		$pdo = new PDO($dsn, $user, $password);
	}catch(PDOException $e){
		echo 'connection error! ' . $e->getMessage();
	}	
?>
