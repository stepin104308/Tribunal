<?php session_start();
		require("header.php");
		require("checkUser.php");       	 
?>

<?php 
	 $sql = "UPDATE user  SET  username = '".$_POST['un']."', fullname = '".$_POST['fn']."',password='".$_POST['pwd']."',dept='".$_POST['dept']."',year = '".$_POST['year']."' WHERE user_id =$_SESSION[uid]";
	 
	 
//echo $sql;	 
	 
$result=ExecuteNonQuery($sql);

if($result == 1)
{
	header("location:apupdate.php");
	
	}
	else
	{
	header("location:aedit.php");
	}
?>
      
<?php require("footer.php")?>	  