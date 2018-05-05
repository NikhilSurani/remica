<title>SiddharthManufacturing</title><?php
session_start();

include "config.php";

 $img = $_FILES[ima][name];
 $name = $_POST['name'];

if (isset($_SESSION['uname']))
{
	$dir = "images/h_img";	
	
	$que = mysql_query("INSERT INTO h_img VALUES(null,'$name','$img')");
	
	if ($que)
		header ("location:list.php");
		
		
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
         //echo "Success";
		 if ($que)
		header ("location:list.php");
      }else{
         print_r($errors);
      }
}
else 
echo "You are not allowed";
?>