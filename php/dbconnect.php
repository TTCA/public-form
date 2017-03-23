<?php
	
	$mysql_host = 'athena.nitc.ac.in';
	$mysql_username = 'b130727cs';
	$mysql_password = '8686325560';
	$mysql_db = 'azharullah';
	$connection_error = "<h3>No Connection</h3> <br> Please Check Your Internet Connection";
	$mysql_conn = mysql_connect($mysql_host,$mysql_username,$mysql_password,$mysql_db);
	// if(!mysql_conn){
    //     echo $connection_error . mysql_error();
    // }
	mysql_select_db("azharullah");
?>