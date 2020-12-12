<?php
include "header.php";
include 'dbcon.inc.php';
include 'user.inc.php';

$user = new User();
$data = $user->getAllUsers();

if(isset($_POST['submit']))
{
	$answer = $_POST["answer"];
	foreach($data as $value)
	{
		if($value["security_answer"] == $answer)
		{
			echo '<script>alert("Answer of Security Question is matched!!!")</script>';
		//	echo '<script>alert("Your Password is "'.$value["password"].')</script>';
			echo '<script>window.location="login.php"</script>';
		}
		else
		{
			echo '<script>alert("Answer doesnt matched!!!")</script>';
			echo '<script>window.location="forgotPass.php"</script>';
		}
	}
}
?>
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="register">
							<form action="" method="POST"> 
								<div class="register-top-grid">
									<h3>Forgot Password!!!</h3>
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
										<span>Answer<label>*</label></span>
										<input type="text" name="answer"> 
									</div>
								</div>
									<div class="clearfix"></div>
								<div class="register-but">
									<input type="submit" name="submit" value="Submit">
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
</body>
</html> 