<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include 'dbcon.inc.php';
include 'user.inc.php';

$nameErr = $emailErr = $mobileErr = $passwordErr = $repassErr="";
$name = $email = $mobile = $password = $repassword = "";


	if(isset($_POST['submit']))
    {
		$n = $_POST["name"];
		$e = $_POST["email"];
		$m = $_POST["mobile"];
		$p = $_POST["password"];
		$cp = $_POST["repassword"];

		if (empty($n)) 
        {
            $nameErr = "Name is required";
        } 
        else {
            $name = test_input($n);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
            {
            $nameErr = "Only letters and white space allowed";
            }
        }
        
        if (empty($e)) 
        {
            $emailErr = "Email is required";
        } 
        else {
            $email = test_input($e);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
            $emailErr = "Invalid email format";
            }
        }
        if (empty($m)) 
        {
            $mobileErr = "Enter mobile number";
		} 
		else 
		{
			$mobile = test_input($m);
			if(!preg_match('/^[0-9]*$/',$mobile))
			{
				$mobileErr = "Enter only digits";
			}
			if(!preg_match('/^[0-9]{1}[1-9]{1}[\d]{9}$/',$mobile))
			{
				$mobileErr = "Enter correct format";
				if(strlen($mobile)<11 || strlen($mobile)>11) 
				{
				$mobileErr = "Enter proper mobile number";
				}
			}
			
/*			if(!preg_match('/^[1-9]{1}[\d]{9}$/',$mobile))
			{
				$mobileErr = "Enter correct format..";
				if(strlen($mobile)<10 || strlen($mobile)>10) 
				{
				$mobileErr = "Enter proper mobile number..";
				}
			} */
		}

		if (empty($cp)) 
        {
            $repassErr = "Please Enter confirm-password";
		} 

        if (empty($p)) 
        {
            $passwordErr = "Please Enter password";
		} 
		else {
			$password = test_input($p);
			if($password != $cp){
				$passwordErr = "Password does'nt match";
			}
			if(strlen($p) < 8 || strlen($p) > 16){
				$passwordErr = "Password must have range in between 8-16";
			}
			$upper = preg_match('@[A-Z]@', $password);
			$lower = preg_match('@[a-z]@', $password);
			$num = preg_match('@[0-9]@', $password);
			$special = preg_match('@[^\w]@', $password);
			if(!$upper || !$lower || !$num || !$special)
			{
				$passwordErr = "Password must contain atlest uppercase, lowercase, digits and special character";
			}
		}
	//	$user->addRecord($_POST);
	$user = new User();
	$user->addRecord($name, $email, $password, $mobile);
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
	<!---header--->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php"><span style="color: #e7663f">Ced</span><span style="color: #585ca7;">Hosting</span></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<i class="caret"></i></a>
										<ul class="dropdown-menu">
											<li><a href="blog.php">Hosting</a></li>
										</ul>
								</li>
								<li><a href="pricing.php">Pricing</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php"><i class="fas fa-cart-plus" style="font-size:28px;"></i></a></li>
								<li><a href="login.php">Login/Logout</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header--->
		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
				<form action="" method="POST"> 
					<div class="register-top-grid">
						<h3>personal information</h3>
						<div>
							<span>Name<label>*</label></span>
							<input type="text" name="name">
							<span style="color: #FF0000;">* <?php echo $nameErr;?></span> 
						</div>
						<div>
							<span>Email Address<label>*</label></span>
							<input type="text" name="email"> 
							<span style="color: #FF0000;">* <?php echo $emailErr;?></span> 
						</div>
						<div>
							<span>Mobile No.<label>*</label></span>
							<input type="text" name="mobile"> 
							<span style="color: #FF0000;">* <?php echo $mobileErr;?></span> 
						</div>
						<div class="clearfix"> </div>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
						</a>
						</div>
						<div class="register-bottom-grid">
								<h3>login information</h3>
								<div>
									<span>Password<label>*</label></span>
									<input type="password" name="password">
									<span style="color: #FF0000;">* <?php echo $passwordErr;?></span> 
								</div>
								<div>
									<span>Confirm Password<label>*</label></span>
									<input type="password" name="repassword">
									<span style="color: #FF0000;">* <?php echo $repassErr;?></span> 
								</div>
						</div>
						<div class="clearfix"> </div>
						<div class="register-but">
						<input type="submit" name="submit" value="submit">
						<div class="clearfix"> </div>
					</form>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

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