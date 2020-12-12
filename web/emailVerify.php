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
						<h3>Email Address Verification</h3>
						<div>
							<span>Email Address<label>*</label></span>
							<input type="text" name="mobile">
						</div>
                        </div>
						<div class="clearfix"> </div>
					
                    <div class="register-but">
						<input type="submit" name="submit" value="Send SMTP">
						<div class="clearfix"> </div>
                    </div>
						<div class="register-bottom-grid">
							<div>
								<span>smtp<label>*</label></span>
								<input type="password" name="smtp"> 
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