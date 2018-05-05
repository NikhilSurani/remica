<title>SiddharthManufacturing</title><?php
session_start();
include "config.php";
if (isset($_SESSION['uname']))
{
	echo $x = $_REQUEST['id'];
	echo $y = $_REQUEST['type'];
	if ($y == "j")
	{	
		$q = mysql_query("SELECT * FROM jew WHERE id = '$x'");
		$res = mysql_fetch_array($q);
		unlink("images/".$res['name']."/".$res['img']);
		unlink("images/".$res['name']."/".$res['img2']);
		unlink("images/".$res['name']."/".$res['img3']);
		unlink("images/".$res['name']."/".$res['img4']);
		$que = mysql_query("DELETE FROM jew WHERE id = '$x'");
		
		if ($que)
		header ("location:delete.php");
		
	}
	
	else if ($y == "c")
	{
		$q = mysql_query("SELECT * FROM home WHERE id = '$x'");
		$res = mysql_fetch_array($q);
		$que = mysql_query("DELETE FROM home WHERE 	id = '$x'");
		unlink ("images/".$res['name']."/".$res['img']);
		if ($que)
		header ("location:delete.php");
		
	}
	else if ($y == "h")
	{
		$q = mysql_query("SELECT * FROM h_img WHERE id = '$x'");
		$res = mysql_fetch_array($q);
		$que = mysql_query("DELETE FROM h_img WHERE id = '$x'");
		unlink("images/h_img/".$res['h_img']);
		if ($que)
		header ("location:delete.php");
		
	}
}
else
{
	echo "invalid";
}
?>