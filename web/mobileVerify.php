<?php 
	include "header.php";
	include 'dbcon.inc.php';
	include 'user.inc.php';
?>

    <div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
				<form action="" method="POST"> 
					<div class="register-top-grid">
						<h3>Mobile Number Verification</h3>
						<div>
							<span>Mobile No.<label>*</label></span>
							<input type="text" name="mobile">
						</div>
                        </div>
						<div class="clearfix"> </div>
					
                    <div class="register-but">
						<input type="submit" name="submit" value="Send OTP">
						<div class="clearfix"> </div>
                    </div>
						<div class="register-bottom-grid">
							<div>
								<span>OTP<label>*</label></span>
								<input type="password" name="otp"> 
							</div>
						</div>
						<div class="clearfix"> </div>
						<div class="register-but">
						    <input type="submit" name="verify" value="Verify">
						<div class="clearfix"> </div>
					</form>
				</div>
		   </div>
		 </div>
	</div>
</body>
</html> 