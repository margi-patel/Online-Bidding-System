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
				$pcat = $row['categoryid']; 	
				$pdesc = $row['prodescription'];
				$startbid = $row['startingbid'];	
				$pimg = $row['prodimage'];	
				$regprice = $row['regularprice']; 	
				$sname = $row['sellername'];
				$semail = $row['sellerpayaccount'];
										
			}
			if ($startbid > 10000){
			$fdate = time() + (31 * 24 * 60 * 60);
			$duedate = date('Y-m-d',$fdate);
		}else{
			$fdate = time() + (14 * 24 * 60 * 60);
			$duedate = date('Y-m-d',$fdate);
		}
	$datenow = date("F j, Y, g:i a");
	
						
		mysql_query("INSERT INTO products(prodname,categoryid,prodescription,startingbid,prodimage,regularprice,dateposted,duedate,status,sellername, sellerpayaccount) 
						VALUES ('$pname','$pcat','$pdesc','$startbid','$pimg','$regprice',NOW(),'$duedate',0,'$sname','$semail')") or die(mysql_error());
						
		mysql_query("UPDATE productsforapproval SET status = 1 WHERE productid = '$pid'");
		
		mysql_query("INSERT INTO  msgnotifs (toid,fromid,msgnotif,datecreated,status) VALUES ('$sname','Admin','Your Product $pname is Approved',NOW(),0)") or die(mysql_error());
		
		echo "<script>alert('Product Is Approved For Bidding')</script>";
	echo "<script>window.location.href='notifications.php'</script>";
	
?>