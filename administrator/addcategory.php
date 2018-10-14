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
<head>
<script type="text/javascript" src="../validate.js" ></script>
	
</head>
<body>
	<div id="container">
		<div id="bgwrap">
			<div id="primary_left">
				<div id="menu"> <!-- navigation menu -->
					<ul>
						<li><a href="notifications.php"><img src="icons/73.png" alt /><span>Notifications</span></a></li>
                        <li><a href="bids.php" class="dashboard"><img src="icons/2.png" alt /><span class="current">Bids</span></a></li>
     <li><a href="productapproval.php" class="dashboard"><img src="icons/44.png" alt /><span class="current">Prodcut Approval</span></a></li>
											
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
						  <h5>Add New Product Category</h5>
                           <div id="bodycon">
                          <form method="post" name="prodform" id="prodform" action="<?php $PHP_SELF ?>" enctype='multipart/form-data'>
                          		<div id="textcon">
                                	Category Name:
                                        <input name="categoryname" type="text" id="categoryname"  class="namewidth" onKeyUp="isalphanum(this)" />
                                        <input type="file" name="catimage" id="catimage" class="namewidth" />
                                        <input name="cmdadd" type="submit" id="cmdadd" value="Add New" class="namewidth" />
                                        <input name="cmdcancel" type="submit" id="cmdcancel" value="Cancel"  class="namewidth"/>
                                </div>&nbsp;
                                <div id="inputcon1">
                                		
								<table width="750" border="0">
                      			<tr id="headrow">
                                    
                                    <td width="80" ><strong>Category number</strong></td>
                                    <td width="140" ><strong>Category Name</strong></td>
                                    <td width="100" ><strong>Category Image</strong></td>
									<td width="250" ><strong>Category Description</strong></td>
									<td width="44" ><strong>Edit</strong></td>
                                    <td width="48" ><strong>Delete</strong></td>
                                </tr>
								<?php
								if (isset($_POST['cmdadd'])){
  								$result = mysql_query("SELECT * FROM pcategories ORDER BY categoryid");
								if (!$result) 
								{
									die("Query to show fields from table failed");
								}
								$numberOfRows = MYSQL_NUMROWS($result);
								if ($numberOfRows == 0)
								{
									echo 'Sorry No Record Found!';
								}
								else if ($numberOfRows > 0) {
									$i=1;
									while ($i<$numberOfRows)		{
									
									while ($row = mysql_fetch_array($result, MYSQL_BOTH)) 
										{
											$catid = $row['categoryid'];
											$catname = $row['categoryname']; 	
											$catimg = $row['catimage'];
											$catdesc = $row['categorydes'];
												
								?>
								
                     	 </tr>
                     	 <tr bgcolor="#d3d3d3" >
                     	   		
                        		<td align="center"><?php echo $i; ?></td>
                        		<td><?php echo $catname; ?></td>
								<td><img src="./images/category/<?php echo $catimg; ?>" width="75" height="75" /></td>
								<td><?php echo $catdesc; ?></td>
								
                        		<td><a href="editcategory.php?CategoryID= <?php echo $catid; ?>"><img src="./icons/31.png" alt="Edit Record" width="50" height="50" /></a></td>
						
                        <td><a href="deletecategory.php?CategoryID=<?php echo $catid; ?>"><img src="./icons/116.png" alt="delete record" width="50" height="50" onClick="return confirm('Are you sure you want to delete <?php echo $catid; ?>');" /></a></td>
                      </tr>
<?php 	
										
		$i++;		
		}$i;
	}	}
	}
?>

</table>
                                 </div>
								</form>

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