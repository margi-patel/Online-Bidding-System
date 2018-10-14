<?php
	session_start();
	if($_SESSION['isvalid'] != "true"){
		header("location:index.php");
	}
	require('functions.php');
	require('htmls.php');
	headhtml();
	categoryadd();

	$pid = $_GET['pid'];

		$result = mysql_query("SELECT * FROM  productsforapproval  where  productid = $pid");
		while ($row = mysql_fetch_array($result, MYSQL_BOTH)) 
			{
				$pname = $row['prodname'];
				$sname = $row['sellername'];
				$semail = $row['sellerpayaccount'];
										
			}
						
		mysql_query("UPDATE productsforapproval SET status = 2 WHERE productid = '$pid'");
		
		mysql_query("INSERT INTO  msgnotifs (toid,fromid,msgnotif,datecreated,status) 
						VALUES ('$sname','Admin','Your Product $pname is Not Approved',NOW(),0)") or die(mysql_error());
		
		echo "<script>alert('Product Is Not Approved For Bidding')</script>";
	echo "<script>window.location.href='notifications.php'</script>";
	
?>