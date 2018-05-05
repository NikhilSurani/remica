<title>SiddharthManufacturing</title><?php
session_start();

include "config.php";

echo $img = $_FILES[ima][name];
 $name = $_POST['name'];
 $id = $_REQUEST['id'];
 
if (isset($_SESSION['uname']))
{
	
	
	if ($_REQUEST['type'] == "h_img")
	{	
		$a = mysql_query("SELECT * FROM h_img WHERE id='$id'");
		$res = mysql_fetch_array($a);
		if (empty($img))
		{
			echo $img = $res['h_img'];
		}
	$dir = "images/h_img";	
	$que = mysql_query("UPDATE h_img SET h_img='$img' WHERE id='$id'");
	$que1 = mysql_query("UPDATE h_img SET h_name='$name' WHERE id='$id'");
	if ($que)
	{
		unlink("images/h_img/".$res['h_img']);
		header ("location:list.php");
	}
	}
	
	
	
	
	if ($_REQUEST['type'] == "Catalog" || $_REQUEST['type'] == "Slider")
	{	
	$a = mysql_query("SELECT * FROM home WHERE id='$id'");
			$res = mysql_fetch_array($a);
	if (!(isset($img)))
		{
			$img = $res['img'];
		}
	$dir = "images/".$name;	
	$que = mysql_query("UPDATE home SET img='$img' WHERE id='$id'");
	
	if ($que)
	{
		unlink("images/".$name."/".$res['img']);
		header ("location:list.php");
	}	
	}	
		$errors= array();
      $file_name = $_FILES['ima']['name'];
      $file_size =$_FILES['ima']['size'];
      $file_tmp =$_FILES['ima']['tmp_name'];
      $file_type=$_FILES['ima']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['ima']['name'])));
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$dir."/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
}
else 
echo "You are not allowed";
?>