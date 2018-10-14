<?php
	session_start();
	if($_SESSION['isvalid'] != "true"){
		header("location:index.php");
	}
	require('functions.php');
	require('htmls.php');
	headhtml();
	categoryadd();
?>

<body>
	<div id="container">
		<div id="bgwrap">
			<div id="primary_left">
				<div id="menu"> <!-- navigation menu -->
					<ul>
						<li><a href="notifications.php"><img src="icons/73.png" alt /><span>Notifications</span></a></li>
                        <li><a href="bids.php" class="dashboard"><img src="icons/2.png" alt /><span class="current">Bids</span></a></li>						
						<li class='showme current'><a href="#"><img src="icons/36.png" alt /><span>Products</span></a>
							<ul class='showoff'>
								<li><a href="add_prodven.php">New Product</a></li>
								<li><a href="addcategory.php">New Product Category</a></li>
							</ul>
						</li>						
                        <li class='showme'><a href="#"><img src="./assets/icons/small_icons_3/settings.png" alt /><span>Account</span></a>
							<ul class='showoff'>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>	
					</ul>
				</div> <!-- navigation menu end -->
			</div> 
			<div id="primary_right">
				<div class="inner">
					
					<h1>Welcome Administrator</h1>


						<div class="two_third column">
						  <h5>Edit Product Category</h5>
                           <div id="bodycon">
						   <?php
						   $catid = $_GET['CategoryID'];
  								$result = mysql_query("SELECT * FROM pcategories where categoryid = $catid");
								if (!$result) 
								{
									die("Query to show fields from table failed");
								}
								while($row = mysql_fetch_array($result, MYSQLI_ASSOC))
								{
		
	
								$this_CategoryID = $row['categoryid'];
								$this_CategoryName = $row['categoryname'];
								$this_CategoryDesc = $row['categorydes'];
								
								//$image = MYSQL_RESULT($result,$i,"catimage");
								}		
								?>
                          <form method="post" name="prodform" id="prodform" action="<?php $_PHP_SELF ?>"  enctype='multipart/form-data'>
                          		<div id="textcon">
                                	Category Name:
                                        <input name="categoryname" type="text" id="categoryname"  class="namewidth" value="<?php echo $this_CategoryName; ?>"/>
                                    Description:
                                        
										<input name="categorydesc" type="text" id="categorydesc"  class="namewidth" value="<?php echo $this_CategoryDesc; ?>"/>
                                       
									   <input name="cmdupd" type="submit" id="cmdupd" value="Update" class="namewidth" />
                                        <input name="cmdcancel" type="submit" id="cmdcancel" value="Cancel"  class="namewidth"/>
                                </div>&nbsp;
                                <div id="inputcon1">
								</div>
								</form>
								<?php
								if(isset($_POST['cmdupd'])) 
								{
									$cname = trim($_POST['categoryname']);
									$cdes = trim($_POST['categorydesc']);
									$query = "update pcategories set categoryname = '".$cname."',categorydes = '".$cdes."' where categoryid = ".$catid;
									//echo $query;
									$result = mysql_query($query);
									if($result)
									{
										echo "<script>alert('Successfully Updated!')</script>";
										echo "<script>window.location.href='addcategory.php';</script>";
									}
	
									else
									{
										echo "Could not update data";
										echo "<script>window.location.href='addcategory.php';</script>";
									}


								}
								?>
                        </div>
						</div>

						<div class="one_third last column">
						  <h5></h5>
						</div>
						<hr />
						<HR>
						<HR/>
						  <div class="clearboth"></div>
						</div><!-- three_fourth last -->
					</div>
					<div class="clearboth" style="padding-bottom:20px;"></div>
				</div> <!-- inner -->
			</div> <!-- primary_right -->
		</div> <!-- bgwrap -->
	</div> <!-- container -->
</body>
</html>
<script type='text/javascript'>
	jQuery(document).ready( function() {
			jQuery('.notif').hide();
		jQuery('#number').click( function() {
			jQuery('.notif').toggle('slow');
		});
			
			jQuery(".notif").click( function() {
				var id = $(this).attr("id");
				
				jQuery.ajax({
					type: "POST",
					data: ({id: id}),
					url: "bidupdate.php",
					success: function(response) {
					jQuery(".id" + id).hide();
					jQuery("#num_result").fadeIn().html(response);
					}
				});
				
			})
			jQuery(document).ready( function() {
			jQuery('.showoff').hide();
		jQuery('.showme').click( function() {
			jQuery('.showoff').hide();
			jQuery(this).find('ul').toggle('slow');
		});

	});
		
	});
</script>