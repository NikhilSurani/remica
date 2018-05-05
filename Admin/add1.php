<title>SiddharthManufacturing</title>
<?php

session_start();

// ini_set('display_errors', '1');
// error_reporting( E_ALL );

include_once("config.php");

// echo dirname(__FILE__); die;

// echo "<pre>"; print_r($_FILES);
// echo"<pre>"; print_r($_POST); die;
      echo $type = $_POST['main_category'];
      echo $sub_type = $_POST['sub_category'];
      echo $image_title = $_POST['image_name'];      
      echo $description = $_POST['details'];		
       echo $origional_image_name = $_FILES['ima']['name'];
       echo $status = '1';
       echo  $date = date('Y-m-d H:i:s');
	

if (isset($_SESSION['uname']))
{
		
      $dir = "../img/portfolio/";

      $que = mysql_query("INSERT INTO products VALUES(null,'$image_title','$description','$type','$sub_type','$origional_image_name','$status','$date')");      
      
	// for ($key=0;$key<4;$key++)
	// {
      $errors= array();
      $file_name = $_FILES['ima']['name'];
      $file_size =$_FILES['ima']['size'];
      $file_tmp =$_FILES['ima']['tmp_name'];
      $file_type=$_FILES['ima']['type'];
      $tmp = explode('.', $file_name);
      $file_ext=strtolower(end($tmp));
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      // echo $dir; die;
      if(empty($errors)==true && $que){
         move_uploaded_file($file_tmp,$dir.$file_name);
      //   echo "Success";
		 
      }else{
         echo "Error";
      }
// }
header ("location:list.php");
}
else 
echo "You are not allowed";
?>