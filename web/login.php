<!--

Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "header.php";
include 'dbcon.inc.php';
include 'user.inc.php';
$name = $email = $mobile = $password = $repassword = "";

	if(isset($_POST['submit']))
    {
		$em = $_POST["email"];
		$pwd = $_POST["password"];

		$user = new User();
		$data = $user->getAllUsers();
		foreach($data as $value) 
		{
			if($em == $value['email'] && $pwd == $value['password'])
			{
				echo '<script>alert("Login Successful.....Welcome!!!")</script>';
				echo '<script>window.location="login.php"</script>';
			}
			else{
				echo '<script>alert("Invalid Login Details!!!")</script>';
				echo '<script>window.location="login.php"</script>';
			}
		}
	}
?>
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">
								<div class="col-md-6 login-left">
									 <h3>new customers</h3>
									 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									 <a class="acount-btn" href="account.php">Create an Account</a>
								</div>
								<div class="col-md-6 login-right">
									<h3>registered</h3>
									<p>If you have an account with us, please log in.</p>
									<form action="" method="POST">
									  <div>
										<span>Email Address<label>*</label></span>
										<input type="text" name="email"> 
									  </div>
									  <div>
										<span>Password<label>*</label></span>
										<input type="password" name="password"> 
									  </div>
									  <a href="forgotPass.php"><input type="button" name="forgot" value="Forgot Password?"></a>
									  <input type="submit" name="submit" value="Login">
									</form>
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- login -->
				<!---footer--->
				<div class="facebook-section">
					<div class="container">
					<div class="face-top">
						<h5><img src="images/facebook.png"><span>I can’t believe my grand mothers making me take Out the garbage I’m rich fuck this I’m going home I don’t need this shit</span><h5>
					</div>
					</div>
				</div>
				<div class="footer-section">
					<div class="container">
						<div class="footer-grids">
							<div class="col-md-3 footer-grid">
								<h4>flickr widget</h4>
								<div class="footer-top">
									<div class="col-md-4 foot-top">
										<img src="images/f1.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-4 foot-top">
									<img src="images/f2.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-4 foot-top">
									<img src="images/f3.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="footer-top second">
									<div class="col-md-4 foot-top">
									<img src="images/f4.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-4 foot-top">
									<img src="images/f1.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-4 foot-top">
									<img src="images/f2.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-3 footer-grid">
								<h4>tag cloud</h4>
								<ul>
								<li><a href="#">Premium</a></li>
								<li><a href="#">Graphic</a></li>
								<li><a href="#">1170px</a></li>
								<li><a href="#">Photoshop Freebie</a></li>
								<li><a href="#">Designer</a></li>
								<li><a href="#">Themes</a></li>
								<li><a href="#">thislooksgreat chris</a></li>
								<li><a href="#">Lovely Area</a></li>
								<li><a href="#">You might use it...</a></li>
								</ul>
							</div>
							<div class="col-md-3 footer-grid">
							<h4>recent posts</h4>
								<div class="recent-grids">
									<div class="col-md-4 recent-great">
										<img src="images/f4.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 recent-great1">
										<a href="#">This is my lovely headline title for this footer section.</a>
										<span>22 October 2014</span>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="recent-grids">
									<div class="col-md-4 recent-great">
										<img src="images/f1.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 recent-great1">
										<a href="#">This is my lovely headline title for this footer section.</a>
										<span>22 October 2014</span>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="recent-grids">
									<div class="col-md-4 recent-great">
										<img src="images/f3.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 recent-great1">
										<a href="#">This is my lovely headline title for this footer section.</a>
										<span>22 October 2014</span>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-3 footer-grid">
								<h4>get in touch</h4>
								<p>8901 Marmora Road</p>
								<p>Glasgow, DO4 89GR.</p>
								<p>Telephone : +1 234 567 890</p>
								<p>Telephone : +1 234 567 890</p>
								<p>FAX : + 1 234 567 890</p>
								<p>E-mail : <a href="mailto:example@mail.com"> example@mail.com</a></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="copy-section">
							<p>&copy; 2016 Planet Hosting. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
						</div>
					</div>
				</div>
			<!---footer--->
</body>
</html>