<?php
	session_start();
	require ("db.php");
	require("htmls.php");
	require("functions.php");
	headhtml();
	
	if (isset($_POST['next2'])){
	
				$_SESSION['userid']=$_POST['loginid'];
				$_SESSION['email'] = $_POST['email1'];
				$_SESSION['password'] =$_POST['pass1'];
				$_SESSION['secques'] =$_POST['secques'];
				$_SESSION['secans'] =$_POST['secans'];
							
				$fname = $_SESSION['firstname'];
				$lname = $_SESSION['lastname'];
				$gender = $_SESSION['gender'];
					$caddress = $_SESSION['caddress'];
					$address = $_SESSION['address'];
				$cusaddress = "$caddress"." "."$address";
				$contactno = $_SESSION['contactno'];	
					$day = $_SESSION['day'];
					$month = $_SESSION['month'];
					$year = $_SESSION['year'];
				$birthdate = "$day"." "."$month"." "."$year";
				$email = $_SESSION['email'];
				$userid =$_SESSION['userid'];
				$password =$_SESSION['password'];
				$secques =$_SESSION['secques'];
				$secanswer =$_SESSION['secans'];
								
				mysql_query("INSERT INTO member(lastname,firstname,gender,userid,password,email,contactno,birthdate,address,verification,memberimg) VALUES ('$lname','$fname','$gender','$userid','$password','$email','$contactno','$birthdate','$cusaddress','yes','default.jpg')");
				$query = mysql_query("SELECT * FROM member WHERE userid = '$userid'") or die (mysql_error());
					$row = mysql_fetch_array($query);
					$id= $row['memberid'];
					mysql_query("INSERT into secretquestions(memberid,question,answer) VALUES ('$id','$secques','$secanswer')");
				$_SESSION['ID']= $id;
				$_SESSION['logged'] = "notactive";
				$_SESSION['user'] = $userid;
				header('location:ppactivate.php');
	}
	
	if(isset($_POST['login'])){
				if(isset($_POST['user'])) {
					if(isset($_POST['pass'])){			
						$username = $_POST['user'];	
						$pass = $_POST['pass'];
						$query = mysql_query("SELECT * FROM member WHERE userid = '$username' AND  password = '$pass'") or die (mysql_error());
						$user = mysql_fetch_array($query);	
						if($user['verification'] == 'yes'){
							$_SESSION['ID'] = $user['memberid'];
							$_SESSION['logged'] = $user['memberid'];
							$_SESSION['user'] = $username;
							header('Location: myaccount.php');
						}
						elseif($user['verification'] == 'no')
						{
							$_SESSION['ID'] = $user['memberid'];
							$_SESSION['user'] = $user['fname'];
							$_SESSION['logged'] = "notactive";
							header('Location: myaccount.php');
						}
						else
						{
						//echo "please check password detail";
							echo "<script>alert('Please Check Password Details')</script>";
						/* 	header("location: errorlogin.php"); */
						}
					}
					else
					{
					//echo "please check your userid";
					echo "<script>alert('Please Check User UI Details')</script>";
					/* 	header("location: errorlogin.php"); */
					}
				}
				else
				{
				//echo "please check login detail";
				echo "<script>alert('Please Check Login Details')</script>";
				/* 	header("location: errorlogin.php"); */
				}
			}
			
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
		
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
      <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <a href="home.php">Home</a> &lt; <span class="current">Sign In</span> </div>
    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        <?php
			categories();
		?>
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
    <!-- end of right content -->
	<div class="center_content">
      <div class="center_title_bar">User Log In</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
			<div class='logreg'>
				<div class="loginb">
					<div class="top_prod_box"></div>
					<div class="center_prod_box">
					  <div class="product_title"><a>Log in as a User</a></div>
					  <div class="product_img"><a><img src="administrator/icons/53.png" alt="" height="50" border="0" /></a></div>
					</div>
				</div>
				<div class="regb">
					<div class="top_prod_box"></div>
					<div class="center_prod_box">
					  <div class="product_title"><a>Register as a User</a></div>
					  <div class="product_img"><a><img src="administrator/icons/54.png" alt="" height="50" border="0" /></a></div>
					</div>
				</div>
				<div class="admin">
					<div class="top_prod_box"></div>
					<div class="center_prod_box">
					  <div class="product_title"><a>Log in as a Admin</a></div>
					  <div class="product_img"><a href="administrator/index.php"><img src="administrator/icons/49.png" height="50" alt="" border="0" /></a></div>
					</div>
				</div>
			</div>
			<script type='text/javascript'>
				jQuery(document).ready( function() {
					
					jQuery('.contact_form').hide();
					jQuery('.reg_form').hide();
					jQuery('.loginb').click( function() {
						jQuery('.contact_form').toggle('slow');
						jQuery('.reg_form').hide();
					});
					jQuery('.regb').click( function() {
						jQuery('.reg_form').toggle('slow');
						jQuery('.contact_form').hide();
					});
				});
			</script>
          <div class="contact_form">
            <div id="form_row1">
              <form method = "post" action="" id="logins-form" class="logins-form">
                
                <span class="blue"><strong>Username</strong></span><input type="text" name="user">
                <span class="blue"><strong>Password</strong></span><input type="password" name="pass">
                  </br></br>
                    <input type="submit" value="Login" name="login">
              </form>
            </div>
          </div>
		  <div class="reg_form">
			<div id="regstep1">
            <form action="register2.php" method="post" name="contacts-form" id="contacts-form">
            <strong>Lastname:</strong>
              <input type="text" name="lname" class="required" onkeyup="isalpha(this)"/></br></br>
              <strong>Firstname:</strong>
              <input type="text" name="fname" class="required" onkeyup="isalpha(this)"/></br></br>
              <strong>Gender:</strong>
              <select name="gender">
				<option>Male</option>
				<option>Female</option>
			</select></br></br>
            <strong>Address:</strong> 
            <select name="city">
            	<option>City</option>
				<option>Anand</option>
				<option>Ahmedabad</option>
				<option>Bharuch</option>
				<option>Baroda</option>
				<option>Navsari</option>
				<option>Nadiad</option>
				<option>Surat</option>
				<option>Valsad</option>
				<option>Vapi</option>
			</select></br></br>
            <input type="text" name="address" class="required"/></br></br>
           <strong>Contact:</strong> 
            <input type="text" name="contactno" class="required" onkeyup="isnum(this)" /></br></br>
            <strong>Birthdate:</strong>
            <select name="day">
				<option>Date</option>
				<option></option>
				<option>1</option>
                <option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
				
			</select></br></br>
            <select name="month">
				<option>Month</option>
				<option></option>
				<option>January</option>
				<option>Febuary</option>
				<option>March</option>
				<option>April</option>
				<option>May</option>
				<option>June</option>
				<option>July</option>
				<option>August</option>
				<option>September</option>
				<option>October</option>
				<option>November</option>
				<option>December</option>
			</select></br></br>
            <select name="year">
                                  <option>Year</option>
                                  <option></option>
                                  
								   <option>1980</option>
                                  <option>1981</option>
                                  <option>1982</option>
                                  <option>1983</option>
                                  <option>1984</option>
                                  <option>1985</option>
                                  <option>1986</option>
                                  <option>1987</option>
                                  <option>1988</option>
                                  <option>1989</option>
								  <option>1990</option>
								 
								  <option>1991</option>
                                  <option>1992</option>
                                  <option>1993</option>
                                  <option>1994</option>
                                  <option>1995</option>
                                  <option>1996</option>
                                  <option>1997</option>
                                  <option>1998</option>
                                  <option>1999</option>
								  <option>2000</option>
								  
                                  <option>2001</option>
								  <option>2002</option>
                                  <option>2003</option>
                                  <option>2004</option>
                                  <option>2005</option>
                                  <option>2006</option>
                                  <option>2007</option>
                                  <option>2008</option>
                                  <option>2009</option>
                                  <option>2010</option>
                                
								<option>2011</option>
                                  <option>2012</option>
								   <option>2013</option>
                                  <option>2014</option>
								   <option>2015</option>
                                  <option>2016</option>
			</select></br></br>
            <input type="submit" name="next1" value="next step"/>
            </form>
            </div>
		  </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
    <!-- end of center content -->
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php foothtml(); ?>
