<?php
	require("functions.php");
	session_start();
	require("htmls.php");
	headhtml();
	
?>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
	    
	
        <li><a href="home.php" class="nav2">Home</a></li>
        <li class="divider" ></li>
        <li><a href="prodcateg.php" class="nav2">Products</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav2">About Us</a></li>
<?php account(); ?>
<script type='text/javascript'>
	jQuery(document).ready( function() {
		jQuery('.nav3').hide();
		jQuery('.nav4').click( function() {
			jQuery('.nav3').toggle('fade');	
		});
	});
</script>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        <?php
			categories();
		?>
		<?php logform(); ?>
         <div class="title_box">News & Updates</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">26000 Rs./-</span> <span class="price">22000 Rs./-</span></div>
      </div>
	  
	  <div class="right_content">
      <div class="title_box">Manufacturers</div>
      <div class="border_box">
      <ul class="left_menu">
        <li class="odd"><a href="#">Sony</a></li>
        <li class="even"><a href="#">Samsung</a></li>
        <li class="odd"><a href="#">Daewoo</a></li>
        <li class="even"><a href="#">LG</a></li>
        <li class="odd"><a href="#">Fujitsu Siemens</a></li>
        <li class="even"><a href="#">Motorola</a></li>
        <li class="odd"><a href="#">Phillips</a></li>
        <li class="even"><a href="#">Beko</a></li>
      </ul>
         
	 <div class="banner_adds"> <a href="#"><img src="images/bann1.jpg" alt="" border="0" /></a> </div>
	  </div>
	  </div>
   </div>
<!-- <!-- end of left content -->
    <?php 
		$userid = $_SESSION['ID'];
		$query = mysql_query("SELECT * FROM member WHERE memberid = '$userid'") or die (mysql_error());
		$row = mysql_fetch_array($query);
		$username = $row['userid'];
		$selleracc = $row['email'];
		if (!$row) 
			{
				die("Error: Data not found..");
				echo $userid;
			}
		if (isset($_POST['prodsave'])){

	$prodname=$_POST['prodname'];
	$startingbid=$_POST['startingbid'];
	$category=$_POST['category'];
	$descrpt=$_POST['descrpt'];
	$regularprice = $_POST['regularprice'];
		if ($startingbid > 10000){
			$fdate = time() + (31 * 24 * 60 * 60);
			$duedate = date('Y-m-d',$fdate);
		}else{
			$fdate = time() + (14 * 24 * 60 * 60);
			$duedate = date('Y-m-d',$fdate);
		}
	$datenow = date("F j, Y, g:i a");
	$name = $_FILES["imagep"] ["name"];
	$type = $_FILES["imagep"] ["type"];
	$size = $_FILES["imagep"] ["size"];
	$temp = $_FILES["imagep"] ["tmp_name"];
	$error = $_FILES["imagep"] ["error"];
	mysql_query("INSERT INTO productsforapproval(prodname,categoryid,prodescription,startingbid,prodimage,regularprice,dateposted,duedate,status,sellername,sellerpayaccount) 
						VALUES ('$prodname','$category','$descrpt','$startingbid','$name','$regularprice',NOW(),'$duedate',0,'$username','$selleracc')") or die(mysql_error());
						echo "<script>alert('Product added and waiting for Administrator Approval')</script>";
						
	if ($error > 0){
		die("Error uploading file! Code $error.");}
	else
	{
		if($size > 10000000) //conditions for the file
		{
		die("Format is not allowed or file size is too big!");
		}
		else
		{
		move_uploaded_file($temp,"administrator/images/products/".$name);
		}
	} 
		
		
}
	?>
    <div class="center_content">
      <div class="center_title_bar">USER PROFILE</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
           <div class="product_img_big"> <?php echo "<a><img src='administrator/images/upload/".$row['memberimg']."' width='169' height='155' alt='' border='0' /></a>"; ?>
 <script type='text/javascript'>
	jQuery(document).ready( function() {
		
		jQuery('#regstep1').hide();
		jQuery('#form_row1').hide();
		jQuery('#addprod').hide();
		
		jQuery('.one').click( function() {
			jQuery('#regstep1').toggle('fade');
			jQuery('.specifications').hide();
			jQuery('#form_row1').hide();
			jQuery('#addprod').hide();
		});
		
		jQuery('.three').click( function() {
			jQuery('.specifications').toggle('fade');	
			jQuery('#regstep1').hide('fade');
			jQuery('#form_row1').hide('fade');
			jQuery('#addprod').hide();
		});
		jQuery('.four').click( function() {
			jQuery('#addprod').toggle('fade');
			jQuery('.specifications').hide('fade');	
			jQuery('#regstep1').hide('fade');
			jQuery('#form_row1').hide();
		});
		jQuery('.two').click( function() {
			jQuery('#form_row1').toggle('fade');
			jQuery('.specifications').hide('fade');	
			jQuery('#regstep1').hide('fade');
			jQuery('#addprod').hide();
		});
		
	});
</script>
            <div class="thumbs"><center><div class="one">Edit Personal Info</div> <br /><div class="two">Change Password and Account Pic</div><br /><div class="three">View Personal Info</div><br/><div class ="four">Add Product</div></center></div>
          </div>
          <div class="details_big_box">
            <div class="product_title_big"><?php echo $row['userid'];?></div><br /><br />
            <div class="specifications">
				Name: <span class="blue"><?php echo "".$row['firstname']." ".$row['lastname']."";?></span><br />
				Contact no: <span class="blue"><?php echo $row['contactno'];?></span><br />
				Address: <span class="blue"><?php echo $row['address'];?></span><br />
				Gender: <span class="blue"><?php echo $row['gender'];?></span><br />
				Email Address: <span class="blue"><?php echo $row['email'];?></span><br />

            </div>

				<div id="addprod">
					<form method="post" action="" enctype='multipart/form-data'>
                    <strong>Product Name:</p>
					<input type="text" name="prodname" class="namewidth" onkeyup="isalphanum(this)"/><br/>
                    <strong>Starting Bid:</strong><br/>
					<input type="text" name="startingbid" class="namewidth" onkeyup="isnum(this)"/><br/>
					<strong>Regular Price:</strong><br/>
					<input type="text" name="regularprice" class="namewidth" onkeyup="isnum(this)"/><br/>
                    <strong>Category:</strong><br/>
					<?php cats(); ?><br/>
                    <strong>Product Description:</strong><br/>
					<textarea name="descrpt" class="namewidth" /></textarea><br/>
					<strong>Product Image:</strong><br/>
					<input type="file" name="imagep" class="namewidth"/><br/>
					<input type="submit" name="prodsave" value="Save Product"/><br/>
					</form>
				</div>
			 <div id="regstep1">
				<?php
				
				if(isset($_POST['save']))
				{
				$last_save = $_POST['lname'];
				$fname_save = $_POST['fname'];
				$gender_save = $_POST['gender'];
				$address_save = $_POST['address'];
				$bday_save = $_POST['bday'];
				
				
				
				mysql_query("UPDATE member SET lastname='$last_save', firstname='$fname_save', gender='$gender_save', address='$address_save', birthdate='$bday_save' WHERE memberid='$userid'") or die (mysql_error());
	
				header("Location: myaccount.php ");

				}

				?>
				<form action="" method="post" name="contacts-form" id="contacts-form">
            <strong>Lastname:</strong>
              <input type="text" name="lname" class="required" value="<?php echo $row['lastname']; ?>"/></br></br>
              <strong>Firstname:</strong>
              <input type="text" name="fname" class="required" value="<?php echo $row['firstname']; ?>"/></br></br>
              <strong>Gender:</strong>
              <select name="gender">
				<option><?php echo $row['gender']; ?></option>
				<option>Male</option>
				<option>Female</option>
			</select></br></br>
            <strong>Address:</strong> 
            <input type="text" name="address" class="required" value="<?php echo $row['address']; ?>"/></br></br>
           <strong>Contact:</strong> 
            <input type="text" name="contactno" class="required" onKeyPress="return isNumberKey(event)" value="<?php echo $row['contactno']; ?>"/></br></br>
            <strong>Birthdate: (DD MM YY)</strong>
			<input type="text" name="bday" class="required" value="<?php echo $row['birthdate']; ?>"/>
            </br></br>
            <input type="submit" name="save" value="Save"/>
            </form>
			
            </div>
			<div id="form_row1">
			<?php
			if(isset($_POST['btnsave'])){
			
			$password_save=$_POST['pass1'];
			
			$name = $_FILES["image"] ["name"];
			$type = $_FILES["image"] ["type"];
			$size = $_FILES["image"] ["size"];
			$temp = $_FILES["image"] ["tmp_name"];
			$error = $_FILES["image"] ["error"];
			
			if ($error > 0){
					die("Error uploading file! Code $error.");}
				else
				{
					if($size > 10000000) //conditions for the file
					{
					die("Format is not allowed or file size is too big!");
					}
					else
					{
					move_uploaded_file($temp,"administrator/images/upload/".$name);
				}
			}
				
			mysql_query("UPDATE member SET password='$password_save', memberimg='$name' WHERE memberid='$userid'") or die(mysql_error());
			//mysql_query("INSERT INTO member (memberimg) VALUES '$name' WHERE memberid='$userid'") or die(mysql_error());
			header("location: myaccount.php");
			}
			?>
            <form action="" method="post" name="contacts-form" id="contacts-form" enctype='multipart/form-data'>
              	<input type="hidden" name="email1" id="email1" class="required email"/>
				<strong>Upload Desire Account Pic:</strong>
              	<input type="file" name="image"/></br></br>
				<strong>Old Password:</strong>
              	<input type="text" name="loginid" id = "loginid" class="required"/></br></br>
              	<strong>Desired Password:</strong>
              	<input type="password" name="pass1" id="pass1" class="required" onKeyUp="checkPass(); return false;"/></br></br>
              	<strong>Confirm Password:</strong>
            	<input type="password" name="pass2" id="pass2"onkeyup="checkPass(); return false;"/><span id="confirmMessage" class="confirmMessage"></span></br></br>
				
            <input type="submit" name="btnsave" value="Save"/>
            </form>
            </div>
           	</div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
      <div class="center_title_bar"></div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
			<div id='showmsgandnotifs'>
			  <div class="product_img"><img src="images/Mail[1].png" width="120" height="90" alt="" border="0" /></div>
			  <div class="prod_price"><span class="price">Messsages & Notifications</span></div>
			</div>
		</div>
        <div class="bottom_prod_box"></div>
      </div>
	
	<div class='msgandnotifs'>
		  <div class="prod_box_big">
			<div class="top_prod_box_big"></div>
			<div class="center_prod_box_big">
			   <div class="product_img_big">
				<div class="thumbs">
					<div id='showmsg'><span class="blue">Messages</span></div>
				</div>
				<div class="thumbs">
					<div id='shownotif'><span class="blue">Notifications</span></div>
				</div>
			  </div>
			  <div class="details_big_box">
				<div class="product_title_big"></div>
				<div class="specifications">
					<div class='hidemsg'>
						<div class="thumbs">
							<div class="thumbs">
							Messages<br/>
								From: <span class="blue">Administrator</span><br />
								
							</div>
							<?php
								$get = mysql_query("SELECT * FROM msgnotifs where toid = '$username' AND status=0")or die(mysql_error());
								while($getit = mysql_fetch_array($get)){
								$mid = $getit['msgnotifsid'];
								$message = $getit['msgnotif'];
								$dt = $getit['datecreated'];
								
							?>
							<div class="thumbs">
								<span><p align='justify'> Date: <?php echo $dt; ?></p>
								<hr />
								<div class="thumbs">
									Message: <span class="blue"><?php echo $message; ?></span><br />
									<hr />
									<center>
										<form action="updatemsgstatus.php?mid=<?php echo $mid?>" method="POST">
											<input type='submit' name='readit' value='Read' />
											
										</form>
									</center>
								</div>
								
							</div>
							<?php } ?>
						</div>

					
					</div>
					<div class='hidenotif'>
						<div class="thumbs">
							<div class="thumbs">
								Notifications<br />
							</div>
							<?php
								$get = mysql_query("SELECT * FROM needtopay WHERE needtopay.memberid = '$userid' AND needtopay.status=0")or die(mysql_error());
								while($getit = mysql_fetch_array($get)){
								$prod = $getit['productid'];
								$getprod = mysql_query("SELECT * FROM products WHERE productid = '$prod'")or die(mysql_error());
								$fetchit = mysql_fetch_array($getprod);
							?>
							<div class="thumbs">
								<span><p align='justify'>Congratulations!!<br />You are the winner of item on bid named <?php echo $fetchit['prodname'];?></p>
								<div class="thumbs">
									Amount Bid: Rs/-<?php echo $getit['payment'];?><br />
									<hr />
									<center>
										<form action="acceptpay.php?pid=<?php echo $prod?>" method="POST">
											<input type='submit' name='pay' value='PAY' />
											<input type='submit' name='decline' value='DECLINE' />
										</form>
									</center>
								</div>
								</span><hr />
								Last: <span class="blue"><?php echo $getit['dateadded'];?></span>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				</div>
			</div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
	</div>
    </div>
    <!-- end of center content -->
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <?php foothtml(); ?>
 <script type='text/javascript'>
	jQuery(document).ready( function() {
		
		jQuery('.msgandnotifs').hide();
		jQuery('#showmsgandnotifs').click( function() {
			jQuery('.msgandnotifs').toggle('fade');	
		});
		
		jQuery('.hidemsg').hide();
		jQuery('#showmsg').click( function() {
			jQuery('.hidemsg').toggle('fade');	
			jQuery('.hidenotif').hide('fade');
		});
		
		jQuery('.hidenotif').hide();
		jQuery('#shownotif').click( function() {
			jQuery('.hidenotif').toggle('fade');
			jQuery('.hidemsg').hide('fade');
		});
	});
</script>