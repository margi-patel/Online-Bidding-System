<?php
	session_start();
	require("functions.php");
	require("htmls.php");
	headhtml();
?>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
	  
	
        <li><a href="home.php" class="nav2">Home</a></li>
        <li class="divider" ></li>
        <li><a href="prodcateg.php" class="nav1">Products</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav2">About Us</a></li>
        <li class="divider"></li>
		<?php account(); ?>
      </ul>
<script type='text/javascript'>
	jQuery(document).ready( function() {
		jQuery('.nav3').hide();
		jQuery('.nav4').click( function() {
			jQuery('.nav3').toggle('fade');	
		});
	});
</script>
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
      <div class="center_title_bar">Categories</div>
     	<?php
	  		categorylist();
		?>
		
    </div>
	
    <!-- end of center content -->
    <!-- end of right content -->
	
	  
  </div>
  
  <!-- end of main content -->
<?php foothtml(); ?>
