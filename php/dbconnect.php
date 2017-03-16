<?php
	
	$mysql_host = 'localhost';
	$mysql_username = 'root';
	$mysql_password = '';
	$mysql_db = 'azharullah';
	$connection_error = "<h3>No Connection</h3> <br> Please Check Your Internet Connection";
	$mysql_conn = mysql_connect($mysql_host,$mysql_username,$mysql_password,$mysql_db);
	// if(!mysql_conn){
    //     echo $connection_error . mysql_error();
    // }
	mysql_select_db("azharullah");
?>