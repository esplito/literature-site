<?php
{
	$uname = "root";
	$pass = "";
	$host = "localhost";
	$dbname = "kursbok";

	$connection = new mysqli($host, $uname, $pass, $dbname);
	if ($connection -> connect_error)
	{
		die("Connection failed: ".$connection.connect_error);
	}
	echo "Connection worked.";
	}
}

?>	

