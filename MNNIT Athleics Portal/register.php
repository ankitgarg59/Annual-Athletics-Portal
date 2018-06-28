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
					$gender = $row_user['gender'];
					
 ?>


 <div class="container">
	<div class="col-sm-9 text-right">
		<hr>
			<p><b style='text-align:center;font-size:18px;'>Event  Registration</b></p>
		<hr>
		</br>

		<form class="form-horizontal" action=""  method="post" enctype="multipart/form-data" >
                        
            <div class="form-group">
                <label for="user_name" class="col-md-3 control-label">Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" type="text" id="name" name="user_name" disabled value="<?php echo $name ;?>" size="50" placeholder="Your Name" required/>
                </div>
            </div>
            
             <div class="form-group">
                <label for="reg_no" class="col-md-3 control-label">Registration No</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="reg_no" name="reg_no" disabled value="<?php echo $reg_no ;?>" size="50" placeholder="Your Registration Number" required/>
                </div>
            </div>
           
            <div class="form-group">
                <label for="institute" class="col-md-3 control-label">Institute</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="institute" name="institute" disabled value="<?php echo $institute ;?>" size="50" placeholder="Name Of Your Institute" required/>
                </div>
            </div>

            <div class="form-group">
                <label for="course" class="col-md-3 control-label">Course</label>
                    <div class="col-md-9">
                        <select class="form-control" id="course" name="course" value="<?php echo $course ;?>" disabled required/>
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
                <label for="event" class="col-md-3 control-label">Event</label>
                    <div class="col-md-9">
                        <select class="form-control" id="event" name="event" required/>
                            <option>Select an Event</option>
                            <option>100m Race </option>
							<option >200m Race</option>
							<option>400m Race</option>
							<option>800m Race</option>
							<option>1500m Race</option>
							<option>Discus Throw</option>
							<option>Hammer Throw</option>
							<option>Javelin Throw</option>
							<option>Shot put Throw</option>
							<option>Long Jump</option>
							<option>High Jump</option>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <!-- Button -->                                        
                <div class="col-md-offset-3 col-md-9 controls">

                    <button id="submit" type="submit" class="btn btn-success" name="register"><i class="icon-hand-right"></i> &nbsp Register</button> 

                </div>
            </div>

        </form>

	</div>
</div>

						
<?php

if(isset($_POST['register']))
{
//$ip = getIP();
$c_id=$id;
$event =  $_POST['event'];
$gend=$gender;

   $reg_event = "select count(user_id) as get_no_event from registered_participant where user_id='$c_id'";
   $run_reg_event = mysqli_query($connect,$reg_event);
$get_row = mysqli_fetch_assoc($run_reg_event);
$get_no_of_event = $get_row['get_no_event'];
    if($get_no_of_event<4){
	  
	     $get_event = "select count(user_id) as no_event from registered_participant where user_id='$c_id' and event_name='$event'";
         $run_get_event = mysqli_query($connect,$get_event);
        $row = mysqli_fetch_assoc($run_get_event);
        $no_of_event = $row['no_event'];
        if($no_of_event >0)
       {
           echo "<script>alert('Already registered for this event.Please select another event!!!')</script>";
        
        }
		else{
           $reg_part="insert into registered_participant(`user_id`,`event_name`,`gender`) values('$c_id','$event','$gend')";
           $run_reg_part = mysqli_query($connect,$reg_part);

         if($run_reg_part)
        {

            echo "<script>alert('Registered for event ---> $event!!!')</script>";
            echo "<script>window.open('my_account.php?register','_self')</script>";
        }
		}
	  
    }
   else
  {
	    echo "<script>alert('You have already registered for 4 events.So can not register!!!')</script>";
		echo "<script>window.open('my_account.php?register','_self')</script>";
   }

 
}

?>			