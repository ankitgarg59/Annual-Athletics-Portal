<div class="col-sm-12 text-secondary">
    <div class="panel panel-default panel-info">
        <div class="panel-heading" align='center'><h4 >View All Users Here</h4></div>
            <table class="table table-bordered table-responsive">
				   
			   <tr align="center" bgcolor="skyblue">
			   <th>S.No.</th>
			   <th>Name</th>
			   <th>Reg.No.</th>
			        <th>Email</th>
					<th>Institute</th>
					<th>Course</th>		
			   </tr>
			   
			   
			   <?php
			       include("includes/db.php");
				   $get_user = "select * from user";
				   $run_user = mysqli_query($connect,$get_user);
				   
				   $i=0;
				   while($row_user = mysqli_fetch_array($run_user)){
					   $user_name = $row_user['name'];
					   $reg_no=$row_user['reg_no'];
					   $email=$row_user['email'];
					    $institute = $row_user['institute'];
						 $course = $row_user['course'];
					   $i++;		   
				   
			   ?>
			   		<tr align="center">
			        	<td><?php echo $i?></td>
					 	<td><?php echo $user_name;?></td>
					 	<td><?php echo $reg_no;?></td>
					  	<td><?php echo $email;?></td>
					   	<td><?php echo $institute;?></td>
					   	<td><?php echo $course;?></td>
					  
			   		</tr>
			   
				   <?php } ?>

		</table> 
	</div>
</div>