 <?php
     include("includes/db.php");
	                $user = $_SESSION['email'];
					 $get_user = "select * from user where email='$user'";
					 $run_user = mysqli_query($connect,$get_user);
					 
                      $row_user=mysqli_fetch_array($run_user);
					 
					 $id = $row_user['user_id'];
					 $name = $row_user['name'];
					 $reg_no = $row_user['reg_no'];
					 $institute = $row_user['institute'];
					 $course = $row_user['course'];
					 $branch = $row_user['branch'];
					 $email= $row_user['email'];
					 $pass= $row_user['password'];
					 $contact = $row_user['contact'];
					 $name = $row_user['name'];
					 $image= $row_user['image'];
					 
 ?>

<div class="container">
	<div class="col-sm-9 text-right">
		<hr>
			<p><b style='text-align:center;font-size:18px;'>Update Your Account</b></p>
		<hr>
	</br>

 			
     <form class="form-horizontal" action=""  method="post" enctype="multipart/form-data" >
                        
            <div class="form-group">
                <label for="user_name" class="col-md-3 control-label">Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="name" name="user_name" value="<?php echo $name ;?>" size="50" placeholder="Your Name" disabled>
                </div>
            </div>
            
             <div class="form-group">
                <label for="reg_no" class="col-md-3 control-label">Registration No</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="reg_no" name="reg_no" value="<?php echo $reg_no ;?>" size="50" placeholder="Your Registration Number">
                </div>
            </div>
           
            <div class="form-group">
                <label for="institute" class="col-md-3 control-label">Institute</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="institute" name="institute" value="<?php echo $institute ;?>" size="50" placeholder="Name Of Your Institute">
                </div>
            </div>

            <div class="form-group">
                <label for="course" class="col-md-3 control-label">Course</label>
                    <div class="col-md-9">
                        <select class="form-control" id="course" name="course" value="<?php echo $course ;?>">
                            <option><?php echo $course ;?></option>
                            <option>B.Tech./B.E.</option>
                            <option>MBA</option>
                            <option>MCA</option>
                            <option>M.Tech.</option>
                            <option>B.Sc./M.Sc.</option>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label for="branch" class="col-md-3 control-label">Branch</label>
                    <div class="col-md-9">
                        <select class="form-control" id="branch" name="branch" value="<?php echo $branch ;?>">
                            <option><?php echo $branch ;?></option>
                            <option>Computer Science & Engineering</option>
                            <option>Information Technology</option>
                            <option>Electrical Engineering</option>
                            <option>Electronics & communication Engineering</option>
                            <option>Mechanical Engineering</option>
                            <option>Other</option>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-3 control-label">Email</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="email" id="institute" size="50" value="<?php echo $email ;?>"placeholder="Your Email Address">
                </div>
            </div>
                
            <div class="form-group">
                <label for="contact" class="col-md-3 control-label">Contact</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="contact" name="contact" size="50" value="<?php echo $contact ;?>"placeholder="Your Contact Number">
                </div>
            </div>
           

           <div class="form-group">
                <label for="image" class="col-md-3 control-label">Upload Photo</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" id="image" name="image" value="<?php $image; ?>" required/>
                </div>
            </div>

            <div class="form-group">
                <!-- Button -->                                        
                <div class="col-md-offset-3 col-md-9 controls">

                    <button id="submit" type="submit" class="btn btn-success" name="update"><i class="icon-hand-right"></i> &nbsp Update Account</button> 
                </div>
            </div>
          
        </form>
	</div>

</div>

						
<?php

require ("require/validate.php");

if(isset($_POST['update']))
{
//$ip = getIP();
$c_id=$id;
//$name =  $name;
$reg_no =  $_POST['reg_no'];
$institute =  $_POST['institute'];
$course =  $_POST['course'];
$branch =  $_POST['branch'];
$email =  $_POST['email'];
$password = $pass;
$contact =  $_POST['contact'];

$image =  $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];


move_uploaded_file($image_tmp,"user_images/$image");
//insert posts into database
$update_user = "update user set name='$name',reg_no='$reg_no',email='$email',password='$password',institute='$institute',contact='$contact',image='$image'  where user_id='$c_id'";
$run_update = mysqli_query($connect,$update_user);

if($run_update)
{

echo "<script>alert('Your account  successfully updated!!!')</script>";
echo "<script>window.open('my_account.php','_self')</script>";


}
}

?>			