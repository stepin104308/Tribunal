<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>


<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   
			
			echo "<span class='box2'>";
			echo "<h4><span class='head'><b><a href='questionview.php?qid=$row[question_id]' > &nbsp $row[heading]</a></b></span></h4>";
			
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			Posted by -
			$row[fullname]
			<td valign='top'>
			$row[question_detail]<br/><br/>
			$row[datetime]<br/><br/>
			</td></tr>
			
			<tr>
			<br/><td><img src='res/images/edit.jpg' class='imagedel'/> &nbsp <a href='questionview.php?qid=$row[question_id]' >REPLY</a></span></td></tr>";
			
			
			echo "</table></span><div class='h10'></div>";
		}
	
?>

<?php require("footer.php");?>