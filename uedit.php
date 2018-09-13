<?php session_start();
 require("header.php");
require("checkUser.php")?>
<script type="text/javascript">
function check(f)
	{
		if (f.un.value == "")
		{
			document.getElementById("a").innerHTML="Please,Enter the username";
			//alert("Please, Enter The Username");
			f.un.focus();
			return false;
		}
		else if (f.fn.value == "")
		{
			document.getElementById("b").innerHTML="Please,Enter the fullname";
//			alert ("Please,Please Enter The Fullname");
			f.fn.focus();
			return false;
		}
		else if (f.pwd.value == "")
		{
			document.getElementById("c").innerHTML="Please,Enter the password";
			//alert ("Please,Please Enter The Password");
			f.pwd.focus();
			return false;
		}
		else if (f.dept.value == "")
		{
			document.getElementById("dept").innerHTML="Please,Enter the Department ";
			//alert ("Please,Please Enter The E-mail Address");
			f.dept.focus();
			return false;
		}
		else if (f.year.value == "")
		{
			document.getElementById("e").innerHTML="Please, Enter the year";
			//alert("Please,Please Enter The Gender");
			f.year.focus();
			return false;
		}
		
		else
			return true;
	}
</script>
<form action="uupdate.php" method="POST" onsubmit="return check(this)" enctype="multipart/form-data">

<?php
$sql="SELECT * from user where user_id=$_SESSION[uid]";
 
	$rows = ExecuteQuery($sql);
	
	if (mysql_num_rows($rows)>0)
	{
		$row = mysql_fetch_array ($rows);
		echo "<table>";
		echo "<tr><td>User Name</td><td> : </td><td><input type='text' name='un' value='$row[username]' ><span id='a' style='color: red';/></span></td></tr>";
		echo "<tr><td>Full Name</td><td> : </td><td><input type='text' name='fn' value='$row[fullname]' ><span id='b' style='color: red';/></span></td></tr>";
		echo "<tr><td>Password</td> <td> : </td><td><input type='password' name='pwd' value='$row[password]'><span id='c' style='color: red';/></span></td></tr>";
		echo "<tr><td>Department</td><td> :</td><td> <input type='text' name='dept' value='$row[dept]'/><span id='dept' style='color: red';/></span></td></tr>";
		echo "<tr><td>Year</td><td> :</td><td> <input type='text' name='year' value='$row[year]'><span id='year' style='color: red';/></span></td></tr>";
		
		echo "</table>";	
	}
	
?>

	<input type="submit" value="Update">
    <input type="reset" value="Reset">
</form>
<h4><a href="que.php">My Question</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ans.php">My Answered </a></h4>

<?php require("footer.php")?>