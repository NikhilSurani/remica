<title>SiddharthManufacturing</title><?php
session_start();

if (session_destroy())
{
	header ("location:index.php");
	echo "you are successfully sign out";
	
}

?>