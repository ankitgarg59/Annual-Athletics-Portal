<div class="container">
	<div class="col-sm-9 text-right">
		<hr>
			<p><b style='text-align:center;font-size:18px;'>Change Your Password</b></p>
		<hr>
	</br>

		<form class="form-horizontal" action=""  method="post" enctype="multipart/form-data" >

			<div class="form-group">
	                <label for="password" class="col-md-3 control-label">Current Password</label>
	                <div class="col-md-9">
	                    <input type="password" class="form-control" name="curr_pass" placeholder="Your Current Password"size="50" required/>
	                </div>
	        </div>

	        <div class="form-group">
	                <label for="password" class="col-md-3 control-label">New Password</label>
	                <div class="col-md-9">
	                    <input type="password" class="form-control" name="new_pass" placeholder="Your New Password"size="50" required/>
	                </div>
	        </div>

	        <div class="form-group">
	                <label for="password" class="col-md-3 control-label">Current Password</label>
	                <div class="col-md-9">
	                    <input type="password" class="form-control" name="new_pass_again" placeholder="Your New Password"size="50" required/>
	                </div>
	        </div>

	        <div style="margin-top:10px" class="form-group">                        
              <div class="col-sm-12 controls">
                  <button type="submit" class="btn btn-success" name="change_pass" id="submit" >Change Password  </button>
              </div>
            </div>
        </form>

	</div>
</div>


<?php

include("includes/db.php");

if(isset($_POST['change_pass'])){
	$user = $_SESSION['email'];
	$curr_pass = $_POST['curr_pass'];
	$new_pass = $_POST['new_pass'];
	$new_pass_again = $_POST['new_pass_again'];
	
	$sel_pass = "select * from user where password='$curr_pass' and email='$user'";
     
	 $run_pass = mysqli_query($connect,$sel_pass);
	 
	 $check_pass=mysqli_num_rows($run_pass);
	 
	 if($check_pass==0){
		echo "<script>alert('Your current password is wrong!')</script>";
       exit();
	   //echo "<script>window.open('login.php','_self')</script>";
	}
	
	if($new_pass!=$new_pass_again){
		echo "<script>alert('New password do not match!')</script>";
	 exit();
	}
	
	else{
		$update_pass ="update user set password='$new_pass' where email='$user'";
		$run_pass=mysqli_query($connect,$update_pass);
		
		
		if($run_pass){
			echo "<script>alert('Your password has updated successfully!!!')</script>";
		   echo "<script>window.open('my_account.php','_self')</script>";
		}
	}
	
}

?>