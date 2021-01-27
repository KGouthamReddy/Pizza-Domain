<?php 


$conn = mysqli_connect('localhost' , 'Shaun' , 'Test@1234' , 'ninja_pizza');


	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error(); 
	}





?>
