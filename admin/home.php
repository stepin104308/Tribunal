<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("ahome").className="active";
</script>
							<h4><a href="topic.php"><img src="../res/images/ask.png" class="imagedel"/> Manage topic</a><br/><br/>
                			<a href="subtopic.php"><img src="../res/images/ask.png" class="imagedel"/> Manage Subtopic</a></h4>

<?php require("footer.php");?>