<?php

	$url='localhost';
	$username='root';
	$password='';
	$db = 'shop_demo';
	
	$conn = mysqli_connect($url,$username,$password,$db);

	if(!$conn)
	{
		die("Connection Failed :".mysqli_connect_error());
		
	}
	else
	{
		//echo "it Succes ";
	}

?>