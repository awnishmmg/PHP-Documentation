<?php

//wap in php to connect to mysql database
include_once __DIR__.'/settings.php'; 

try{	
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	if($conn = mysqli_connect(HOST,USER,PASSWORD,DBNAME)){	
	#print_r($conn);
	}else{
		throw new Exception();
	}
	
}catch(Exception $e){
	echo $e->getMessage();
	exit('DB Connection Failed '.mysqli_connect_error());
}




