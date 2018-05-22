
<?php
abstract /**
* 
*/
class Connect_x extends AnotherClass
{
	
	connect()
	{
	$uname = "root";
	$pass = "";
	$host = "localhost";
	$dbname = "";

	$connection = new mysqli($host, $uname, $pass, $dbname);
	if ($connection -> connect_error)
	{
		die("Connection failed: ".$connection.connect_error);
	}
	echo "Connection worked.";
	}
}

?>	

