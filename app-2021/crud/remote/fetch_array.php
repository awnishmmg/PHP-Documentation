<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';
   
#step2 : prepare the Query
$sql = "SELECT * from emp";

#step3 : Execute the Query or Fire the Query
$result_set = mysqli_query($conn,$sql);

if(mysqli_num_rows($result_set)>0){

while($row=mysqli_fetch_assoc($result_set)){
	print_r($row);
}	


}else if(mysqli_num_rows($result_set)==0){
	echo 'No Record Found';
}else{
	echo 'Selection Error'.mysqli_error($conn);
}



