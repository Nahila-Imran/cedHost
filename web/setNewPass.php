<?php
include "header.php";
include 'dbcon.inc.php';
include 'user.inc.php';

if(isset($_POST['update'])) {
    $idUp = $_GET['id'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password != $repassword) {
        echo '<script>alert("Password doesnt matched!!!")</script>';
		echo '<script>window.location="setNewPass.php"</script>';
    }
    else
    {
        $sl = "UPDATE tbl_user SET password='$password' WHERE id=$idUp";
    //echo $sl;
        $run = $conn->query($sl);
        $run = $this->connect()->query($sql);
        if ($run) 
        {
            echo '<script>alert("Record Updated Successfully...!!!")</script>';
        }
        else 
        {
            echo '<script>alert("Error...")</script>';
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
									<h3>Set New Password</h3>
									<div>
										<span>New Password<label>*</label></span>
										<input type="text" name="password"> 
									</div>
									<div>
										<span>Confirm Password<label>*</label></span>
										<input type="text" name="repassword"> 
									</div>
								</div>
									<div class="clearfix"> </div>
								
								<div class="register-but">
									<input type="submit" name="update" value="Save Changes">
									<div class="clearfix"> </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

</body>
</html> 