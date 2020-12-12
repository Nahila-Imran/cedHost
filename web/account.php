<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
_<?php
include "header.php";
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
		$status = $_POST["is_admin"];
		$ques = $_POST["question"];
		$ans = $_POST["answer"];

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
/*			if(!preg_match('/^[0-9]{1}[1-9]{1}[\d]{9}$/',$mobile))
			{
				$mobileErr = "Enter correct format";
				if(strlen($mobile)<11 || strlen($mobile)>11) 
				{
				$mobileErr = "Enter proper mobile number";
				}
			} */
			
			if(!preg_match('/^[1-9]{1}[\d]{9}$/',$mobile))
			{
				$mobileErr = "Enter correct format..";
				if(strlen($mobile)<10 || strlen($mobile)>10) 
				{
				$mobileErr = "Enter proper mobile number..";
				}
			} 
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
	$user->addRecord($name, $email, $password, $mobile, $status, $ques, $ans);
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>
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
							<input type="text" name="email"><a href="emailVerify.php" style="color:green;">Verify Email</a>
							<span style="color: #FF0000;">* <?php echo $emailErr;?></span>
						</div>
						<div>
							<span>Security Question<label>*</label></span>
							<select name="question" class="dropdown" style="width: 96%; padding: 9px 0;">
                                <option>Select Security Question</option>
                                <option value="Which is your favourite colour?">Which is your favourite colour?</option>
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is your favourite place to visit?">What is your favourite place to visit?</option>
                                <option value="What was your dream job as a child?">What was your dream job as a child?</option>
								<option value="Which sport you like the most?">Which sport you like the most?</option>
                            </select>
						</div>
						<div>
							<span>Mobile No.<label>*</label>(10 digit are allowed)</span>
							<input type="text" name="mobile"><a href="mobileVerify.php" style="color:green;">Verify Mobile No.</a>
							<span style="color: #FF0000;">* <?php echo $mobileErr;?></span> 
						</div>
						<div>
							<span>Answer<label>*</label></span>
							<input type="text" name="answer"> 
						</div>
						<div class="clearfix"> </div>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="is_admin" value="1" checked=""><i> </i>Is Admin?</label>
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