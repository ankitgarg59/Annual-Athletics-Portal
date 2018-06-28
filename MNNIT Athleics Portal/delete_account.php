<div class="container">
	<div class="col-sm-9 text-right">
		<hr>
			<p><b style='text-align:center;font-size:18px;'>Delete Your Account</b></p>
		<hr>
		</br>

		<form class="form-horizontal" action=""  method="post" enctype="multipart/form-data" >

			<p><b style='text-align:center;font-size:18px;'>Do you really want to delete your Account ?</b></p>
		</br>

			<div style="margin-top:10px" class="form-group">                        
              <div class="col-sm-12 controls">
                  <button type="submit" class="btn btn-success" name="yes" id="submit" value="Yes, I want"> Yes, I want </button>
              </div>
            </div><div style="margin-top:10px" class="form-group">                        
              <div class="col-sm-12 controls">
                  <button type="submit" class="btn btn-danger" name="no" id="submit" value="No, I don't">No, I don't </button>
              </div>
            </div>

	</div>
</div>

<?php
include("includes/db.php");

$user=$_SESSION['email'];

if(isset($_POST['yes']))
{
	$delete_customer = "delete from user where email='$user'";
	
     session_destroy();
	$run_customer = mysqli_query($connect,$delete_customer);
	
	echo "<script>alert('Your account has been deleted.')</script>";

   echo "<script>window.open('../index.php','_self')</script>";
}

if(isset($_POST['no']))
{
	echo "<script>window.open('my_account.php','_self')</script>";
}
?>