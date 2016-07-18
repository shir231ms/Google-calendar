<?php
	$db_host= "dbhome.cs.nctu.edu.tw";
	$db_name= "scyuan1221_cs";
	$db_user= "scyuan1221_cs";
	$db_password= "09931221";
	$dsn= "mysql:host=$db_host;dbname=$db_name";
	$db= new PDO($dsn, $db_user, $db_password);
	
	//$code=$_GET["code"];
	//$account=$_COOKIE["account"];
	//$ee=$_COOKIE["token"];
	//echo $ee;
	$sql5="INSERT INTO `np_final_user_list`(account,access_token)"
	."VALUES( '". 
			 $_COOKIE["account"].
			 "',
			 '". 
			 $_COOKIE["token"].
			 "'
			 )";
	$sth5= $db->prepare($sql5);//how to input employerID?
	$sth5->execute();
	
	header('location: quickstart.html');
?>