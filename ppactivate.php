<?php
	session_start();
	require ("db.php");
	require("htmls.php");
	require("functions.php");
	headhtml();
?>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">			
	  
	
        <li><a href="home.php" class="nav1">Home</a></li>
        <li class="divider" ></li>
        <li><a href="prodcateg.php" class="nav2">Products</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav2">Contact Us</a></li>
        <li class="divider">
		</li>
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
			logform();
	?>
	      <div class="title_box">News & Updates</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">26000 Rs./-</span> <span class="price">22000 Rs./-</span></div>
      </div>

    </div>
	
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">User Log In</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
						<div class="welc"><center>Welcome</center></div>
						<div class="welcsub"><center><p>Welcome, your account is completely activated. You can login with your username and password.<p></center></div>
			<div class='logreg'>
				<div class="loginb">
					<div class="top_prod_box"></div>
					<div class="center_prod_box">
					  
				</div>
				<div class="regb">
					<div class="top_prod_box"></div>
					<div class="center_prod_box">
					  <div class="product_title"><a>Login</a></div>
					  <?php
							$userid = $_SESSION['ID'];
							$_SESSION['logged'] = $userid;
							//$_SESSION['user'] = $username;
							
							//header('Location: myaccount.php');
							?>
					  <div class="product_img"><a href='myaccount.php'>Proceed to My Account</a>
					  
					  </div>
					</div>
				</div>
			</div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
    <!-- end of center content -->
 </div>
  <!-- end of main content -->
<?php foothtml(); ?>
