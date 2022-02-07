<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('SR No.')
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email');
    
#step2 : prepare the Query
$sql = "SELECT * from emp";

#step3 : Execute the Query or Fire the Query
$result_set = mysqli_query($conn,$sql);

if(mysqli_num_rows($result_set)>0){

$data = [];
while($row=mysqli_fetch_assoc($result_set)){
	$data[] = $row;
}	


}else if(mysqli_num_rows($result_set)==0){
	echo 'No Record Found';
}else{
	echo 'Selection Error'.mysqli_error($conn);
}

$i=1;
foreach($data as $row){

	$table->addRow()
		->addColumn($i)
        	->addColumn($row['id'])
        	->addColumn($row['name'])
		->addColumn($row['email']);
		$i++;
}

$table->display();

