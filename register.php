<?php  require("header.php"); ?>
<script type="text/javascript">
	function check(form1)
	{
		if(
		form1.u_name.value == "" ||
		form1.f_name.value == "" ||
		form1.dept.value == "" ||
		form1.year.value == "" ||
		form1.pwd.value == "" )
		{
			if (form1.u_name.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter user name.";
				//alert("Please, Enter The Username");
			form1.u_name.form1.focus();
				
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				//alert("Please, Enter The Username");
				form1.u_name.focus();
				
			}
			
			 if (form1.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
			}
			 if (form1.pwd.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter password.";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();
				
			}
			else
			{
				document.getElementById("c").innerHTML = "";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();

			}
			
			
			
			if (form1.dept.value == "")
			{
				document.getElementById("dept").innerHTML = "Please enter Department.";
				//alert ("Please,Please Enter The Password");
				form1.dept.focus();
				
			}
			else
			{
				document.getElementById("dept").innerHTML = "";
				//alert ("Please,Please Enter The Password");
				form1.dept.focus();

			}
			
			if (form1.year.value == "")
			{
				document.getElementById("year").innerHTML = "Please enter year.";
				//alert ("Please,Please Enter The Password");
				form1.year.focus();
				
			}
			else
			{
				document.getElementById("year").innerHTML = "";
				//alert ("Please,Please Enter The Password");
				form1.year.focus();

			}
			
			 
			return false;
		}
		else
			return true;
	}
</script>




<h1>Register User</h1>
<form action="registerH.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
<table>
<tr><td>Username</td><td>:</td><td><input type="text" name="u_name" value =""><span id='a' style="color: red;"></span></td></tr>
<tr><td>Fullname</td><td>:</td><td><input type="text" name="f_name"><span id='b' style="color: red;"></span></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="pwd"><span id='c' style="color: red;"></span></td></tr>

<tr><td>Department</td><td>:</td><td><input type="text" name="dept" value =""><span id='dept' style="color: red;"></span></td></tr>
<tr><td>Year of Joining</td><td>:</td><td><input type="text" name="year" value =""><span id='year' style="color: red;"></span></td></tr>


<tr><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr></table></form>

<?php require("footer.php"); ?>