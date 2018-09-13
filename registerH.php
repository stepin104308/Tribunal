<?php  
ob_start();
require("utility.php"); ?>

<?php
$u_name=$_POST['u_name'];
$f_name=$_POST['f_name'];
$pwd=$_POST['pwd'];
$dept=$_POST['dept'];
$year=$_POST['year'];


$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="ups/$ima";
move_uploaded_file($imup, $path);


//$image = chunk_split(base64_encode(file_get_contents( $imup )));


$sql=" INSERT INTO user (username,fullname,password,dept,year,user_type) values ('$u_name','$f_name','$pwd','$dept','$year','user')";

$result=ExecuteNonQuery ($sql);

if($result)
{
	header("location:notification.php");
}
else
{
		header("location:register.php");
}
?> 	