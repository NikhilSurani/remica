
<?php
error_reporting(0);
$username = "root";
$password = "";
$hostname = "localhost"; 
$db_database = 'remicatiles';

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

$selected = mysql_select_db($db_database, $dbhandle) 
  or die("Could not select examples");

    // error_reporting(0);
    //  mysql_connect("localhost","root","");
    // mysql_connect ("localhost","root","") or die ("Error");
    // mysql_select_db ("remicatiles") or die ("Db not found	");
    
?>  