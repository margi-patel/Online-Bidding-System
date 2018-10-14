<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
	<title>Online Auction - Message</title>

 
<head>
	
	<link rel="stylesheet" href="jquery-ui/development/themes/base/jquery.ui.all.css">
	<script src="jquery-ui/development/jquery-1.5.1.js"></script>
	<script src="jquery-ui/development/external/jquery.bgiframe-2.1.2.jss"></script>
	<script src="jquery-ui/development/ui/jquery.ui.core.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.widget.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.mouse.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.draggable.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.position.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.resizable.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.dialog.js"></script>
	<link rel="stylesheet" href="jquery-ui/development/demos/demos.css">
	<script>
	$(function() {
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
	
		$( "#dialog-modal" ).dialog({
			height: 140,
			modal: true
		});
	});
	</script>
</head>
<body>
    
    <div id="templatmeo_content">
		<div class="demo">
			<div id="dialog-modal" title="Message">
				<center>
				<p>
				<?php
	session_start();
	require("functions.php");
	if(isset($_POST['readit'])){
		$userid = $_SESSION['ID'];
		$mid= $_GET['mid'];
			if (mysql_query("UPDATE msgnotifs SET status = 1 WHERE msgnotifsid = '$mid'"))
			{
			echo "Thanks. You have read message <br /><br /><a href='myaccount.php'>Back</a>";
			}
			
	}
	
?>
</p>
				<p></a></p>
				</center>
			</div>
		</div>
	</div>
       
    
   
    
</body>
</html>
