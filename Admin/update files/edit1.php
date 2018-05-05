<title>SiddharthManufacturing</title><?php
session_start();

include "config.php";

	 $name = $_POST['name'];
	 $details = $_POST['details'];
	 $type = $_POST['type'];
 	 echo $img[0] = $_FILES[ima][name][0];
	 echo $img[1] = $_FILES[ima][name][1];
	 echo $img[2] = $_FILES[ima][name][2];
	 echo $img[3] = $_FILES[ima][name][3];
	 $id = $_REQUEST['id'];
	 $y = $_REQUEST['t'];
	 
if (isset($_SESSION['uname']))
{
		$que1 = mysql_query("SELECT * FROM jew WHERE id='$id'");
		$res1 = mysql_fetch_array($que1);
		$dir = "images/".$res1['name'];
		
		if ($img[0] == "")
		{
			$img[0] = $res1['img'];
		}
		else
		{
			unlink ($dir."/".$img[0]);
		}
		if ($img[1] == "")
		{
			$img[1] = $res1['img2'];
		}
		else
		{
			unlink ($dir."/".$img[1]);
		}
		if ($img[2] == "")
		{
			$img[2] = $res1['img3'];
		}
		else
		{
			unlink ($dir."/".$img[2]);
		}
		if ($img[3] == "")
		{
			$img[3] = $res1['img4'];
		}
		else
		{
			unlink ($dir."/".$img[3]);
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