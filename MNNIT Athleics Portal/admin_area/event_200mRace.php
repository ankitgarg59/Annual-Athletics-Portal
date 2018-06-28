<?php
     
       include("includes/db.php");
	   $get_event = "select * from event_result WHERE event_name='200m Race'";
	   $run_event = mysqli_query($connect,$get_event);
	   
	 #  $i=0;
	   $row_event = mysqli_fetch_array($run_event);

		   $event = $row_event['event_name'];
		   $id1_b = $row_event['winner1_id_b'];
		   $id2_b = $row_event['winner2_id_b'];
		   $id3_b = $row_event['winner3_id_b'];
		   $id1_g = $row_event['winner1_id_g'];
		   $id2_g = $row_event['winner2_id_g'];
		   $id3_g = $row_event['winner3_id_g'];
	?>

			
	
	
<div class="col-md-12 text-secondary">
	<div class="text-right">
	<br><p><b style='text-align:center;font-size:18px;'>200 Metres Racing</b></p><hr></br>
	</div>
		 <div class="panel panel-default panel-info">
		  	<div class="panel-heading" align='center'><h4 >Boys Event Results</h4></div>
				  	<table class="table table-bordered">
				  		<thead align="center">
				  			<tr>
				  				<th>Position</th>
								<th>Name</th>
								<th>Reg No.</th>
						        <th>Email</th>
								<th>Institute</th>
				  			</tr>
				  		</thead>

					<?php
					   $j=1;
					      list($name,$reg_no,$email,$institute) = get_result($id1_b,$j);
						  $j++;
					   ?>
						   	<tr align='left'>
					            <td align='left'>1</td>
					            <td align='left'> <?php echo $name;?></td>
					            <td align='left'><?php echo $reg_no; ?></td>
					            <td align='left'><?php echo $email; ?></td>
					            <td align='left'><?php echo $institute; ?></td>		                 		  
					    	</tr>
						
					<?php
					    list($name,$reg_no,$email,$institute) = get_result($id2_b,$j);
						$j++;
					?>
					        <tr align='left'>
					            <td align='left'>2</td>
					            <td align='left'> <?php echo $name;?></td>
					            <td align='left'><?php echo $reg_no; ?></td>
					            <td align='left'><?php echo $email; ?></td>
					            <td align='left'><?php echo $institute; ?></td>		                 		  
					    	</tr>
					  
						
					<?php
					    list($name,$reg_no,$email,$institute) = get_result($id3_b,$j);
						$j++;
					?>
					        <tr align='left'>
					            <td align='left'>3</td>
					            <td align='left'> <?php echo $name;?></td>
					            <td align='left'><?php echo $reg_no; ?></td>
					            <td align='left'><?php echo $email; ?></td>
					            <td align='left'><?php echo $institute; ?></td>		                 		  
					    	</tr>
					  
					</table>

		</div><br>
</div>


	<div class="col-md-12 text-secondary">
		<div class="panel panel-default panel-info">
		  	<div class="panel-heading" align='center'><h4 >Girls Event Results</h4></div>
				  	<table class="table table-bordered">
				  		<thead align="center">
				  			<tr>
				  				<th>Position</th>
								<th>Name</th>
								<th>Reg No.</th>
						        <th>Email</th>
								<th>Institute</th>
				  			</tr>
				  		</thead>

					<?php
					   $j=1;
					      list($name,$reg_no,$email,$institute) = get_result($id1_g,$j);
						  $j++;
					   ?>
						   	<tr align='left'>
					            <td align='left'>1</td>
					            <td align='left'> <?php echo $name;?></td>
					            <td align='left'><?php echo $reg_no; ?></td>
					            <td align='left'><?php echo $email; ?></td>
					            <td align='left'><?php echo $institute; ?></td>		                 		  
					    	</tr>
						
					<?php
					    list($name,$reg_no,$email,$institute) = get_result($id2_g,$j);
						$j++;
					?>
					        <tr align='left'>
					            <td align='left'>2</td>
					            <td align='left'> <?php echo $name;?></td>
					            <td align='left'><?php echo $reg_no; ?></td>
					            <td align='left'><?php echo $email; ?></td>
					            <td align='left'><?php echo $institute; ?></td>		                 		  
					    	</tr>
					  
						
					<?php
					    list($name,$reg_no,$email,$institute) = get_result($id3_g,$j);
						$j++;
					?>
					        <tr align='left'>
					            <td align='left'>3</td>
					            <td align='left'> <?php echo $name;?></td>
					            <td align='left'><?php echo $reg_no; ?></td>
					            <td align='left'><?php echo $email; ?></td>
					            <td align='left'><?php echo $institute; ?></td>		                 		  
					    	</tr>
					  
					</table>
			</div><br>
		</div>

<div class="col-md-12 text-secondary">
		<div class="panel panel-default panel-info">
		  	<div class="panel-heading" align='center'><h4 >Boys Event</h4></div>
				  	<table class="table table-bordered">
				  		<thead align="center">
				  			<tr>
				  				<th<S.No</th>
								<th>Name</th>
								<th>Reg No.</th>
						        <th>Email</th>
								<th>Institute</th>
				  			</tr>
				  		</thead>


		   <?php 
		   
		      		include("includes/db.php");
		      		$get_user = "select user_id from registered_participant where event_name='200m Race' and gender='Male'";
	         		$run_user = mysqli_query($connect,$get_user);
			 		$j=0;
			 		while($row_user = mysqli_fetch_array($run_user)){
				 	$j++;
				 	$user = $row_user['user_id'];
				 
				  	$get_userinfo = "select * from user where user_id='$user'";
	              	$run_userinfo = mysqli_query($connect,$get_userinfo);
				  
				  	$k=0;
				   	while($row_userinfo= mysqli_fetch_array($run_userinfo)){
				  	$user_name = $row_userinfo['name'];
		          	$reg_no=$row_userinfo['reg_no'];
		            $email=$row_userinfo['email'];
		            $institute = $row_userinfo['institute'];
				    $k++;
	     	  ?>
					<tr align="center">
                        <td><?php echo $j?></td>
		                <td><?php echo $user_name;?></td>
		                <td><?php echo $reg_no;?></td>
		                <td><?php echo $email;?></td>
		                <td><?php echo $institute;?></td>	  
                    </tr>
					  
			 <?php
			}
			}
		?>

		</table>
	</div><br>
</div>

<div class="col-md-12 text-secondary">
		<div class="panel panel-default panel-info">
		  	<div class="panel-heading" align='center'><h4 >Girls Event</h4></div>
				  	<table class="table table-bordered">
				  		<thead align="center">
				  			<tr>
				  				<th<S.No</th>
								<th>Name</th>
								<th>Reg No.</th>
						        <th>Email</th>
								<th>Institute</th>
				  			</tr>
				  		</thead>


		   <?php 
		   
		      		include("includes/db.php");
		      		$get_user = "select user_id from registered_participant where event_name='200m Race' and gender='Female'";
	         		$run_user = mysqli_query($connect,$get_user);
			 		$j=0;
			 		while($row_user = mysqli_fetch_array($run_user)){
				 	$j++;
				 	$user = $row_user['user_id'];
				 
				  	$get_userinfo = "select * from user where user_id='$user'";
	              	$run_userinfo = mysqli_query($connect,$get_userinfo);
				  
				  	$k=0;
				   	while($row_userinfo= mysqli_fetch_array($run_userinfo)){
				  	$user_name = $row_userinfo['name'];
		          	$reg_no=$row_userinfo['reg_no'];
		            $email=$row_userinfo['email'];
		            $institute = $row_userinfo['institute'];
				    $k++;
	     	  ?>
					<tr align="center">
                        <td><?php echo $j?></td>
		                <td><?php echo $user_name;?></td>
		                <td><?php echo $reg_no;?></td>
		                <td><?php echo $email;?></td>
		                <td><?php echo $institute;?></td>	  
                    </tr>
					  
			 <?php
			}
			}
		?>

		</table>
	</div><br>
</div>
