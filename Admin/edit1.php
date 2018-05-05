<title>SiddharthManufacturing</title>
<?php
session_start();

include_once("config.php");
include_once("constants.php");

	 $name = $_POST['name'];
	 $details = $_POST['details'];
	 $type = $_POST['type'];
 	 echo $img = $_FILES[ima][name];
	 
	 $id = $_REQUEST['id'];
	 $y = $_REQUEST['t'];

	 echo $type = $_POST['main_category'];
	 echo $sub_type = $_POST['sub_category'];
	 echo $image_title = $_POST['image_name'];      
	 echo $description = $_POST['details'];		
		echo $origional_image_name = $_FILES['ima']['name'];
		echo $status = '1';
		echo  $date = date('Y-m-d H:i:s');
	 
if (isset($_SESSION['uname']))
{
		$que1 = mysql_query("SELECT * FROM products WHERE id= '$id'");
		$res1 = mysql_fetch_array($que1);

		$dir = "../img/portfolio/";
		$dir = $dir.$res1['name'];		
		
		if ($img == "")
		{
			$img = $res1['img'];
		}
		else
		{
			unlink ($dir);
		}
		
		
		$que = mysql_query("UPDATE jew SET type='$name', img='$img[0]', img2='$img[1]', img3='$img[2]', img4='$img[3]' WHERE id='$id'"); 
		//$que1 = mysql_query("UPDATE jew SET desc='$details' WHERE id='$id'"); 
		
		if ($que)
		header ("location:list.php");
		
		
	for ($key=0;$key<4;$key++)
	{
		if ($_FILES['ima']['name'][$key] != "")
		{
      $errors= array();
      $file_name = $_FILES['ima']['name'][$key];
      $file_size =$_FILES['ima']['size'][$key];
      $file_tmp =$_FILES['ima']['tmp_name'][$key];
      $file_type=$_FILES['ima']['type'][$key];
      $file_ext=strtolower(end(explode('.',$_FILES['ima']['name'][$key])));
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
}
}
else 
echo "You are not allowed";
?>